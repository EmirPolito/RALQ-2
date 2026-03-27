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
            <img src="img/laboratorios/labo-q-general.jpg" alt="Robot de laboratorio" class="hero-image">
            <div class="hero-text">
                <h2>LABORATORIO</h2>
                <h1>QUÍMICA GENERAL</h1>
                <p>Un laboratorio de química general es un espacio diseñado para la enseñanza y realización de experimentos básicos de química. En él, los estudiantes y científicos pueden practicar, analizar y comprender los principios fundamentales de la química a través de experimentos controlados.</p>
            </div>
        </div>
    </section>


    <main>
        <h2 style="text-align:center; margin-bottom: 2rem;">ELIGE UNO PARA VISUALIZARLO</h2>
        <div class="menu" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; justify-items: center; row-gap: 80px;"> <!-- row-gap aumentado -->



            <!-- Gradilla -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="modelos/gradilla.glb"
                        alt="Modelo de gradilla"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Gradilla</h2>
                    <a href="https://mywebar.com/p/Project_1_bsnqy3x66o" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Gradilla</h2>
                    <p>//</p>
                    <p>//</p>
                    <p>//</p>
                </div>
            </div>


            <!-- Matraz Erlenmeyer -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="instrumentos3D/matraz (1).glb"
                        alt="Modelo de matraz"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Matraz</h2>
                    <a href="https://mywebar.com/p/Project_1_bsnqy3x66o" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Matraz</h2>
                    <p>//</p>
                    <p>//</p>
                    <p>//</p>
                </div>
            </div>




            <!--  Microscopio -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="instrumentos3D/microscopio.glb"
                        alt="Modelo de Microscopio"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Microscopio</h2>
                    <a href="https://mywebar.com/p/Project_1_f3ia9uedar" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Microscopio</h2>
                    <p>//</p>
                    <p>//</p>
                    <p>//</p>
                </div>
            </div>



            <!-- Mortero con mano de porcelana -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="instrumentos3D/mortero_con_mano.glb"
                        alt="Modelo de Mortero con mano de porcelana"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Mortero con mano de porcelana</h2>
                    <a href="https://mywebar.com/p/Project_2_weu37bf31" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Mortero con mano de porcelana</h2>
                    <p>//</p>
                    <p>//</p>
                    <p>//</p>
                </div>
            </div>


            <!-- Pipeta -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="instrumentos3D/pipeta (1).glb"
                        alt="Modelo de Pinzas para pipeta"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Pipeta</h2>
                    <a href="//" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Pipeta</h2>
                    <p>//</p>
                    <p>//</p>
                    <p>//</p>
                </div>
            </div>



            <!-- Placas de porcelana para reacciones -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="instrumentos3D/placas_de_porcelana_para_reacciones (2).glb"
                        alt="Modelo de Placas de porcelana para reacciones"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;"> Placas de porcelana para reacciones</h2>
                    <a href="img/QR/quimicaGen/matraz.jpg" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;"> Placas de porcelana para reacciones</h2>
                    <p>//</p>
                    <p>//</p>
                    <p>//</p>
                </div>
            </div>


            <!-- Pinzas para matraces -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="instrumentos3D/pinzas_para_matraces (1).glb"
                        alt="Modelo de Pinzas para matraces"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Pinzas para matraces</h2>
                    <a href="//" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Pinzas para matraces</h2>
                    <p>//</p>
                    <p>//</p>
                    <p>//</p>
                </div>
            </div>

            <!-- Anillo_de_hierro -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="instrumentos3D/anillo_de_hierro (1).glb"
                        alt="Modelo de Pinzas para matraces"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Anillo de hierro</h2>
                    <a href="//" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Anillo de hierro</h2>
                    <p>//</p>
                    <p>//</p>
                    <p>//</p>
                </div>
            </div>



            <!-- Pinzas para tubo de ensayo -->
            <div class="menu-item" style="width: 340px; height: 380px; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; position: relative; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <button onclick="toggleFullInfo(this)" style="position: absolute; top: 10px; right: 10px; background:#2563eb; color:white; border:none; border-radius:50%; width:30px; height:30px; cursor:pointer; font-weight:bold; z-index:10;">i</button>

                <div class="card-content" style="display: flex; flex-direction: column; flex-grow: 1;">
                    <model-viewer
                        src="instrumentos3D/pinzas_para_tubo_de_ensayo (1).glb"
                        alt="Modelo de Pinzas para tubo de ensayo"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 240px; background-color: transparent;"
                        shadow-intensity="0"
                        interaction-prompt="none">
                    </model-viewer>

                    <h2 style="margin-top: 5rem; font-size: 1.2rem; font-weight: bold; color: #222; text-align:center;">Pinzas para tubo de ensayo</h2>
                    <a href="//" target="_blank"
                        style="display: inline-block; margin-top: auto; padding: 0.8rem 2rem; background-color: #2563eb; color: white; border-radius: 8px; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 8px #2563eb33; border: none; cursor: pointer;">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div class="full-info" style="display:none; flex-direction: column; justify-content: center; align-items: center; text-align:center; padding: 16px; flex-grow:1; overflow-y:auto; font-size:1rem;">
                    <h2 style="font-size:1.3rem; font-weight:bold; margin-bottom: 10px;">Pinzas para tubo de ensayo</h2>
                    <p>//</p>
                    <p>//</p>
                    <p>//</p>
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
                ¿Para qué sirve un laboratorio de química general?
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li>Aplicar los conceptos teóricos aprendidos en clase.</li>
                    <li>Realizar experimentos para observar reacciones químicas.</li>
                    <li>Aprender técnicas de medición y análisis químico.</li>
                    <li>Manejar sustancias químicas con seguridad.</li>
                    <li>Desarrollar habilidades en el uso de instrumentos de laboratorio.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 2 -->
        <section class="border-b border-gray-300 py-4">
            <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
                ¿Qué áreas tiene un laboratorio de química general?
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Área de trabajo:</strong> Mesas con quemadores, reactivos y equipos de laboratorio.</li>
                    <li><strong>Área de almacenamiento:</strong> Donde se guardan reactivos y sustancias químicas.</li>
                    <li><strong>Área de seguridad:</strong> Incluye extintores, regaderas de emergencia y botiquín de primeros auxilios.</li>
                    <li><strong>Campana de extracción:</strong> Para trabajar con gases tóxicos de manera segura.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 3 -->
        <section class="border-b border-gray-300 py-4">
            <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
                Instrumentos y equipos comunes
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Vaso de precipitados:</strong> Para mezclar sustancias.</li>
                    <li><strong>Probetas y pipetas:</strong> Para medir líquidos con precisión.</li>
                    <li><strong>Matraz Erlenmeyer:</strong> Para calentar y agitar soluciones.</li>
                    <li><strong>Balanza analítica:</strong> Para pesar sustancias químicas.</li>
                    <li><strong>Mechero Bunsen:</strong> Para calentar muestras.</li>
                    <li><strong>Tubos de ensayo:</strong> Para realizar pequeñas reacciones químicas.</li>
                    <li><strong>Espátulas y pinzas:</strong> Para manipular sólidos y objetos calientes.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 4 -->
        <section class="border-b border-gray-300 py-4">
            <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
                Normas de seguridad
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li>Usar bata, guantes y gafas de seguridad.</li>
                    <li>No comer ni beber dentro del laboratorio.</li>
                    <li>Leer y seguir las instrucciones de cada experimento.</li>
                    <li>Manejar los reactivos con cuidado y conocer su peligrosidad.</li>
                    <li>En caso de accidente, reportarlo de inmediato al instructor.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 5 -->
        <section class="border-b border-gray-300 py-4">
            <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
                Ejemplos de experimentos en un laboratorio de química general
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Reacción entre ácido y base:</strong> Formación de sal y agua.</li>
                    <li><strong>Prueba de llama:</strong> Identificación de elementos metálicos.</li>
                    <li><strong>Síntesis y purificación:</strong> Obtención de compuestos químicos.</li>
                    <li><strong>Electroquímica:</strong> Estudio de pilas y corrosión de metales.</li>
                    <li><strong>Titulaciones:</strong> Determinación de la concentración de una sustancia.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 6 -->
        <section class="border-b border-gray-300 py-4">
            <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
                Resumen
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <p>Un laboratorio de química general es esencial para el aprendizaje práctico de la química. Permite a los estudiantes experimentar y reforzar los conceptos teóricos de manera segura y controlada.</p>
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