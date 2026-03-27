<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "registro_RALQ";

$conn = new mysqli($servername, $username, $password, $dbname);

// Inicializamos un array de errores
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validación de los campos
    if (empty($email)) {
        $errors['email'] = "El correo electrónico es obligatorio.";
    }

    if (empty($password)) {
        $errors['password'] = "La contraseña es obligatoria.";
    }

    // Si hay errores, los guardamos en la sesión y redirigimos al formulario
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['post_data'] = $_POST; // Guardar los datos del formulario para mantenerlos
        header("Location: ../iniciosesion.php"); // Redirigir al formulario
        exit;
    }

    // Si no hay errores, continuamos con la validación del usuario en la base de datos
    $stmt = $conn->prepare("SELECT id, email, password FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $user_email, $hashed_password);
        $stmt->fetch();

        // Verificar la contraseña
        if (password_verify($password, $hashed_password)) {
            // Inicio de sesión exitoso
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_email'] = $user_email;
            header("Location: ../menu.php"); // Redirige al menú
            exit;
        } else {
            $_SESSION['errors']['password'] = "Contraseña incorrecta.";
            header("Location: ../iniciosesion.php"); // Redirigir al formulario
            exit;
        }
    } else {
        $_SESSION['errors']['email'] = "El correo no está registrado.";
        header("Location: ../iniciosesion.php"); // Redirigir al formulario
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
