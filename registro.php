<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro RALQ</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Krub:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>


<body class="min-h-screen flex items-center justify-center bg-gray-100 font-krub">

  <!-- Contenedor principal -->
  <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-full max-w-6xl h-[90vh] flex flex-col md:flex-row">

    <!-- Imagen lateral -->
    <div class="hidden md:block md:w-1/2 h-full">
      <img src="img/tubo-de-explotacion-de-mujer-de-tiro-medio.jpg" alt="Imagen lateral" class="h-full w-full object-cover">
    </div>

    <!-- Formulario -->
    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center items-center h-full overflow-auto">
      <a href="index.php" class="self-start text-gray-500 hover:text-gray-700 mb-4 font-medium">&larr; Volver</a>

      <img src="img/logo_ralq_color-removebg-preview.png" alt="Logo" class="h-14 mb-4">

      <h2 class="text-2xl font-semibold text-gray-800 mb-2">Registro</h2>
      <p class="text-gray-500 mb-4 text-center text-sm">
        Completa los datos a continuación para crear tu cuenta y comenzar a usar RALQ.
      </p>

      <form id="registroForm" action="php/alerta-registro.php" method="post" onsubmit="return validateForm()" class="w-full space-y-3" autocomplete="off">
        
        <!-- Nombre -->
        <div class="flex flex-col">
          <input type="text" id="nombre" name="nombre" placeholder="Nombre(s)" autocomplete="off"
            class="px-3 py-1.5 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 text-gray-800 text-sm">
          <span class="text-red-500 text-xs mt-1 invisible error" id="error-nombre"></span>
        </div>

        <!-- Apellido Paterno -->
        <div class="flex flex-col">
          <input type="text" id="apellido-paterno" name="apellido_paterno" placeholder="Apellido Paterno" autocomplete="off"
            class="px-3 py-1.5 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 text-gray-800 text-sm">
          <span class="text-red-500 text-xs mt-1 invisible error" id="error-apellido-paterno"></span>
        </div>

        <!-- Apellido Materno -->
        <div class="flex flex-col">
          <input type="text" id="apellido-materno" name="apellido_materno" placeholder="Apellido Materno" autocomplete="off"
            class="px-3 py-1.5 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 text-gray-800 text-sm">
          <span class="text-red-500 text-xs mt-1 invisible error" id="error-apellido-materno"></span>
        </div>

        <!-- Email -->
        <div class="flex flex-col">
          <input type="email" id="email" name="email" placeholder="Correo" autocomplete="off"
            class="px-3 py-1.5 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 text-gray-800 text-sm">
          <span class="text-red-500 text-xs mt-1 invisible error" id="error-email"></span>
        </div>

        <!-- Contraseña -->
        <div class="flex flex-col">
          <input type="password" id="password" name="password" placeholder="Contraseña" autocomplete="new-password"
            class="px-3 py-1.5 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 text-gray-800 text-sm">
          <span class="text-red-500 text-xs mt-1 invisible error" id="error-password"></span>
        </div>

        <!-- Confirmar Contraseña -->
        <div class="flex flex-col">
          <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar Contraseña" autocomplete="new-password"
            class="px-3 py-1.5 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 text-gray-800 text-sm">
          <span class="text-red-500 text-xs mt-1 invisible error" id="error-confirm-password"></span>
        </div>

        <!-- Botón -->
        <button type="submit" class="w-full bg-[#445151] hover:bg-[#556262] text-white py-2 rounded-lg font-semibold transition-colors text-sm">
          Listo
        </button>

        <!-- Texto debajo del botón -->
        <p class="text-gray-500 text-center text-sm mt-3">
          ¿Ya tienes cuenta? <a href="iniciosesion.php" class="text-[#445151] hover:text-[#556262] font-medium">Inicia sesión</a>
        </p>

      </form>
    </div>
  </div>

  <script>
    function validateForm() {
      // limpiar errores previos
      document.querySelectorAll(".error").forEach(e => {
        e.innerText = "";
        e.style.visibility = "hidden";
      });

      let nombre = document.getElementById("nombre").value.trim();
      let apellidoPaterno = document.getElementById("apellido-paterno").value.trim();
      let apellidoMaterno = document.getElementById("apellido-materno").value.trim();
      let email = document.getElementById("email").value.trim();
      let password = document.getElementById("password").value;
      let confirmPassword = document.getElementById("confirm_password").value;

      let isValid = true;

      if (nombre === "") {
        let errorNombre = document.getElementById("error-nombre");
        errorNombre.innerText = "El nombre es obligatorio.";
        errorNombre.style.visibility = "visible";
        isValid = false;
      }
      if (apellidoPaterno === "") {
        let errorApellidoPaterno = document.getElementById("error-apellido-paterno");
        errorApellidoPaterno.innerText = "El apellido paterno es obligatorio.";
        errorApellidoPaterno.style.visibility = "visible";
        isValid = false;
      }
      if (apellidoMaterno === "") {
        let errorApellidoMaterno = document.getElementById("error-apellido-materno");
        errorApellidoMaterno.innerText = "El apellido materno es obligatorio.";
        errorApellidoMaterno.style.visibility = "visible";
        isValid = false;
      }
      if (email === "" || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        let errorEmail = document.getElementById("error-email");
        errorEmail.innerText = "Correo electrónico inválido.";
        errorEmail.style.visibility = "visible";
        isValid = false;
      }
      if (password === "") {
        let errorPassword = document.getElementById("error-password");
        errorPassword.innerText = "La contraseña es obligatoria.";
        errorPassword.style.visibility = "visible";
        isValid = false;
      }
      if (confirmPassword === "" || password !== confirmPassword) {
        let errorConfirmPassword = document.getElementById("error-confirm-password");
        errorConfirmPassword.innerText = "Las contraseñas no coinciden.";
        errorConfirmPassword.style.visibility = "visible";
        isValid = false;
      }

      return isValid; // si es false, no se envía el form y mantiene datos
    }
  </script>

  <?php
  unset($_SESSION['errors'], $_SESSION['post_data']);
  ?>

</body>
</html>
