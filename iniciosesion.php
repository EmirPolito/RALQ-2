<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Krub:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen flex items-center justify-center bg-gray-100 font-krub">

  <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-full max-w-6xl flex flex-col md:flex-row h-[90vh]">

    <!-- Imagen lateral -->
    <div class="hidden md:block md:w-1/2 h-full">
      <img src="img/tubo-de-explotacion-de-mujer-de-tiro-medio.jpg" alt="Imagen lateral" class="h-full w-full object-cover">
    </div>

    <!-- Formulario -->
    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center items-center h-full overflow-auto">
      <a href="index.php" class="self-start text-gray-500 hover:text-gray-700 mb-4 font-medium">&larr; Volver</a>

      <img src="img/logo_ralq_color-removebg-preview.png" alt="Logo" class="h-14 mb-4">

      <h2 class="text-2xl font-semibold text-gray-800 mb-2">Inicio de Sesión</h2>
      <p class="text-gray-500 mb-4 text-center text-sm">Hola de nuevo, ingresa tus datos para continuar</p>

      <?php include('php/alerta-inicioSecion.php'); ?>

      <form action="php/log.php" method="POST" class="w-full space-y-3" autocomplete="off">

        <!-- Email -->
        <div class="flex flex-col">
          <input type="email" id="email" name="email" placeholder="Correo" autocomplete="off"
            class="px-3 py-1.5 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 text-gray-800 text-sm"
            value="">
          <?php if(isset($_SESSION['errors']['email'])): ?>
            <span class="text-red-500 text-xs mt-1"><?php echo $_SESSION['errors']['email']; ?></span>
          <?php endif; ?>
        </div>

        <!-- Contraseña -->
        <div class="flex flex-col relative">
          <input type="password" id="password" name="password" placeholder="Contraseña" autocomplete="new-password"
            class="px-3 py-1.5 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 text-gray-800 text-sm"
            value="">
          <?php if(isset($_SESSION['errors']['password'])): ?>
            <span class="text-red-500 text-xs mt-1"><?php echo $_SESSION['errors']['password']; ?></span>
          <?php endif; ?>
        </div>

        <!-- Botón -->
        <button type="submit" class="w-full bg-[#445151] hover:bg-[#556262] text-white py-2 rounded-lg font-semibold transition-colors text-sm">
          Entrar
        </button>

      </form>

      <p class="text-gray-400 text-sm mt-6">
        ¿No tienes cuenta? <a href="registro.php" class="text-[#445151] hover:text-[#556262] font-medium">Regístrate</a>
      </p>
    </div>
  </div>

  <?php
  // Limpiar variables de sesión después de mostrarlas
  unset($_SESSION['errors'], $_SESSION['post_data']);
  ?>

</body>

</html>
