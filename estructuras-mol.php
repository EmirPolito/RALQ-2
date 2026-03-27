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

    <link rel="stylesheet" href="build/output.css">
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
            <a href="menu.php" class="volver-boton">
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
            <img src="img/laboratorios/Moleculas.jpg" alt="Robot de laboratorio" class="hero-image">
            <div class="hero-text">
                <h2>ESTRUCTURAS</h2>
                <h1>MOLECULARES 3D</h1>
                <p>Las estructuras moleculares representan la disposición de los átomos en una molécula y cómo están unidos entre sí mediante enlaces químicos. Estas estructuras pueden describirse de diferentes maneras, dependiendo del nivel de detalle que se necesite.</p>
            </div>
        </div>
    </section>



    <main>
        <h2 style="text-align:center; margin-bottom: 2rem;">ELIGE UNO PARA VISUALIZARLO</h2>
        <div class="menu" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; justify-items: center; row-gap: 80px;"> <!-- row-gap aumentado -->

            <!-- Agua -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="modelos/agua.glb"
                        alt="Modelo de agua"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Agua (H2O)</h2>
                    <!-- Boton RA -->
                    <a href="https://mywebar.com/p/Project_2_y08cdw22dd" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Agua (H2O)</h2>
                    <p>Fórmula: H₂O</p>
                    <p>Estado: Líquido a 25°C</p>
                    <p>Peso molecular: 18.015 g/mol</p>
                </div>
            </div>

            <!-- Benciletanol -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="modelos/benciletanol.glb"
                        alt="Modelo de benciletanol"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Benciletanol (C8H10O)</h2>
                    <a href="https://mywebar.com/p/Project_2_y08cdw22dd" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Benciletanol (C8H10O)</h2>
                    <p>Fórmula: C8H10O</p>
                    <p>Estado: Líquido</p>
                    <p>Peso molecular: 122.16 g/mol</p>
                </div>
            </div>

            <!-- Cafeína -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="modelos/cafeina.glb"
                        alt="Modelo de cafeína"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Cafeína (C8H10N4O2)</h2>
                    <a href="https://mywebar.com/p/Project_0_lui6nsi9y3" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Cafeína (C8H10N4O2)</h2>
                    <p>Fórmula: C8H10N4O2</p>
                    <p>Estado: Sólido</p>
                    <p>Peso molecular: 194.19 g/mol</p>
                </div>
            </div>

            <!-- Fenol -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="modelos/fenol (1).glb"
                        alt="Modelo de fenol"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Fenol (C6H5OH)</h2>
                    <a href="https://mywebar.com/p/Project_2_ble0prmepm" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Fenol (C6H5OH)</h2>
                    <p>Fórmula: C6H5OH</p>
                    <p>Estado: Líquido</p>
                    <p>Peso molecular: 94.11 g/mol</p>
                </div>
            </div>

            <!-- Glicerol -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="modelos/glicerol (2).glb"
                        alt="Modelo de glicerol"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Glicerol (C3H8O3)</h2>
                    <a href="https://mywebar.com/p/Project_1_iuoicrjuwn" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Glicerol (C3H8O3)</h2>
                    <p>Fórmula: C3H8O3</p>
                    <p>Estado: Líquido</p>
                    <p>Peso molecular: 92.09 g/mol</p>
                </div>
            </div>

            <!-- Propano -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="modelos/Propano .glb"
                        alt="Modelo de propano"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Propano (C3H8)</h2>
                    <a href="https://mywebar.com/p/Project_0_thg4jret8w" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Propano (C3H8)</h2>
                    <p>Fórmula: C3H8</p>
                    <p>Estado: Gas</p>
                    <p>Peso molecular: 44.10 g/mol</p>
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
                ¿Qué son las estructuras moleculares?
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-800 text-xl leading-relaxed">
                <ul class="list-disc list-inside space-y-2">
                    <li>Representaciones en 2D o 3D de cómo se organizan los átomos en una molécula.</li>
                    <li>Muestran enlaces químicos, ángulos y geometría molecular.</li>
                    <li>Ayudan a comprender propiedades físicas y químicas de las sustancias.</li>
                    <li>Son fundamentales en química, biología, farmacología y materiales.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 2 -->
        <section class="border-b border-gray-300 py-4">
            <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
                Tipos de representaciones moleculares
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-800 text-xl leading-relaxed">
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Estructura de Lewis:</strong> Representa los electrones de valencia y enlaces.</li>
                    <li><strong>Modelo de varillas y esferas:</strong> Muestra átomos como esferas y enlaces como varillas.</li>
                    <li><strong>Modelo de esferas compactas (CPK):</strong> Destaca el volumen real de los átomos.</li>
                    <li><strong>Modelo 3D digital:</strong> Permite manipulación en software y realidad aumentada.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 3 -->
        <section class="border-b border-gray-300 py-4">
            <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
                Importancia de estudiar estructuras moleculares
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-800 text-xl leading-relaxed">
                <ul class="list-disc list-inside space-y-2">
                    <li>Comprender cómo se forman y rompen los enlaces químicos.</li>
                    <li>Predecir la reactividad y estabilidad de compuestos.</li>
                    <li>Explicar propiedades como solubilidad, polaridad y puntos de fusión.</li>
                    <li>Desarrollar nuevos medicamentos y materiales innovadores.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 4 -->
        <section class="border-b border-gray-300 py-4">
            <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
                Ejemplos de moléculas comunes
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-800 text-xl leading-relaxed">
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Agua (H₂O):</strong> Geometría angular, responsable de la vida en la Tierra.</li>
                    <li><strong>Dióxido de carbono (CO₂):</strong> Molécula lineal, clave en el ciclo del carbono.</li>
                    <li><strong>Metano (CH₄):</strong> Estructura tetraédrica, principal componente del gas natural.</li>
                    <li><strong>Glucosa (C₆H₁₂O₆):</strong> Fuente de energía esencial en organismos vivos.</li>
                    <li><strong>Cafeína (C₈H₁₀N₄O₂):</strong> Molécula estimulante que actúa en el sistema nervioso.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 5 -->
        <section class="border-b border-gray-300 py-4">
            <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
                Aplicaciones de la visualización molecular
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-800 text-xl leading-relaxed">
                <ul class="list-disc list-inside space-y-2">
                    <li>Enseñanza interactiva de la química en escuelas y universidades.</li>
                    <li>Investigación en biomedicina y diseño de fármacos.</li>
                    <li>Estudio de materiales para ingeniería y nanotecnología.</li>
                    <li>Exploración en entornos de realidad aumentada y virtual.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 6 -->
        <section class="border-b border-gray-300 py-4">
            <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
                Resumen
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-800 text-xl leading-relaxed">
                <p>Las estructuras moleculares permiten comprender la forma, propiedades y funciones de las sustancias químicas.
                    Su estudio es clave para la ciencia, la tecnología y la vida cotidiana, ya que conecta la teoría con aplicaciones reales.</p>
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