<?php
/**
 * Plugin Name: Notaria Huanca Chatbot
 * Description: Sistema de Chatbot con integración GPT para Notaria Huanca.
 * Version: 1.0
 * Author: Jules
 */

if (!defined('ABSPATH')) exit;

// Define plugin constants
define('NOTARIA_CHATBOT_PATH', plugin_dir_path(__FILE__));
define('NOTARIA_CHATBOT_URL', plugin_dir_url(__FILE__));

// Include necessary files
require_once NOTARIA_CHATBOT_PATH . 'includes/db-connect.php';
require_once NOTARIA_CHATBOT_PATH . 'includes/gpt-integration.php';
require_once NOTARIA_CHATBOT_PATH . 'admin/admin-dashboard.php';

// Activation hook to create tables if they don't exist (using WP prefix if possible)
register_activation_hook(__FILE__, 'notaria_chatbot_activate');

function notaria_chatbot_activate() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    $sql = "CREATE TABLE {$wpdb->prefix}notaria_config (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        setting_key varchar(50) NOT NULL,
        setting_value text NOT NULL,
        PRIMARY KEY  (id),
        UNIQUE KEY setting_key (setting_key)
    ) $charset_collate;

    CREATE TABLE {$wpdb->prefix}notaria_kb (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        question text NOT NULL,
        answer text NOT NULL,
        use_gpt tinyint(1) DEFAULT 0,
        PRIMARY KEY  (id)
    ) $charset_collate;

    CREATE TABLE {$wpdb->prefix}notaria_chats (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        visitor_name varchar(100),
        visitor_email varchar(100),
        status varchar(20) DEFAULT 'open',
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id)
    ) $charset_collate;

    CREATE TABLE {$wpdb->prefix}notaria_messages (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        chat_id mediumint(9) NOT NULL,
        sender varchar(20) NOT NULL,
        message text NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    dbDelta($sql);

    // Initial config
    $wpdb->insert($wpdb->prefix . 'notaria_config', array('setting_key' => 'bot_name', 'setting_value' => 'HuancaBot'), array('%s', '%s'));
    $wpdb->insert($wpdb->prefix . 'notaria_config', array('setting_key' => 'welcome_message', 'setting_value' => '¡Hola! Bienvenido a Notaria Huanca. ¿En qué podemos ayudarte hoy?'), array('%s', '%s'));

    // Seed Knowledge Base
    $advisor_msg = "En un momento te contactaré con un asesor para brindarte una atención personalizada. 📞\n\nPor favor, comunícate al siguiente número:\n👉 +51 905 590 656";

    $kb_data = array(
        array(
            'question' => 'Hola',
            'answer' => 'Hola, ¿en qué puedo ayudarte hoy? 👋'
        ),
        array(
            'question' => 'gracias',
            'answer' => 'Notaria Huanca siempre estara a tu servicio... Nos vemos pronto 👋'
        ),
        array(
            'question' => 'SI',
            'answer' => 'Asesor disponible, puedes escribir directamente +51905590656'
        ),
        array(
            'question' => 'Sobre Escrituras Públicas o relacionados',
            'answer' => "Contamos con los siguientes servicios especializados: COMPRAVENTA DE INMUEBLES, ANTICIPO DE LEGÍTIMA DE INMUEBLE, PODERES POR ESCRITURA PÚBLICA, DONACIÓN DE INMUEBLE, SUSTITUCIÓN DE REGIMEN PATRIMONIAL, CONSTITUCIÓN DE SOCIEDADES, OTROS. ¿Cuál de estos te interesa conocer más?"
        ),
        array(
            'question' => 'COMPRAVENTA DE INMUEBLES',
            'answer' => "🏠 COMPRAVENTA DE INMUEBLES: Los requisitos referenciales son: Minuta firmada por las partes y abogado, Fotocopia de DNI con última votación, Copia literal vigente de la partida registral, Vigencia de poder (si aplica), Constancia de pago de impuesto a la renta y alcabala, Pago del Impuesto Predial y Constancia de No Adeudo, Medio de pago bancario (vouchers, cheques). ¿Deseas hablar con un asesor para más detalles?"
        ),
        array(
            'question' => 'ANTICIPO DE LEGÍTIMA DE INMUEBLE',
            'answer' => "🎁 ANTICIPO DE LEGÍTIMA: Requisitos referenciales: Minuta firmada por las partes y abogado, Fotocopia de DNI, Copia literal vigente, Vigencia de poder (si aplica), Impuesto Predial y Constancia de No Adeudo, Partidas de nacimiento originales de los hijos. ¿Te gustaría hablar con un asesor?"
        ),
        array(
            'question' => 'PODERES POR ESCRITURA PÚBLICA',
            'answer' => "⚖️ PODERES POR ESCRITURA PÚBLICA: Requisitos básicos: Minuta suscrita por otorgantes y abogado, Fotocopia de DNI de los contratantes, Fotocopia del DNI del apoderado. ¿Quieres hablar con un asesor?"
        ),
        array(
            'question' => 'DONACIÓN DE INMUEBLE',
            'answer' => "🤝 DONACIÓN DE INMUEBLE: Requisitos principales: Minuta firmada por las partes y abogado, Fotocopia de DNI, Copia literal vigente, Vigencia de poder (si aplica), Impuesto de Alcabala (si aplica), Impuesto Predial y Constancia de No Adeudo. ¿Necesitas hablar con un asesor?"
        ),
        array(
            'question' => 'SUSTITUCIÓN DE REGIMEN PATRIMONIAL',
            'answer' => "💍 SUSTITUCIÓN DE REGIMEN PATRIMONIAL: Requisitos: Minuta firmada por cónyuges y abogado, Fotocopia de DNI, Partida de matrimonio actualizada (RENIEC), Documentación de bienes muebles/inmuebles. ¿Deseas hablar con un asesor?"
        ),
        array(
            'question' => 'CONSTITUCIÓN DE SOCIEDADES',
            'answer' => "🏢 CONSTITUCIÓN DE SOCIEDADES: Requisitos para tu empresa: Minuta de constitución firmada por socios y abogado, Reserva de nombre vigente (SUNARP), Fotocopia de DNI de los socios, Declaración jurada de aporte de bienes, Voucher de depósito de capital social. ¿Quieres hablar con un asesor?"
        ),
        array(
            'question' => 'OTROS',
            'answer' => "Para otros trámites notariales específicos, estaré encantado de conectarte con un asesor. ¿Deseas hablar con un asesor ahora?"
        ),
        array(
            'question' => 'Quieres hablar con un asesor',
            'answer' => $advisor_msg
        ),
        array(
            'question' => 'Mas información',
            'answer' => $advisor_msg
        ),
        array(
            'question' => 'mas detalles',
            'answer' => $advisor_msg
        ),
        array(
            'question' => 'Certificaciones',
            'answer' => "📑 CERTIFICACIONES: Brindamos los siguientes servicios: Certificación de firmas, Apertura y cierre de libros (Persona Jurídica/Natural), Certificación de copias, Autorización de viaje, Otros. ¿Te gustaría hablar con un asesor?"
        ),
        array(
            'question' => 'ASUNTOS NO CONTENCIOSOS',
            'answer' => "📝 ASUNTOS NO CONTENCIOSOS: Podemos ayudarte con: Rectificación de partidas, Sucesión intestada, Separación convencional y divorcio ulterior, Prescripción adquisitiva. ¿Deseas hablar con un asesor?"
        ),
        array(
            'question' => 'TRANSFERENCIAS VEHICULARES',
            'answer' => "🚗 TRANSFERENCIAS VEHICULARES: Realizamos transferencias vehiculares y otros trámites relacionados. ¿Quieres hablar con un asesor?"
        )
    );

    foreach ($kb_data as $item) {
        $wpdb->insert($wpdb->prefix . 'notaria_kb', $item, array('%s', '%s'));
    }
}

