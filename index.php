<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristian Barraza, Irving Esteban, Emir Polito">
    <title>RALQ</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="build/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fuentes y estilos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link ref="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index-copy.css">
    <link rel="stylesheet" href="css/animaciones.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Librería para mostrar modelos 3D -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>



<body class="relative">
    <!-- Header flotante ancho completo -->
    <header id="floating-header" class="fixed top-0 left-0 w-full bg-white/100 backdrop-blur-md shadow-md z-50 transition-transform duration-300">
        <div class="w-full flex items-center justify-between px-8 py-5">
            <!-- Logo a la izquierda -->
            <img src="img/logo_ralq_color-removebg-preview.png" alt="Logo" class="h-16 md:h-20 flex-shrink-0">
            <!-- Links a la derecha -->
            <div class="flex items-center space-x-5">
                
                <!-- ⭐ BOTÓN MODO OSCURO ⭐ -->
                <button id="theme-toggle"
                    class="px-4 py-3 rounded-lg font-medium text-lg md:text-xl
                           bg-gray-200 text-gray-800
                           dark:bg-[#2b3951] dark:text-white
                           hover:bg-gray-300 dark:hover:bg-[#1f2740]
                           transition-colors">
                    🌙

                     <script>
        const html = document.documentElement;
        const savedTheme = localStorage.getItem("theme");

        if (savedTheme === "dark") {
            html.classList.add("dark");
        }

        document.getElementById("theme-toggle").addEventListener("click", () => {
            if (html.classList.contains("dark")) {
                html.classList.remove("dark");
                localStorage.setItem("theme", "light");
            } else {
                html.classList.add("dark");
                localStorage.setItem("theme", "dark");
            }
        });
    </script>
                </button>

                <a href="registro.php" class="px-6 py-3 bg-[#2b3951] text-white rounded-lg font-medium text-lg md:text-xl hover:bg-[#1f2740] transition-colors">Regístrate</a>
                <span class="text-gray-700 text-lg md:text-xl">o</span>
                <a href="iniciosesion.php" class="px-6 py-3 bg-[#2b3951] text-white rounded-lg font-medium text-lg md:text-xl hover:bg-[#1f2740] transition-colors">Inicia sesión</a>
            </div>
        </div>
    </header>



    <!-- Hero -->
    <section class="hero relative w-full h-screen">
        <!-- Imagen de fondo -->
        <img src="img/cerrar-cientifico-vistiendo-mascarilla.jpg" alt="Imagen de fondo" class="w-full h-full object-cover imagen-hero">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50 overlay"></div>

        <!-- TEXTO SOBRE LA IMAGEN HERO -->
        <!-- Contenido del hero -->
        <div class="contenido-hero absolute inset-0 flex flex-col justify-center items-center text-center px-6 md:px-16 fade-in">
            <h1 class="text-6xl md:text-8xl font-light text-white mb-5 drop-shadow-lg" style="font-family: 'Poppins'">
                Visualiza y Aprende en Realidad Aumentada </h1>
            <p class="text-xl md:text-4xl text-white drop-shadow-md max-w-1xl">
                Aprende química con modelos en realidad aumentada directamente en tu dispositivo.
            </p>
        </div>
    </section>

    <script>
        // Efecto de ocultar/mostrar header según scroll
        let lastScroll = 0;
        const header = document.getElementById('floating-header');
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > lastScroll && currentScroll > 50) {
                // Scroll hacia abajo → ocultar
                header.style.transform = 'translateY(-100%)';
            } else {
                // Scroll hacia arriba → mostrar
                header.style.transform = 'translateY(0)';
            }
            lastScroll = currentScroll;
        });
    </script>
</body>




