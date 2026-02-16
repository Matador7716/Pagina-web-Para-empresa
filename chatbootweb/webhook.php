<?php
/**
 * Webhook para CHATBOOTWEB
 * Este archivo permite recibir mensajes desde un gateway de WhatsApp (como Evolution API, etc.)
 */
require_once "conexion.php";

// Leer el cuerpo de la petición POST
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if ($data) {
    // Compatibilidad con Evolution API y otros gateways
    $msg = '';
    $phone = '000000000';

    if (isset($data['data']['message']['conversation'])) {
        // Evolution API v1/v2
        $msg = $data['data']['message']['conversation'];
        $phone = str_replace('@s.whatsapp.net', '', $data['data']['key']['remoteJid'] ?? '');
    } elseif (isset($data['message'])) {
        // Formato simple
        $msg = $data['message'];
        $phone = $data['sender'] ?? $data['from'] ?? '000000000';
    } else {
        $msg = $data['text'] ?? '';
        $phone = $data['sender'] ?? $data['from'] ?? '000000000';
    }

    if (!empty($msg)) {
        // Lógica de IA (Búsqueda en base de conocimientos)
        $reply = "";
        $searchTerm = "%$msg%";

        $stmt = mysqli_prepare($conexion, "SELECT respuesta FROM preguntas_frecuentes WHERE LOWER(pregunta) LIKE LOWER(?) LIMIT 1");
        mysqli_stmt_bind_param($stmt, "s", $searchTerm);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $found_reply);

        if (mysqli_stmt_fetch($stmt)) {
            $reply = $found_reply;
            mysqli_stmt_close($stmt);
        } else {
            mysqli_stmt_close($stmt);
            // Respuesta por defecto
            $stmt_conf = mysqli_prepare($conexion, "SELECT mensaje_bienvenida FROM configuracion LIMIT 1");
            mysqli_stmt_execute($stmt_conf);
            mysqli_stmt_bind_result($stmt_conf, $msg_conf);
            mysqli_stmt_fetch($stmt_conf);
            $reply = "Lo siento, no entendí bien. " . ($msg_conf ?? "¡Hola! ¿En qué puedo ayudarte?");
            mysqli_stmt_close($stmt_conf);
        }

        // Guardar en la tabla de chats
        $stmt_ins = mysqli_prepare($conexion, "INSERT INTO chats (numero_whatsapp, mensaje_usuario, respuesta_bot) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt_ins, "sss", $phone, $msg, $reply);
        mysqli_stmt_execute($stmt_ins);

        // Responder al gateway (Ajusta según lo que espere tu API)
        header('Content-Type: application/json');
        echo json_encode([
            "status" => "success",
            "reply" => $reply
        ]);
    }
} else {
    echo "CHATBOOTWEB Webhook Activo. Esperando peticiones JSON POST.";
}
?>