// Enqueue scripts and styles for the frontend
add_action('wp_enqueue_scripts', 'notaria_chatbot_enqueue_scripts');

function notaria_chatbot_enqueue_scripts() {
    wp_enqueue_style('notaria-chatbot-style', NOTARIA_CHATBOT_URL . 'public/chatbot-widget.css');
    wp_enqueue_script('notaria-chatbot-script', NOTARIA_CHATBOT_URL . 'public/chatbot-widget.js', array('jquery'), '1.0', true);

    wp_localize_script('notaria-chatbot-script', 'notariaChatbotData', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('notaria_chatbot_nonce')
    ));
}

// Add the chatbot widget to the footer
add_action('wp_footer', 'notaria_chatbot_render_widget');

function notaria_chatbot_render_widget() {
    ?>
    <div id="notaria-chatbot-container">
        <div id="notaria-chatbot-button">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
        </div>
        <div id="notaria-chatbot-window" style="display: none;">
            <div id="notaria-chatbot-header">
                <span>Notaria Huanca - Asistente Virtual</span>
                <button id="notaria-chatbot-close">×</button>
            </div>
            <div id="notaria-chatbot-messages"></div>
            <div id="notaria-chatbot-input">
                <input type="text" id="notaria-chatbot-text" placeholder="Escribe tu mensaje...">
                <button id="notaria-chatbot-send">Enviar</button>
            </div>
        </div>
    </div>
    <?php
}

// AJAX handler for bot messages
add_action('wp_ajax_notaria_chatbot_message', 'notaria_chatbot_handle_message');
add_action('wp_ajax_nopriv_notaria_chatbot_message', 'notaria_chatbot_handle_message');

function notaria_chatbot_handle_message() {
    check_ajax_referer('notaria_chatbot_nonce', 'nonce');

    $message = sanitize_text_field($_POST['message']);

    // First, try to find in Knowledge Base
    $response = notaria_chatbot_find_kb_response($message);

    // If not found, use GPT
    if (!$response) {
        $response = notaria_chatbot_get_gpt_response($message);
    }

    wp_send_json_success(array('response' => $response));
}