<main class="contenido-principal">
    <!-- Sección de Novedades -->
    <section class="novedades fade-in text-center color-black">
        <div class="carrusel mt-6">
            <div class="carta"><img src="img/carrusel/carrusel1.png" alt="Novedad 1">
                <p>Descubre tus laboratorios</p>
            </div>
            <div class="carta"><img src="img/carrusel/carrusel2.png" alt="Novedad 2">
                <p>Infinidad de instrumentos RA</p>
            </div>
            <div class="carta"><img src="img/carrusel/carrusel3.png" alt="Novedad 3">
                <p>Tus conocimientos aumentarán</p>
            </div>
            <div class="carta"><img src="img/carrusel/carrusel4.png" alt="Novedad 4">
                <p>Solo usa tu smartphone</p>
            </div>
            <div class="carta"><img src="img/carrusel/carrusel1 copy.png" alt="Novedad 5">
                <p>Visualiza tu aprendizaje</p>
            </div>
            <div class="carta"><img src="img/carrusel/carrusel2 copy.png" alt="Novedad 6">
                <p>Aprende de una mejor manera</p>
            </div>
        </div>
    </section>



    <!-- Sección Texto + Modelo 3D -->
    <!-- <section class="bg-black text-white"> -->
    <section class="bg-gray-900 text-white">

        <div class="container px-8 py-8 mx-auto">
            <div class="lg:flex lg:items-center lg:gap-12">
                <!-- Texto principal y componentes -->
                <div class="w-full space-y-11 lg:w-1/2">
                    <!-- Título principal -->
                    <div>
                        <h1 class="text-6xl lg:text-5xl font-extrabold capitalize text-white -mt-8"
                            style="font-family: 'Poppins', sans-serif;"> Aprende sobre estructuras moleculares
                        </h1>


                        <div class="mt-4 flex items-center gap-2">
                            <span class="inline-block w-40 h-1 bg-teal-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 bg-teal-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-teal-500 rounded-full"></span>
                        </div>
                    </div>

                    <!-- Item 1 -->
                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-400 bg-gray-800/50 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-white">Aprendizaje interactivo</h2>
                            <p class="mt-2 text-gray-300">
                                Explora cada molécula desde todos los ángulos, manipulando los modelos para comprender mejor su estructura. </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-400 bg-gray-800/50 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-white">Visualización intuitiva
                            </h2>
                            <p class="mt-2 text-gray-300">
                                Nuestros modelos 3D hacen que conceptos complejos sean fáciles de entender, mostrando cómo se conectan los átomos y se forman las moléculas. </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-400 bg-gray-800/50 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-white">Accesible en cualquier dispositivo
                            </h2>
                            <p class="mt-2 text-gray-300">
                                Todo el contenido es accesible para computadoras, tablets y celulares, permitiendo experimentar y aprender desde cualquier lugar. </p>
                        </div>
                    </div>
                </div>

                <!-- MODELO 3D -->
                <div class="w-full lg:w-1/2 mt-2 flex justify-center relative">
                    <model-viewer
                        id="modeloCafeina"
                        src="modelos/cafeina.glb"
                        alt="Modelo de Cafeína"
                        auto-rotate
                        camera-controls
                        ar
                        class="w-full h-96 lg:h-[500px] bg-transparent -translate-y-5">
                    </model-viewer>

                    <!-- Etiqueta minimalista -->
                    <span class="absolute bottom-4 left-1/2 -translate-x-1/2 transform
                             bg-teal-900/50 backdrop-blur-md px-6 py-2 rounded-xl
                             font-bold text-white text-lg shadow-sm">
                        Cafeína <span class="text-teal-200 font-medium">(C₈H₁₀N₄O₂)</span>
                    </span>
                </div>
            </div>
        </div>
    </section>





    <section class="bg-white text-black">
        <div class="container px-8 py-8 mx-auto">
            <div class="lg:flex lg:items-center lg:gap-12 lg:flex-row-reverse">
                <!-- Texto principal y componentes (ahora a la derecha) -->
                <div class="w-full space-y-11 lg:w-1/2">
                    <!-- Título principal -->
                    <div>
                        <h1 class="text-6xl lg:text-5xl font-extrabold capitalize text-black -mt-8"
                            style="font-family: 'Poppins', sans-serif;"> Aprende sobre instrumentos de laboratorio
                        </h1>

                        <div class="mt-4 flex items-center gap-2">
                            <span class="inline-block w-40 h-1 bg-teal-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 bg-teal-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-teal-500 rounded-full"></span>
                        </div>
                    </div>

                    <!-- Items 1, 2 y 3 -->
                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-500 bg-gray-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-black">Conoce cada instrumento</h2>
                            <p class="mt-2 text-gray-700">
                                Aprende la función de cada herramienta de laboratorio, desde pipetas y matraces hasta microscopios y agitadores magnéticos
                        </div>
                    </div>

                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-500 bg-gray-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-black">Visualización detallada</h2>
                            <p class="mt-2 text-gray-700">
                                Observa los instrumentos en 3D para entender su forma, tamaño y funcionamiento antes de utilizarlos en un laboratorio real.
                        </div>
                    </div>

                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-500 bg-gray-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-black">Estudia desde cualquier dispositivo</h2>
                            <p class="mt-2 text-gray-700">
                                Accede desde tablet o celular y familiarízate con los instrumentos del laboratorio dondequiera que estés </p>
                        </div>
                    </div>
                </div>
                <!-- MODELO 3D (ahora a la izquierda) -->
                <div class="w-full lg:w-1/2 mt-2 flex justify-center relative">
                    <model-viewer
                        id="modeloGradilla"
                        src="modelos/gradilla.glb"
                        alt="Modelo de Gradilla"
                        auto-rotate
                        camera-controls
                        ar
                        class="w-full h-96 lg:h-[500px] bg-transparent -translate-y-5">
                    </model-viewer>

                    <!-- Etiqueta minimalista -->
                    <span class="absolute bottom-4 left-1/2 -translate-x-1/2 transform
                         bg-teal-100/50 backdrop-blur-md px-6 py-2 rounded-xl
                         font-bold text-black text-lg shadow-sm">
                        Gradilla <span class="text-teal-700 font-medium"></span>
                    </span>
                </div>
            </div>
        </div>
    </section>






    <!-- Sección de Videos -->
    <section class="bg-gray-200 py-20 px-4 md:px-16">
        <div class="flex flex-col gap-16">
            <!-- Video 1: Imagen izquierda, texto derecha -->
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="group relative rounded-3xl overflow-hidden shadow-2xl transition-transform transform hover:scale-105 w-full md:w-1/2">
                    <video src="video/5752738-uhd_3840_2160_30fps.mp4" autoplay loop muted class="w-full h-72 md:h-[400px] object-cover"></video>
                </div>
                <div class="w-full md:w-1/2 flex justify-center items-center h-[400px] px-4">
                    <div class="text-center max-w-md flex flex-col justify-center h-full">
                        <h3 class="text-2xl md:text-4xl font-bold mb-20 text-black-400">AMPLÍA TUS CONOCIMIENTOS</h3>
                        <div class="space-y-6 text-left mt-[-20px]">
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">La RA mejora la comprensión de los equipos de laboratorio.</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">Aprende a identificar correctamente cada instrumento.</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">Aumenta tu participación y seguridad en clase.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Video 2: Imagen derecha, texto izquierda -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                <div class="group relative rounded-3xl overflow-hidden shadow-2xl transition-transform transform hover:scale-105 w-full md:w-1/2">
                    <video src="video/8326252-uhd_3840_2160_30fps (1).mp4" autoplay loop muted class="w-full h-72 md:h-[400px] object-cover"></video>
                </div>
                <div class="w-full md:w-1/2 flex justify-center items-center h-[400px] px-4">
                    <div class="text-center max-w-md flex flex-col justify-center h-full">
                        <h3 class="text-2xl md:text-4xl font-bold mb-20 text-black-400">SIÉNTETE CONFIADO</h3>

                        <div class="space-y-6 text-left mt-[-20px]">
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">Conoce a fondo los instrumentos de laboratorio gracias a la RA.</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">Gana confianza en su uso y aumenta tu seguridad en clase.</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">Explora y comprende cómo se relacionan las moléculas y sus estructuras de manera interactiva.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
<footer class="bg-gray-900 text-gray-300 py-16">
  <div class="w-full px-10 md:px-16 lg:px-24">
    <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-12">

      <!-- Descripción + Redes Sociales -->
      <div class="flex-1">
        <h2 class="text-2xl font-bold text-white">Proyecto RALQ</h2>
        <p class="mt-4 text-lg text-gray-400 max-w-md">
          Plataforma educativa que enseña química mediante modelos 3D y RA 
          de moléculas e instrumentos de laboratorio.
        </p>
        <div class="mt-6 flex space-x-6">
          <!-- Facebook -->
          <a href="https://facebook.com" target="_blank" class="hover:text-white transition">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 5.004 3.657 9.128 8.438 9.877v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.987C18.343 21.128 22 17.004 22 12z" />
            </svg>
          </a>
          <!-- Instagram -->
          <a href="https://instagram.com" target="_blank" class="hover:text-white transition">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
              <path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9zm4.5 3a5.5 5.5 0 1 1 0 11 5.5 5.5 0 0 1 0-11zm0 2a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zm5.25-.75a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0z" />
            </svg>
          </a>
          <!-- Twitter -->
          <a href="https://twitter.com" target="_blank" class="hover:text-white transition">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Secciones -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 flex-1 md:pl-10">

        <!-- Fundadores -->
        <div>
          <h3 class="text-lg font-semibold text-white">Fundadores</h3>
          <div class="mt-5 space-y-3 text-gray-400">
            <p>Emir Polito Guevara</p>
            <p>Irving Esteban Molina Méndez</p>
            <p>Cristian Daniel Barraza Hernández</p>
          </div>
        </div>

        <!-- Compañía -->
        <div>
          <h3 class="text-lg font-semibold text-white">Compañía</h3>
          <ul class="mt-5 space-y-3">
            <li><a href="/ayuda.php" class="hover:text-white transition">Ayuda</a></li>
            <li><a href="/contacto.php" class="hover:text-white transition">Contacto</a></li>
            <li><a href="/sobreNosotros.php" class="hover:text-white transition">Sobre nosotros</a></li>
          </ul>
        </div>

        <!-- Recursos -->
        <div>
          <h3 class="text-lg font-semibold text-white">Recursos</h3>
          <ul class="mt-5 space-y-3">
            <li><a href="/blog.php" class="hover:text-white transition">Blog</a></li>
            <li><a href="#" class="hover:text-white transition">Documentación</a></li>
          </ul>
        </div>

      </div>
    </div>

    <!-- Línea separadora -->
    <div class="border-t border-gray-700 mt-12"></div>

    <!-- Footer inferior -->
    <div class="mt-6 flex flex-col md:flex-row justify-between items-center text-gray-400 text-sm">
      <span>2025 &copy; Todos los derechos reservados</span>
      <div class="mt-2 md:mt-0 space-x-4">
        <a href="#" class="hover:text-white transition">Cookies</a>
        <a href="#" class="hover:text-white transition">Privacidad</a>
      </div>
    </div>
  </div>
</footer>


    <!-- Animaciones -->
    <script src="js/animaciones-index.js"></script>
    </body>

</html>