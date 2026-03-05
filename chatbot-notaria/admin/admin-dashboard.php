<?php
if (!defined('ABSPATH')) exit;

add_action('admin_menu', 'notaria_chatbot_admin_menu');

function notaria_chatbot_admin_menu() {
    add_menu_page(
        'Notaria Chatbot',
        'Notaria Chatbot',
        'manage_options',
        'notaria-chatbot',
        'notaria_chatbot_admin_page',
        'dashicons-format-chat',
        25
    );
}

function notaria_chatbot_admin_page() {
    $tab = isset($_GET['tab']) ? $_GET['tab'] : 'conversaciones';

    // Handle settings save
    if (isset($_POST['notaria_save_settings'])) {
        check_admin_referer('notaria_chatbot_settings');
        if (isset($_POST['gpt_api_key'])) {
            set_notaria_config('gpt_api_key', sanitize_text_field($_POST['gpt_api_key']));
        }
        echo '<div class="updated"><p>Configuración guardada.</p></div>';
    }

    // Handle KB actions
    if (isset($_POST['notaria_add_kb'])) {
        check_admin_referer('notaria_chatbot_kb');
        global $wpdb;
        $wpdb->insert($wpdb->prefix . 'notaria_kb', array(
            'question' => sanitize_textarea_field($_POST['question']),
            'answer' => strip_tags(sanitize_textarea_field($_POST['answer'])),
            'use_gpt' => isset($_POST['use_gpt']) ? 1 : 0
        ));
        echo '<div class="updated"><p>Pregunta añadida.</p></div>';
    }

    if (isset($_POST['notaria_edit_kb'])) {
        check_admin_referer('notaria_chatbot_edit_kb');
        global $wpdb;
        $wpdb->update($wpdb->prefix . 'notaria_kb', array(
            'question' => sanitize_textarea_field($_POST['question']),
            'answer' => strip_tags(sanitize_textarea_field($_POST['answer'])),
            'use_gpt' => isset($_POST['use_gpt']) ? 1 : 0
        ), array('id' => intval($_POST['kb_id'])));
        echo '<div class="updated"><p>Pregunta actualizada.</p></div>';
    }

    if (isset($_GET['delete_kb'])) {
        check_admin_referer('notaria_delete_kb_' . $_GET['delete_kb']);
        global $wpdb;
        $wpdb->delete($wpdb->prefix . 'notaria_kb', array('id' => $_GET['delete_kb']));
        echo '<div class="updated"><p>Pregunta eliminada.</p></div>';
    }

    ?>
    <div class="wrap">
        <h1>Notaria Huanca - Plataforma de Chatbot</h1>
        <h2 class="nav-tab-wrapper">
            <a href="<?php echo admin_url('admin.php?page=notaria-chatbot&tab=conversaciones'); ?>" class="nav-tab <?php echo $tab == 'conversaciones' ? 'nav-tab-active' : ''; ?>">Iniciar conversaciones</a>
            <a href="<?php echo admin_url('admin.php?page=notaria-chatbot&tab=chatbot'); ?>" class="nav-tab <?php echo $tab == 'chatbot' ? 'nav-tab-active' : ''; ?>">Implementar Chatbots</a>
            <a href="<?php echo admin_url('admin.php?page=notaria-chatbot&tab=agentes'); ?>" class="nav-tab <?php echo $tab == 'agentes' ? 'nav-tab-active' : ''; ?>">Conectar agentes</a>
            <a href="<?php echo admin_url('admin.php?page=notaria-chatbot&tab=crm'); ?>" class="nav-tab <?php echo $tab == 'crm' ? 'nav-tab-active' : ''; ?>">Integrar con tu CRM</a>
            <a href="<?php echo admin_url('admin.php?page=notaria-chatbot&tab=masivos'); ?>" class="nav-tab <?php echo $tab == 'masivos' ? 'nav-tab-active' : ''; ?>">Enviar mensajes Masivos</a>
            <a href="<?php echo admin_url('admin.php?page=notaria-chatbot&tab=tienda'); ?>" class="nav-tab <?php echo $tab == 'tienda' ? 'nav-tab-active' : ''; ?>">Integrar con tu tienda Online</a>
        </h2>

        <div class="tab-content" style="margin-top: 20px; background: #fff; padding: 20px; border: 1px solid #ccc;">
            <?php
            switch ($tab) {
                case 'conversaciones':
                    echo '<h3>Conversaciones en tiempo real</h3><p>Aquí puedes ver y responder a los chats activos.</p>';
                    notaria_chatbot_render_conversations();
                    break;
                case 'chatbot':
                    echo '<h3>Configuración del Chatbot y Base de Conocimientos</h3>';
                    notaria_chatbot_render_kb_config();
                    break;
                case 'agentes':
                    echo '<h3>Gestión de Agentes</h3><p>Conecta a tus agentes de servicio al cliente para intervención humana.</p>';
                    ?>
                    <table class="widefat fixed">
                        <thead><tr><th>Agente</th><th>Estado</th><th>Acciones</th></tr></thead>
                        <tbody>
                            <tr><td>Notario Principal</td><td><span style="color: green;">Online</span></td><td><button class="button">Desconectar</button></td></tr>
                            <tr><td>Secretaría 1</td><td><span style="color: red;">Offline</span></td><td><button class="button">Conectar</button></td></tr>
                        </tbody>
                    </table>
                    <?php
                    break;
                case 'crm':
                    echo '<h3>Integración con CRM</h3><p>Configura la sincronización con tu CRM (Hubspot, Salesforce, etc.).</p>';
                    ?>
                    <form>
                        <label>Webhook URL:</label><br>
                        <input type="url" placeholder="https://tu-crm.com/webhook" style="width: 400px;"><br><br>
                        <label>API Key:</label><br>
                        <input type="password" style="width: 400px;"><br><br>
                        <button class="button-primary">Guardar Integración</button>
                    </form>
                    <?php
                    break;
                case 'masivos':
                    echo '<h3>Enviar Mensajes Masivos</h3><p>Difunde anuncios a todos tus contactos.</p>';
                    ?>
                    <form>
                        <label>Mensaje:</label><br>
                        <textarea style="width: 100%; height: 100px;" placeholder="Escribe el mensaje masivo..."></textarea><br><br>
                        <button class="button-primary">Enviar a 150 contactos</button>
                    </form>
                    <?php
                    break;
                case 'tienda':
                    echo '<h3>Integración con Tienda Online</h3><p>Vincula con WooCommerce para consultas de stock y pedidos.</p>';
                    ?>
                    <div style="padding: 20px; border: 2px dashed #ccc; text-align: center;">
                        <p>Detección automática de WooCommerce...</p>
                        <button class="button">Vincular Productos</button>
                    </div>
                    <?php
                    break;
            }
            ?>
        </div>
    </div>
    <?php
}

