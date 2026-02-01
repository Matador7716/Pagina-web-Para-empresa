<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

function get_csrf_token() {
    return $_SESSION['csrf_token'];
}

function verify_csrf_token($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

function check_csrf() {
    $token = $_POST['csrf_token'] ?? $_GET['csrf_token'] ?? '';
    if (!verify_csrf_token($token)) {
        die("Error de validación CSRF.");
    }
}
?>
