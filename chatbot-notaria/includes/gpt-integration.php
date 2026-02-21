<?php

function notaria_chatbot_get_gpt_response($message) {
    $api_key = get_notaria_config('gpt_api_key');

    if (empty($api_key)) {
        return "Disculpe, la integración con GPT no está configurada.";
    }

    $url = 'https://api.openai.com/v1/chat/completions';

    $body = array(
        'model' => 'gpt-3.5-turbo',
        'messages' => array(
            array('role' => 'system', 'content' => 'Eres un asistente virtual de la Notaria Huanca. Responde de manera profesional y amable.'),
            array('role' => 'user', 'content' => $message)
        ),
        'max_tokens' => 150
    );

    $args = array(
        'body'        => json_encode($body),
        'timeout'     => '15',
        'redirection' => '5',
        'httpversion' => '1.0',
        'blocking'    => true,
        'headers'     => array(
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . $api_key,
        ),
        'cookies'     => array(),
    );

    $response = wp_remote_post($url, $args);

    if (is_wp_error($response)) {
        return "Error al conectar con el servicio de inteligencia artificial: " . $response->get_error_message();
    }

    $body_res = wp_remote_retrieve_body($response);
    $data = json_decode($body_res, true);

    if (isset($data['error'])) {
        return "Error de OpenAI: " . $data['error']['message'];
    }

    return $data['choices'][0]['message']['content'];
}

function notaria_chatbot_find_kb_response($message) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'notaria_kb';

    // Simple matching
    $results = $wpdb->get_results($wpdb->prepare(
        "SELECT answer, use_gpt FROM $table_name WHERE %s LIKE CONCAT('%', question, '%') OR question LIKE CONCAT('%', %s, '%') LIMIT 1",
        $message, $message
    ));

    if ($results) {
        $kb_answer = $results[0]->answer;
        // If use_gpt is enabled, we could potentially pass this to GPT to refine,
        // but for now let's just return it or use it as context.
        return $kb_answer;
    }

    return null;
}
