<?php
if (isset($_SESSION['errors']['email']) && $_SESSION['errors']['email'] == "El correo no está registrado.") {
    echo '<div class="alerta alerta-error">El correo no está registrado.</div>';
    unset($_SESSION['errors']['email']);
}

if (isset($_SESSION['errors']['email']) && $_SESSION['errors']['email'] == "El correo electrónico es obligatorio.") {
    echo '<div class="alerta alerta-error">El correo electrónico es obligatorio.</div>';
    unset($_SESSION['errors']['email']);
}

if (isset($_SESSION['errors']['password']) && $_SESSION['errors']['password'] == "Contraseña incorrecta.") {
    echo '<div class="alerta alerta-error">Contraseña incorrecta.</div>';
    unset($_SESSION['errors']['password']);
}

if (isset($_SESSION['errors']['password']) && $_SESSION['errors']['password'] == "La contraseña es obligatoria.") {
    echo '<div class="alerta alerta-error">La contraseña es obligatoria.</div>';
    unset($_SESSION['errors']['password']);
}
?>
