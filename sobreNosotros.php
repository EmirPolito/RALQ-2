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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Librería para mostrar modelos 3D -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>

<body>
    <!-- Botón volver al inicio -->
    <a href="index.php" 
       class="fixed top-8 left-9 bg-blue-600 hover:bg-blue-500 text-white font-medium px-7 py-2 rounded-lg shadow-lg transition">
        Inicio
    </a>    

    <!-- Sección de contacto / About -->
    <section id="about" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Sobre RALQ Visuality
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Plataforma educativa especializada en visualización 3D para el aprendizaje de ciencias
                </p>
            </div>

            <!-- Características principales -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Cada tarjeta aquí -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-gray-200 dark:border-gray-700 hover:border-green-500 dark:hover:border-green-400 transition-all duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-green-100 dark:bg-green-900/20 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">
                        Modelos Científicos 3D
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Visualiza estructuras moleculares, células, sistemas biológicos y conceptos físicos 
                        con modelos tridimensionales interactivos de alta calidad.
                    </p>
                </div>
                <!-- ... repite las otras tarjetas igual que en tu código ... -->
            </div>

            <!-- Áreas de estudio -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">
                    Áreas de Estudio Disponibles
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Cada área -->
                    <div class="text-center p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                        <div class="text-4xl mb-4">🧪</div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Química</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Moléculas, enlaces químicos, reacciones y estructuras cristalinas
                        </p>
                    </div>
                    <!-- ... repite las demás áreas ... -->
                </div>
            </div>
        </div>
    </section>

    <!-- Animaciones -->
    <script src="js/animaciones-index.js"></script>
</body>
</html>
