<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristian Barraza, Irving Esteban, Emir Polito">
    <title>RALQ</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/laboratorios.css">
    <link rel="stylesheet" href="css/user-icon.css">
    <link rel="stylesheet" href="css/QRN.css">
    <!-- <link rel="stylesheet" href="css/informacion.css"> -->
</head>
<body>
    
    <header>
        
        <div class="header-left">
            <a href="laboratorios.php" class="volver-boton">
                <img src="img/logos/volver.png" alt="Volver">
            </a>
            <img src="img/logo_ralq_color-removebg-preview.png" class="logo">
        </div>

        <div class="header-right">
                <nav>
                    <a href="https://publuu.com/flip-book/821912/1808843">Ayuda</a>
                    <!-- <a href="#">Servicios</a>
                    <a href="#">Blog</a> -->

                    <!-- Icono de Usuario -->
                    <div class="user-menu">
                        <img src="img/user.jpg" class="user-icon" onclick="toggleMenu()">
                        <div class="user-dropdown" id="userDropdown">
                            <p><strong><?php echo $_SESSION['user_email']; ?></strong></p>
                            <a class="boton-a" href="index.php">Cerrar sesión</a>
                        </div>
                    </div>
                    <script src="js/usuario.js"></script>
                    <!-- Icono de Usuario -->
                </nav>
        </div>
    </header>

    <section class="hero-section">
    <div class="hero-content">
        <img src="img/laboratorios/labo-plantas-q.jpg" alt="Robot de laboratorio" class="hero-image">
        <div class="hero-text">
            <h2>LABORATORIO</h2>
            <h1>PLANTAS QUÍMICAS</h1>
            <p>Un laboratorio de plantas químicas es un espacio especializado donde se realizan estudios, pruebas y simulaciones de los procesos químicos utilizados en la industria. Su objetivo principal es diseñar, optimizar y controlar la producción de sustancias químicas a gran escala, garantizando seguridad, eficiencia y calidad en los procesos industriales.

Este tipo de laboratorio es esencial en sectores como la industria petroquímica, farmacéutica, de alimentos, de plásticos y de energía , entre otros.</p>
        </div>
    </div>
    </section>

    <main>
        <!-- <h2>ELIGE UNO PARA VISUALIZARLO</h2>

        <div class="menu">
            
            <div class="menu-item" data-title="Placa calefactora" data-image="img/qr.img/Placa-bascula.png" data-description="Es un accesorio utilizado en química para diferentes propósitos.">
                <img src="img/placa-calefactora.png" alt="placa-calefactora">
                <p>Placa calefactora</p>
            </div>

            <div class="menu-item" data-title="Gradilla" data-image="img/qr.img/gradillaQR.png" data-description="Es un accesorio utilizado en química para diferentes propósitos.">
                <img src="img/Gradilla.png" alt="Gradilla">
                <p>Gradilla</p>
            </div>

            <div class="menu-item" data-title="Gradilla" data-image="img/qr.img/gradillaQR.png" data-description="Es un accesorio utilizado en química para diferentes propósitos.">
                <img src="img/Gradilla.png" alt="Gradilla">
                <p>Gradilla</p>
            </div>
        </div> -->
    </main>

