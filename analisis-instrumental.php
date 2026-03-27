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
  <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
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
      <img src="img/laboratorios/labo-q-analisis.jpg" alt="Robot de laboratorio" class="hero-image">
      <div class="hero-text">
        <h2>LABORATORIO</h2>
        <h1>ANALISÍS INSTRUMENTAL</h1>
        <p>Un laboratorio de análisis instrumental es un espacio especializado donde se utilizan equipos avanzados para analizar la composición química, estructura y propiedades de diferentes muestras mediante técnicas instrumentales. A diferencia del laboratorio de química general, que se centra en reacciones y experimentos básicos, en un laboratorio de análisis instrumental se emplean equipos de alta precisión para identificar y cuantificar sustancias en muestras de alimentos, medicamentos, materiales, suelos, aguas, entre otros.</p>
      </div>
    </div>
  </section>






  <main>
    <h2 style="text-align:center; margin-bottom: 2rem;">ELIGE UNO PARA VISUALIZARLO</h2>
    <div class="menu" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; justify-items: center; row-gap: 80px;">

      <!-- Autoclave -->
      <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
        <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

        <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
          <model-viewer
            src="instrumentos3D/autoclave.glb"
            alt="Modelo de Autoclave"
            auto-rotate
            camera-controls
            ar
            style="width: 100%; height: 240px; background-color: transparent;"
            shadow-intensity="0"
            interaction-prompt="none">
          </model-viewer>

          <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Autoclave</h2>
          <a href="img/QR/analisis/Autoclave.jpg" target="_blank"
            style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
            Ver en Realidad Aumentada
          </a>
        </div>

        <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
          <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Autoclave</h2>
          <p>Equipo utilizado para la esterilización de materiales mediante vapor de agua a alta presión y temperatura.</p>
        </div>
      </div>



      <!-- Campana de extracción -->
      <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
        <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

        <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
          <model-viewer
            src="instrumentos3D/campana_de_extraccion.glb"
            alt="Modelo de Campana de extracción"
            auto-rotate
            camera-controls
            ar
            style="width: 100%; height: 240px; background-color: transparent;"
            shadow-intensity="0"
            interaction-prompt="none">
          </model-viewer>

          <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Campana de extracción</h2>
          <a href="img/QR/analisis/Campana.jpg" target="_blank"
            style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
            Ver en Realidad Aumentada
          </a>
        </div>

        <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
          <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Campana de extracción</h2>
          <p>Dispositivo de seguridad que protege al usuario de vapores y gases tóxicos al extraerlos del área de trabajo.</p>
        </div>
      </div>



      <!-- Centrifugadora -->
      <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
        <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

        <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
          <model-viewer
            src="instrumentos3D/centrifugadora.glb"
            alt="Modelo de Centrifugadora"
            auto-rotate
            camera-controls
            ar
            style="width: 100%; height: 240px; background-color: transparent;"
            shadow-intensity="0"
            interaction-prompt="none">
          </model-viewer>

          <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Centrifugadora</h2>
          <a href="img/QR/analisis/Centrifugadora.jpg" target="_blank"
            style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
            Ver en Realidad Aumentada
          </a>
        </div>

        <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
          <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Centrifugadora</h2>
          <p>Equipo de laboratorio que separa componentes de una mezcla mediante la fuerza centrífuga, basado en su densidad.</p>
        </div>
      </div>



      <!-- Incubadora -->
      <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
        <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

        <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
          <model-viewer
            src="instrumentos3D/incubadora.glb"
            alt="Modelo de Incubadora"
            auto-rotate
            camera-controls
            ar
            style="width: 100%; height: 240px; background-color: transparent;"
            shadow-intensity="0"
            interaction-prompt="none">
          </model-viewer>

          <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Incubadora</h2>
          <a href="a" target="_blank"
            style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
            Ver en Realidad Aumentada
          </a>
        </div>

        <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
          <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Incubadora</h2>
          <p>Equipo que mantiene condiciones controladas de temperatura y humedad para el crecimiento de cultivos biológicos.</p>
        </div>
      </div>



      <!-- Placa calefactora -->
      <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
        <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

        <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
          <model-viewer
            src="instrumentos3D/placa_calefactora.glb"
            alt="Modelo de Placa calefactora"
            auto-rotate
            camera-controls
            ar
            style="width: 100%; height: 240px; background-color: transparent;"
            shadow-intensity="0"
            interaction-prompt="none">
          </model-viewer>

          <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Placa calefactora</h2>
          <a href="a" target="_blank"
            style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
            Ver en Realidad Aumentada
          </a>
        </div>

        <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
          <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Placa calefactora</h2>
          <p>Dispositivo utilizado para calentar sustancias en recipientes de vidrio de manera uniforme y controlada.</p>
        </div>
      </div>



      <!-- Soporte universal -->
      <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
        <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

        <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
          <model-viewer
            src="instrumentos3D/soporte_universal.glb"
            alt="Modelo de Soporte universal"
            auto-rotate
            camera-controls
            ar
            style="width: 100%; height: 240px; background-color: transparent;"
            shadow-intensity="0"
            interaction-prompt="none">
          </model-viewer>

          <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Soporte universal</h2>
          <a href="a" target="_blank"
            style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
            Ver en Realidad Aumentada
          </a>
        </div>

        <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
          <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Soporte universal</h2>
          <p>Estructura metálica utilizada en laboratorios para sujetar y sostener distintos equipos o instrumentos.</p>
        </div>
      </div>
    </div>
  </main>

  <script>
    function toggleFullInfo(button) {
      const card = button.closest('.menu-item');
      const content = card.querySelector('.card-content');
      const info = card.querySelector('.full-info');

      if (content.style.display !== "none") {
        content.style.display = "none";
        info.style.display = "flex";
      } else {
        content.style.display = "flex";
        info.style.display = "none";
      }
    }
  </script>




  <div class="w-full px-6 md:px-12 py-12">
    <!-- Sección 1 -->
    <section class="border-b border-gray-300 py-4">
      <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
        Objetivos del laboratorio de análisis instrumental
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li>Determinar la composición química de una muestra.</li>
          <li>Identificar compuestos desconocidos.</li>
          <li>Cuantificar la concentración de sustancias en diferentes matrices.</li>
          <li>Estudiar propiedades físicas y químicas de los materiales.</li>
          <li>Controlar la calidad de productos en industrias como la farmacéutica, alimentaria y ambiental.</li>
        </ul>
      </div>
    </section>


    <!-- Sección 2 -->
    <section class="border-b border-gray-300 py-4">
      <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
        Áreas de un laboratorio de análisis instrumental
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li><strong>Zona de preparación de muestras:</strong> Donde las muestras se procesan antes del análisis.</li>
          <li><strong>Zona de análisis:</strong> Espacio donde se encuentran los equipos de medición.</li>
          <li><strong>Área de almacenamiento:</strong> Para reactivos y materiales.</li>
          <li><strong>Zona de seguridad:</strong> Con duchas de emergencia, extintores y botiquín.</li>
        </ul>
      </div>
    </section>

    <!-- Sección 3 -->
    <section class="border-b border-gray-300 py-4">
      <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
        Técnicas e instrumentos más utilizados
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700 space-y-4">

        <div>
          <h3 class="text-lg font-semibold">Espectroscopia – Analiza la interacción de la luz con la materia.</h3>
          <ul class="list-disc list-inside space-y-2">
            <li><strong>UV-Vis:</strong> Determina concentraciones de sustancias en soluciones.</li>
            <li><strong>Infrarrojo (FTIR):</strong> Identifica grupos funcionales en moléculas orgánicas.</li>
            <li><strong>Espectroscopia de absorción atómica (AAS):</strong> Detecta metales en muestras líquidas.</li>
          </ul>
        </div>

        <div>
          <h3 class="text-lg font-semibold">Cromatografía – Separa e identifica componentes de una mezcla.</h3>
          <ul class="list-disc list-inside space-y-2">
            <li><strong>Cromatografía de gases (GC):</strong> Para compuestos volátiles como hidrocarburos.</li>
            <li><strong>Cromatografía líquida de alta resolución (HPLC):</strong> Para fármacos y proteínas.</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- Sección 4 -->
    <section class="border-b border-gray-300 py-4">
      <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
        Normas de seguridad en un laboratorio
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li>Usar bata, guantes y gafas de seguridad.</li>
          <li>Manipular reactivos y equipos con precaución.</li>
          <li>Calibrar los instrumentos antes de cada análisis.</li>
          <li>Documentar y etiquetar correctamente las muestras.</li>
          <li>Mantener los equipos en condiciones óptimas y limpias.</li>
        </ul>
      </div>
    </section>

    <!-- Sección 5 -->
    <section class="border-b border-gray-300 py-4">
      <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
        Ejemplos de aplicaciones en distintos sectores
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li><strong>Farmacéutica:</strong> Análisis de medicamentos para verificar su pureza y concentración.</li>
          <li><strong>Alimentos:</strong> Detección de contaminantes y control de calidad en productos.</li>
          <li><strong>Ambiental:</strong> Análisis de agua, suelo y aire para detectar contaminantes.</li>
          <li><strong>Forense:</strong> Identificación de sustancias en investigaciones criminales.</li>
          <li><strong>Nanotecnología:</strong> Caracterización de materiales avanzados.</li>
        </ul>
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