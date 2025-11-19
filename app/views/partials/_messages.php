<?php
if (isset($_SESSION['message'])) {
    echo '<div class="message success">' . $_SESSION['message'] . '</div>';
    unset($_SESSION['message']);
}

if (isset($_SESSION['error'])) {
    echo '<div class="message error">' . $_SESSION['error'] . '</div>';
    unset($_SESSION['error']);
}