<div class="w-full px-6 md:px-12 py-12">

  <!-- Sección 1 -->
  <section class="border-b border-gray-300 py-4">
    <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
      Objetivos de un laboratorio de plantas químicas
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="mt-2 hidden text-gray-700">
      <ul class="list-disc list-inside space-y-2">
        <li>Diseñar y optimizar procesos químicos industriales.</li>
        <li>Evaluar la viabilidad de nuevos productos y materiales.</li>
        <li>Controlar la calidad y seguridad en la producción química.</li>
        <li>Reducir costos y minimizar impactos ambientales.</li>
        <li>Realizar simulaciones y modelado de procesos químicos.</li>
      </ul>
    </div>
  </section>

  <!-- Sección 2 -->
  <section class="border-b border-gray-300 py-4">
    <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
      Áreas principales de un laboratorio de plantas químicas
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="mt-2 hidden text-gray-700">
      <ul class="list-disc list-inside space-y-2">
        <li><strong>Área de reacción química:</strong> Para probar y analizar reacciones químicas industriales.</li>
        <li><strong>Zona de separación y purificación:</strong> Con equipos como destiladores y filtros.</li>
        <li><strong>Área de control de calidad:</strong> Donde se realizan análisis de productos intermedios y finales.</li>
        <li><strong>Zona de seguridad y almacenamiento:</strong> Para el manejo de sustancias peligrosas y residuos.</li>
      </ul>
    </div>
  </section>

  <!-- Sección 3 -->
  <section class="border-b border-gray-300 py-4">
    <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
      Equipos y técnicas utilizadas en un laboratorio de plantas químicas
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="mt-2 hidden text-gray-700">
      <ul class="list-disc list-inside space-y-2">
        <li><strong>Reactores químicos:</strong> Para estudiar la cinética y termodinámica de las reacciones.</li>
        <li><strong>Destiladores y evaporadores:</strong> Para separar y concentrar sustancias.</li>
        <li><strong>Intercambiadores de calor:</strong> Para estudiar la transferencia de energía en procesos.</li>
        <li><strong>Cromatografía y espectroscopia:</strong> Para analizar la composición de productos.</li>
        <li><strong>Modelado y simulación computacional:</strong> Para optimizar procesos sin riesgos físicos.</li>
      </ul>
    </div>
  </section>

  <!-- Sección 4 -->
  <section class="border-b border-gray-300 py-4">
    <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
      Ejemplos de procesos estudiados en un laboratorio de plantas químicas
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="mt-2 hidden text-gray-700">
      <ul class="list-disc list-inside space-y-2">
        <li>Producción de combustibles y petroquímicos (gasolina, diésel, plásticos).</li>
        <li>Síntesis de fármacos y productos químicos industriales.</li>
        <li>Procesos de tratamiento de aguas y residuos.</li>
        <li>Optimización de la producción de fertilizantes y agroquímicos.</li>
        <li>Generación de biocombustibles y energías renovables.</li>
      </ul>
    </div>
  </section>

  <!-- Sección 5 -->
  <section class="border-b border-gray-300 py-4">
    <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
      Normas de seguridad en un laboratorio de plantas químicas
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="mt-2 hidden text-gray-700">
      <ul class="list-disc list-inside space-y-2">
        <li>Uso de equipo de protección personal (bata, guantes, gafas).</li>
        <li>Manejo seguro de sustancias inflamables y tóxicas.</li>
        <li>Control y monitoreo de variables como temperatura y presión.</li>
        <li>Implementación de protocolos de emergencia y buenas prácticas de fabricación (BPM).</li>
        <li>Minimización de residuos y contaminación ambiental.</li>
      </ul>
    </div>
  </section>

  <!-- Sección 6 -->
  <section class="border-b border-gray-300 py-4">
    <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
      Conclusión
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="mt-2 hidden text-gray-700">
      <p>
        Un laboratorio de plantas químicas es clave para el desarrollo de la industria química, ya que permite diseñar y mejorar 
        procesos de producción de manera segura y eficiente. Su trabajo impacta en sectores fundamentales como la energía, la 
        salud, los alimentos y la tecnología.
      </p>
    </div>
  </section>

</div>

<script>
  function toggleAccordion(button) {
    const content = button.nextElementSibling;
    content.classList.toggle('hidden');
    
    const icon = button.querySelector('span');
    icon.textContent = content.classList.contains('hidden') ? '+' : '−';
  }
</script>



    <!-- Footer -->
    <footer class="text-white py-16 px-6 md:px-24" style="background-color: #434e4e;">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 items-center">
            <!-- Contacto -->
            <div class="text-center md:text-left">
                <h4 class="text-3xl font-bold mb-6 text-center">Contacto</h4>
                <p class="text-lg leading-relaxed text-center">
                    Facebook: <a href="#" class="hover:underline">RALQ</a><br>
                    Correo: <a href="mailto:ralq.utsv@mail.com" class="hover:underline">ralq.utsv@mail.com</a><br>
                    Teléfono: <a href="tel:+123456789" class="hover:underline">+123 456 789</a>
                </p>
            </div>

            <!-- Logo centrado -->
            <div class="flex justify-center items-center">
                <img src="img/utsv-log.png" alt="UTSV Logo" class="h-32 md:h-36 object-contain">
            </div>
            <!-- Colaboradores -->
            <div class="text-center">
                <h4 class="text-3xl font-bold mb-6">Creadores</h4>
                <p class="text-lg leading-relaxed">
                    Emir Polito Guevara<br>
                    Irving Esteban Molina Méndez<br>
                    Cristian Daniel Barraza Hernández
                </p>
            </div>
        </div>
        <!-- Línea separadora -->
        <div class="border-t border-gray-700 mt-12"></div>
        <!-- Derechos -->
        <div class="mt-6 text-center text-lg text-gray-400">
            2024 &copy; Todos los derechos reservados.
        </div>
    </footer>

    
    <!-- Ventanas emergentes -->
    <!-- Modal -->
    <div id="instrumentModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modalTitle">Instrumento</h2>
            <img id="modalImage" src="" alt="Instrument Image" style="max-width: 100%; height: auto; border-radius: 10px;">
            <p id="modalDescription">Descripción del instrumento.</p>
            <script src="js/qr-emergente.js"></script>
        </div>
    </div>
</body>
</html>
