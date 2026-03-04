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
            'question' => 'SI',
            'answer' => 'Asesor disponible, puedes escribir directamente +51905590656'
        ),
        array(
            'question' => 'Sobre Escrituras Públicas o relacionados',
            'answer' => "Contamos con los siguientes servicios especializados: 📄\n\n1. COMPRAVENTA DE INMUEBLES\n2. ANTICIPO DE LEGÍTIMA DE INMUEBLE\n3. PODERES POR ESCRITURA PÚBLICA\n4. DONACIÓN DE INMUEBLE\n5. SUSTITUCIÓN DE REGIMEN PATRIMONIAL\n6. CONSTITUCIÓN DE SOCIEDADES\n7. OTROS\n\n¿Cuál de estos te interesa conocer más?"
        ),
        array(
            'question' => 'COMPRAVENTA DE INMUEBLES',
            'answer' => "🏠 COMPRAVENTA DE INMUEBLES\n\nLos requisitos referenciales son:\n\n1. Minuta firmada por las partes y abogado.\n2. Fotocopia de DNI con última votación.\n3. Copia literal vigente de la partida registral.\n4. Vigencia de poder (si aplica).\n5. Constancia de pago de impuesto a la renta y alcabala.\n6. Pago del Impuesto Predial y Constancia de No Adeudo.\n7. Medio de pago bancario (vouchers, cheques).\n\n¿Deseas hablar con un asesor para más detalles?"
        ),
        array(
            'question' => 'ANTICIPO DE LEGÍTIMA DE INMUEBLE',
            'answer' => "🎁 ANTICIPO DE LEGÍTIMA\n\nRequisitos referenciales:\n\n1. Minuta firmada por las partes y abogado.\n2. Fotocopia de DNI.\n3. Copia literal vigente.\n4. Vigencia de poder (si aplica).\n5. Impuesto Predial y Constancia de No Adeudo.\n6. Partidas de nacimiento originales de los hijos.\n\n¿Te gustaría hablar con un asesor?"
        ),
        array(
            'question' => 'PODERES POR ESCRITURA PÚBLICA',
            'answer' => "⚖️ PODERES POR ESCRITURA PÚBLICA\n\nRequisitos básicos:\n\n1. Minuta suscrita por otorgantes y abogado.\n2. Fotocopia de DNI de los contratantes.\n3. Fotocopia del DNI del apoderado.\n\n¿Quieres hablar con un asesor?"
        ),
        array(
            'question' => 'DONACIÓN DE INMUEBLE',
            'answer' => "🤝 DONACIÓN DE INMUEBLE\n\nRequisitos principales:\n\n1. Minuta firmada por las partes y abogado.\n2. Fotocopia de DNI.\n3. Copia literal vigente.\n4. Vigencia de poder (si aplica).\n5. Impuesto de Alcabala (si aplica).\n6. Impuesto Predial y Constancia de No Adeudo.\n\n¿Necesitas hablar con un asesor?"
        ),
        array(
            'question' => 'SUSTITUCIÓN DE REGIMEN PATRIMONIAL',
            'answer' => "💍 SUSTITUCIÓN DE REGIMEN PATRIMONIAL\n\nRequisitos:\n\n1. Minuta firmada por cónyuges y abogado.\n2. Fotocopia de DNI.\n3. Partida de matrimonio actualizada (RENIEC).\n4. Documentación de bienes muebles/inmuebles.\n\n¿Deseas hablar con un asesor?"
        ),
        array(
            'question' => 'CONSTITUCIÓN DE SOCIEDADES',
            'answer' => "🏢 CONSTITUCIÓN DE SOCIEDADES\n\nRequisitos para tu empresa:\n\n1. Minuta de constitución firmada por socios y abogado.\n2. Reserva de nombre vigente (SUNARP).\n3. Fotocopia de DNI de los socios.\n4. Declaración jurada de aporte de bienes.\n5. Voucher de depósito de capital social.\n\n¿Quieres hablar con un asesor?"
        ),
        array(
            'question' => 'OTROS',
            'answer' => "Para otros trámites notariales específicos, estaré encantado de conectarte con un asesor. 📞\n\n¿Deseas hablar con un asesor ahora?"
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
            'answer' => "📑 CERTIFICACIONES\n\nBrindamos los siguientes servicios:\n\n- Certificación de firmas\n- Apertura y cierre de libros (Persona Jurídica/Natural)\n- Certificación de copias\n- Autorización de viaje\n- Otros\n\n¿Te gustaría hablar con un asesor?"
        ),
        array(
            'question' => 'ASUNTOS NO CONTENCIOSOS',
            'answer' => "📝 ASUNTOS NO CONTENCIOSOS\n\nPodemos ayudarte con:\n\n- Rectificación de partidas\n- Sucesión intestada\n- Separación convencional y divorcio ulterior\n- Prescripción adquisitiva\n\n¿Deseas hablar con un asesor?"
        ),
        array(
            'question' => 'TRANSFERENCIAS VEHICULARES',
            'answer' => "🚗 TRANSFERENCIAS VEHICULARES\n\nRealizamos transferencias vehiculares y otros trámites relacionados.\n\n¿Quieres hablar con un asesor?"
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
