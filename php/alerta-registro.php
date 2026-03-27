<?php
session_start();
require_once 'validar.php'; // Archivo separado para conexión segura a la BD

$errors = [];
$nombre = trim($_POST['nombre'] ?? '');
$apellido_paterno = trim($_POST['apellido_paterno'] ?? '');
$apellido_materno = trim($_POST['apellido_materno'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

if ($nombre === '') $errors['nombre'] = 'Nombre obligatorio';
if ($apellido_paterno === '') $errors['apellido_paterno'] = 'Apellido Paterno obligatorio';
if ($apellido_materno === '') $errors['apellido_materno'] = 'Apellido Materno obligatorio';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Correo inválido';
if ($password === '') $errors['password'] = 'Contraseña obligatoria';
if ($password !== $confirm_password) $errors['confirm_password'] = 'Las contraseñas no coinciden';

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: ../registro.php');
    exit();
}

// ✅ Validar si ya existe el correo
$checkStmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
$checkStmt->bind_param("s", $email);
$checkStmt->execute();
$checkStmt->store_result();

if ($checkStmt->num_rows > 0) {
    $_SESSION['errors']['email'] = 'El correo ya está registrado';
    header('Location: ../registro.php');
    exit();
}
$checkStmt->close();

// Insertar si no hay duplicado
$password_hashed = password_hash($password, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido_paterno, apellido_materno, email, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nombre, $apellido_paterno, $apellido_materno, $email, $password_hashed);

if ($stmt->execute()) {
    header('Location: ../index.php');
    exit();
} else {
    $_SESSION['errors']['general'] = 'Error al registrar. Intenta más tarde.';
    header('Location: ../registro.php');
    exit();
}
$stmt->close();
$conn->close();
?>
