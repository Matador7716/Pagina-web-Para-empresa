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
    $wa_link = '<br><br><a href="https://api.whatsapp.com/send?phone=51905590656" target="_blank" style="color: #25d366; font-weight: bold; text-decoration: underline;">[Contactar por WhatsApp]</a>';
    $advisor_msg = "Ahora te contactare con un asesor que te brindara mas información: " . $wa_link;

    $kb_data = array(
        array(
            'question' => 'Sobre Escrituras Públicas o relacionados',
            'answer' => 'Contamos con los siguientes servicios:<br><ol><li>COMPRAVENTA DE INMUEBLES</li><li>ANTICIPO DE LEGÍTIMA DE INMUEBLE</li><li>PODERES POR ESCRITURA PÚBLICA</li><li>DONACIÓN DE INMUEBLE</li><li>SUSTITUCIÓN DE REGIMEN PATRIMONIAL</li><li>CONSTITUCIÓN DE SOCIEDADES</li><li>OTROS</li></ol><br>¿Cuál de estos te interesa?'
        ),
        array(
            'question' => 'COMPRAVENTA DE INMUEBLES',
            'answer' => '<strong>COMPRAVENTA DE INMUEBLES</strong><br>Importante: Los requisitos son referenciales.<br><ol><li>Minuta firmada por las partes y abogado.</li><li>Fotocopia de DNI con última votación.</li><li>Copia literal vigente de la partida registral.</li><li>Vigencia de poder (si aplica).</li><li>Constancia de pago de impuesto a la renta y alcabala.</li><li>Pago del Impuesto Predial y Constancia de No Adeudo.</li><li>Medio de pago bancario (vouchers, cheques).</li></ol>¿Quieres hablar con un asesor?'
        ),
        array(
            'question' => 'ANTICIPO DE LEGÍTIMA DE INMUEBLE',
            'answer' => '<strong>ANTICIPO DE LEGÍTIMA</strong><br>Requisitos referenciales:<br><ol><li>Minuta firmada por las partes y abogado.</li><li>Fotocopia de DNI.</li><li>Copia literal vigente.</li><li>Vigencia de poder (si aplica).</li><li>Impuesto Predial y Constancia de No Adeudo.</li><li>Partidas de nacimiento originales de los hijos.</li></ol>¿Quieres hablar con un asesor?'
        ),
        array(
            'question' => 'PODERES POR ESCRITURA PÚBLICA',
            'answer' => '<strong>PODERES POR ESCRITURA PÚBLICA</strong><br>Requisitos referenciales:<br><ol><li>Minuta suscrita por otorgantes y abogado.</li><li>Fotocopia de DNI de los contratantes.</li><li>Fotocopia del DNI del apoderado.</li></ol>¿Quieres hablar con un asesor?'
        ),
        array(
            'question' => 'DONACIÓN DE INMUEBLE',
            'answer' => '<strong>DONACIÓN DE INMUEBLE</strong><br>Requisitos:<br><ol><li>Minuta firmada por las partes y abogado.</li><li>Fotocopia de DNI.</li><li>Copia literal vigente.</li><li>Vigencia de poder (si aplica).</li><li>Impuesto de Alcabala (si aplica).</li><li>Impuesto Predial y Constancia de No Adeudo.</li></ol>¿Quieres hablar con un asesor?'
        ),
        array(
            'question' => 'SUSTITUCIÓN DE REGIMEN PATRIMONIAL',
            'answer' => '<strong>SUSTITUCIÓN DE REGIMEN PATRIMONIAL</strong><br>Requisitos:<br><ol><li>Minuta firmada por cónyuges y abogado.</li><li>Fotocopia de DNI.</li><li>Partida de matrimonio actualizada (RENIEC).</li><li>Documentación de bienes muebles/inmuebles.</li></ol>¿Quieres hablar con un asesor?'
        ),
        array(
            'question' => 'CONSTITUCIÓN DE SOCIEDADES',
            'answer' => '<strong>CONSTITUCIÓN DE SOCIEDADES</strong><br>Requisitos:<br><ol><li>Minuta de constitución firmada por socios y abogado.</li><li>Reserva de nombre vigente (SUNARP).</li><li>Fotocopia de DNI de los socios.</li><li>Declaración jurada de aporte de bienes.</li><li>Voucher de depósito de capital social.</li></ol>¿Quieres hablar con un asesor?'
        ),
        array(
            'question' => 'OTROS',
            'answer' => 'Para otros trámites, ¿Quieres hablar con un asesor?'
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
            'answer' => '<strong>Certificaciones:</strong><br>- certificación de firmas<br>- certificación de apertura y cierre de libros (persona jurídica)<br>- certificación de apertura y cierre de libros (persona natural)<br>- certificación de copias<br>- autorización de viaje<br>- otros<br><br>¿Quieres hablar con un asesor?'
        ),
        array(
            'question' => 'ASUNTOS NO CONTENCIOSOS',
            'answer' => '<strong>ASUNTOS NO CONTENCIOSOS:</strong><br>- rectificación de partidas<br>- sucesión intestada<br>- separacion convencional y divorcio ulterior<br>- prescripción adquisitiva<br>- otros<br><br>¿Quieres hablar con un asesor?'
        ),
        array(
            'question' => 'TRANSFERENCIAS VEHICULARES',
            'answer' => '<strong>TRANSFERENCIAS VEHICULARES:</strong><br>- transferencias vehiculares<br>- otros<br><br>¿Quieres hablar con un asesor?'
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
