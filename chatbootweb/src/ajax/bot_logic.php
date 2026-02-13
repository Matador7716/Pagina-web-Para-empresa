<?php
session_start();
if (empty($_SESSION['active'])) {
    die("Acceso denegado");
}
require_once "../../conexion.php";

if ($_POST) {
    $action = $_POST['action'];

    if ($action == 'get_welcome') {
        $query = mysqli_query($conexion, "SELECT mensaje_bienvenida FROM configuracion LIMIT 1");
        $data = mysqli_fetch_assoc($query);
        echo $data['mensaje_bienvenida'];
    }

    if ($action == 'reply') {
        $msg = $_POST['mensaje'];
        $phone = $_POST['telefono'];

        // "IA" Logic: Search for keywords in the Knowledge Base
        $reply = "";

        // Try exact match or LIKE
        $searchTerm = "%$msg%";
        $stmt = mysqli_prepare($conexion, "SELECT respuesta FROM preguntas_frecuentes WHERE LOWER(pregunta) LIKE LOWER(?) LIMIT 1");
        mysqli_stmt_bind_param($stmt, "s", $searchTerm);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            $reply = $data['respuesta'];
        } else {
            // Default response if no keyword found
            $query_conf = mysqli_query($conexion, "SELECT mensaje_bienvenida FROM configuracion LIMIT 1");
            $data_conf = mysqli_fetch_assoc($query_conf);
            $reply = "Lo siento, no entendí bien. " . $data_conf['mensaje_bienvenida'];
        }

        // Save to chats table
        $stmt = mysqli_prepare($conexion, "INSERT INTO chats (numero_whatsapp, mensaje_usuario, respuesta_bot) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $phone, $msg, $reply);
        mysqli_stmt_execute($stmt);

        echo $reply;
    }
}
?>