function notaria_chatbot_render_conversations() {
    // Mock conversations list
    ?>
    <div style="display: flex; height: 400px; border: 1px solid #ddd;">
        <div style="width: 200px; border-right: 1px solid #ddd; padding: 10px;">
            <div style="padding: 10px; background: #eee; margin-bottom: 5px; border-radius: 4px; cursor: pointer;">Juan Perez (Abierto)</div>
            <div style="padding: 10px; background: #fff; margin-bottom: 5px; border-radius: 4px; cursor: pointer;">Maria Garcia (Agente)</div>
        </div>
        <div style="flex: 1; padding: 20px; display: flex; flex-direction: column;">
            <div style="flex: 1; overflow-y: auto;">
                <p><strong>Juan Perez:</strong> Hola, quisiera saber sobre el trámite de una sucesión intestada.</p>
                <p><em>(Bot respondió automáticamente)</em></p>
            </div>
            <div style="display: flex; margin-top: 10px;">
                <input type="text" placeholder="Responder como agente..." style="flex: 1;">
                <button class="button-primary">Enviar</button>
            </div>
        </div>
    </div>
    <?php
}

function notaria_chatbot_render_kb_config() {
    global $wpdb;
    $gpt_key = get_notaria_config('gpt_api_key');
    $kb_items = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}notaria_kb");
    ?>
    <form method="post" action="">
        <?php wp_nonce_field('notaria_chatbot_settings'); ?>
        <h4>API Key de GPT</h4>
        <input type="password" name="gpt_api_key" value="<?php echo esc_attr($gpt_key); ?>" placeholder="sk-..." style="width: 400px;">
        <button type="submit" name="notaria_save_settings" class="button-primary">Guardar API Key</button>
    </form>

    <hr>

    <h3>Base de Conocimientos</h3>
    <table class="widefat fixed" cellspacing="0">
        <thead>
            <tr>
                <th>Pregunta</th>
                <th>Respuesta</th>
                <th>GPT?</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kb_items as $item): ?>
            <tr>
                <td><?php echo esc_html($item->question); ?></td>
                <td><?php echo esc_html($item->answer); ?></td>
                <td><?php echo $item->use_gpt ? 'Sí' : 'No'; ?></td>
                <td>
                    <a href="<?php echo admin_url('admin.php?page=notaria-chatbot&tab=chatbot&edit_kb=' . $item->id); ?>" class="button">Editar</a>
                    <a href="<?php echo wp_nonce_url(admin_url('admin.php?page=notaria-chatbot&tab=chatbot&delete_kb=' . $item->id), 'notaria_delete_kb_' . $item->id); ?>" class="button" onclick="return confirm('¿Seguro?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php if (empty($kb_items)): ?>
            <tr><td colspan="4">No hay preguntas registradas.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php if (isset($_GET['edit_kb'])):
        $edit_id = intval($_GET['edit_kb']);
        $edit_item = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->prefix}notaria_kb WHERE id = %d", $edit_id));
        if ($edit_item):
    ?>
        <h4>Editar Pregunta</h4>
        <form method="post" action="<?php echo admin_url('admin.php?page=notaria-chatbot&tab=chatbot'); ?>">
            <?php wp_nonce_field('notaria_chatbot_edit_kb'); ?>
            <input type="hidden" name="kb_id" value="<?php echo $edit_item->id; ?>">
            <p><label>Pregunta:</label><br><textarea name="question" style="width: 100%;" required><?php echo esc_textarea($edit_item->question); ?></textarea></p>
            <p><label>Respuesta:</label><br><textarea name="answer" style="width: 100%;" required><?php echo esc_textarea($edit_item->answer); ?></textarea></p>
            <p><label><input type="checkbox" name="use_gpt" <?php checked($edit_item->use_gpt, 1); ?>> ¿Permitir que GPT mejore esta respuesta?</label></p>
            <button type="submit" name="notaria_edit_kb" class="button-primary">Actualizar Pregunta</button>
            <a href="<?php echo admin_url('admin.php?page=notaria-chatbot&tab=chatbot'); ?>" class="button">Cancelar</a>
        </form>
    <?php endif; else: ?>
        <h4>Añadir Nueva Pregunta</h4>
        <form method="post" action="">
            <?php wp_nonce_field('notaria_chatbot_kb'); ?>
            <p><label>Pregunta:</label><br><textarea name="question" style="width: 100%;" required></textarea></p>
            <p><label>Respuesta:</label><br><textarea name="answer" style="width: 100%;" required></textarea></p>
            <p><label><input type="checkbox" name="use_gpt"> ¿Permitir que GPT mejore esta respuesta?</label></p>
            <button type="submit" name="notaria_add_kb" class="button-primary">Añadir Pregunta</button>
        </form>
    <?php endif; ?>
    <?php
}
