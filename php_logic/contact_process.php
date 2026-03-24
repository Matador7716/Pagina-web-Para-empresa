<?php
require_once '../db.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST['phone']));
    $subject_input = strip_tags(trim($_POST['subject']));
    $message_content = strip_tags(trim($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'El correo electrónico no es válido.']);
        exit;
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $subject_input, $message_content);

    if ($stmt->execute()) {
        // Send email
        $to = "informeswe@todowebcusco.com";
        $email_subject = "Nuevo mensaje de contacto: " . $subject_input;
        $email_body = "Nombre: $name\nEmail: $email\nTeléfono: $phone\nMensaje:\n$message_content";

        // Sanitize headers to prevent header injection
        $sanitized_email = str_replace(["\r", "\n"], '', $email);
        $headers = "From: " . $sanitized_email;

        // mail() might not work in some environments, but we'll include it as requested.
        $mail_sent = @mail($to, $email_subject, $email_body, $headers);

        $msg = 'Mensaje enviado correctamente y guardado en la base de datos.';
        if (!$mail_sent) {
            $msg = 'Mensaje guardado en la base de datos, pero hubo un problema al enviar el correo.';
        }

        echo json_encode(['success' => true, 'message' => $msg]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al guardar el mensaje en la base de datos.']);
    }

    $stmt->close();
    $conn->close();
}
?>
