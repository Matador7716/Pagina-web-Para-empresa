<?php
session_start();
if (empty($_SESSION['active'])) {
    die("Acceso denegado");
}
require_once "../../conexion.php";

if ($_POST) {
    $action = $_POST['action'];

    if ($action == 'get_welcome') {
        $stmt_w = mysqli_prepare($conexion, "SELECT mensaje_bienvenida FROM configuracion LIMIT 1");
        mysqli_stmt_execute($stmt_w);
        mysqli_stmt_bind_result($stmt_w, $msg_w);
        mysqli_stmt_fetch($stmt_w);
        echo $msg_w;
        mysqli_stmt_close($stmt_w);
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
        mysqli_stmt_bind_result($stmt, $found_reply);

        if (mysqli_stmt_fetch($stmt)) {
            $reply = $found_reply;
            mysqli_stmt_close($stmt);
        } else {
            mysqli_stmt_close($stmt);
            // Default response if no keyword found
            $stmt_conf = mysqli_prepare($conexion, "SELECT mensaje_bienvenida FROM configuracion LIMIT 1");
            mysqli_stmt_execute($stmt_conf);
            mysqli_stmt_bind_result($stmt_conf, $msg_conf);
            mysqli_stmt_fetch($stmt_conf);
            $reply = "Lo siento, no entendí bien. " . $msg_conf;
            mysqli_stmt_close($stmt_conf);
        }

        // Save to chats table
        $stmt = mysqli_prepare($conexion, "INSERT INTO chats (numero_whatsapp, mensaje_usuario, respuesta_bot) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $phone, $msg, $reply);
        mysqli_stmt_execute($stmt);

        echo $reply;
    }
}
?>
