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

    // Check if we have already seeded
    $config_exists = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM {$wpdb->prefix}notaria_config WHERE setting_key = %s", 'bot_name'));

    if (!$config_exists) {
        // Initial config
        $wpdb->insert($wpdb->prefix . 'notaria_config', array('setting_key' => 'bot_name', 'setting_value' => 'HuancaBot'), array('%s', '%s'));
        $wpdb->insert($wpdb->prefix . 'notaria_config', array('setting_key' => 'welcome_message', 'setting_value' => '¡Hola! Bienvenido a Notaria Huanca. ¿En qué podemos ayudarte hoy?'), array('%s', '%s'));
    }

    $kb_exists = $wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->prefix}notaria_kb");
    if ($kb_exists > 0) {
        return;
    }

    // Seed Knowledge Base
    $advisor_msg = "Ahora te contactare con un asesor que te brindara mas información: \n\nAsesor disponible, puedes escribir directamente +51905590656";

    $kb_data = array(
        array(
            'question' => 'Hola',
            'answer' => 'Hola, ¿en qué puedo ayudarte hoy? 👋'
        ),
        array(
            'question' => 'Sobre Escrituras Públicas o relacionados',
            'answer' => "- COMPRAVENTA DE INMUEBLES, ANTICIPO DE LEGÍTIMA DE INMUEBLE, PODERES POR ESCRITURA PÚBLICA, DONACIÓN DE INMUEBLE, SUSTITUCIÓN DE REGIMEN PATRIMONIAL, CONSTITUCIÓN DE SOCIEDADES, OTROS..."
        ),
        array(
            'question' => 'COMPRAVENTA DE INMUEBLES',
            'answer' => "Importante: Los requisitos son referenciales. Es necesario revisar la información y documentación presentada para determinar si se requiere documentación adicional: \n- Minuta, debidamente firmada por todas las partes y autorizada por abogado colegiado.\n- Fotocopia del Documento de Identidad (DNI), de los contratantes, con el sello de la última votación o, en su defecto, con la constancia de dispensa o el pago de la multa correspondiente, Copia literal vigente: de la partida registral del inmueble, Vigencia de poder actualizada, expedida por SUNARP, en caso intervenga un apoderado de persona natural o jurídica, Constancia de pago, del impuesto a la renta y del impuesto de alcabala, de ser aplicable.\n- Pago del Impuesto Predial: correspondiente a los períodos en que el vendedor fue contribuyente, acompañado de la Constancia de No Adeudo, Medio de pago bancario: utilizado en la transacción (vouchers, copia legalizada de cheques, entre otros).\n\nQuieres hablar con un asesor?"
        ),
        array(
            'question' => 'ANTICIPO DE LEGÍTIMA DE INMUEBLE',
            'answer' => "Importante: Los requisitos indicados son referenciales. La notaría revisará la información y documentación presentada para determinar si es necesario solicitar documentos adicionales.\n- Minuta debidamente firmada por todas las partes y autorizada por abogado colegiado, Fotocopia del Documento Nacional de Identidad (DNI) de los contratantes, con el sello de la última votación o, en su defecto, con constancia de dispensa o comprobante de pago de la multa.\n- Copia literal vigente de la partida registral del inmueble, Vigencia de poder actualizada expedida por SUNARP, en caso intervenga un apoderado de persona natural o jurídica, Constancia de pago del Impuesto Predial de los períodos en que el vendedor fue contribuyente, junto con la Constancia de No Adeudo, Partidas de nacimiento vigentes de los hijos o beneficiarios que acrediten su calidad de herederos forzosos (originales).\n\nQuieres hablar con un asesor?"
        ),
        array(
            'question' => 'PODERES POR ESCRITURA PÚBLICA',
            'answer' => "Importante: Los requisitos señalados son referenciales. La notaría revisará la información y documentación presentada para determinar si es necesario solicitar requisitos adicionales.\n\n- Minuta suscrita por el o los otorgantes y autorizada por abogado colegiado, Fotocopia del Documento Nacional de Identidad (DNI) de los contratantes, con el sello de la última votación o, en su defecto, con constancia de dispensa o comprobante de pago de la multa, Fotocopia del Documento de Identidad del apoderado, en caso corresponda.\n\nQuieres hablar con un asesor?"
        ),
        array(
            'question' => 'DONACIÓN DE INMUEBLE',
            'answer' => "- Minuta debidamente firmada por todas las partes y autorizada por abogado colegiado, Fotocopia del Documento Nacional de Identidad (DNI) de los contratantes, con el sello de la última votación o, en su --defecto, constancia de dispensa o comprobante de pago de la multa, Copia literal vigente de la partida registral del inmueble, Vigencia de poder actualizada expedida por SUNARP, en caso intervenga un apoderado de persona natural o jurídica, Constancia de pago del Impuesto de Alcabala, cuando corresponda, Constancia de pago del Impuesto Predial de los períodos en que el transferente fue contribuyente, junto con la Constancia de No Adeudo.\n\nQuieres hablar con un asesor?"
        ),
        array(
            'question' => 'SUSTITUCIÓN DE REGIMEN PATRIMONIAL',
            'answer' => "Importante: Los requisitos son referenciales. Es necesario revisar la información y documentación presentada para determinar si se requiere documentación adicional.\n\n- Minuta firmada por ambos cónyuges y debidamente autorizada por abogado colegiado.\n- Fotocopia del Documento Nacional de Identidad (DNI) de los contratantes, con el sello de la última votación o, en su defecto, con constancia de dispensa o comprobante de pago de la multa, Partida de matrimonio actualizada expedida por RENIEC, Si el acta de matrimonio proviene de provincia, deberá estar visada por RENIEC, En caso de existir bienes muebles o inmuebles de propiedad de la sociedad conyugal, se solicitará la documentación adicional correspondiente.\n\nQuieres hablar con un asesor?"
        ),
        array(
            'question' => 'CONSTITUCIÓN DE SOCIEDADES',
            'answer' => "- Minuta de constitución firmada por los socios y autorizada por abogado colegiado (*).\nReserva de nombre vigente expedida por SUNARP, Fotocopia del Documento Nacional de Identidad (DNI) de los socios, con el sello de la última votación o, en su defecto, constancia de dispensa o comprobante de pago de la multa, Declaración jurada de aporte de bienes, cuando corresponda (**), Voucher y/o certificación de depósito bancario por el pago del capital social, cuando corresponda (**).\n\nQuieres hablar con un asesor?"
        ),
        array(
            'question' => 'OTROS',
            'answer' => "Quieres hablar con un asesor?"
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
            'question' => 'SI',
            'answer' => "Ahora te contactare con un asesor que te brindara mas información, \n\nAsesor disponible, puedes escribir directamente +51905590656"
        ),
        array(
            'question' => 'NO',
            'answer' => "Lo siento, te puedo ayudar en algo mas..."
        ),
        array(
            'question' => 'gracias',
            'answer' => "Notaria Huanca siempre estara a tu servicio... Nos vemos pronto 👋"
        ),
        array(
            'question' => 'Certificaciones',
            'answer' => "- certificación de firmas, certificación de apertura y cierre de libros (persona jurídica), certificación de apertura y cierre de libros (persona natural), certificación de copias, autorización de viaje, otros.\n\nQuieres hablar con un asesor?"
        ),
        array(
            'question' => 'ASUNTOS NO CONTENCIOSOS',
            'answer' => "- rectificación de partidas, sucesión intestada, separacion convencional y divorcio ulterior, prescripción adquisitiva, otros.\n\nQuieres hablar con un asesor?"
        ),
        array(
            'question' => 'TRANSFERENCIAS VEHICULARES',
            'answer' => "- transferencias vehiculares, otros...\n\nQuieres hablar con un asesor?"
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
