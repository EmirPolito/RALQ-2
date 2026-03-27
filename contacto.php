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
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Librería para modelos 3D -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>

<body class="font-poppins">
    <!-- Botón volver al inicio -->
    <a href="index.php" 
       class="fixed top-8 left-9 bg-blue-600 hover:bg-blue-500 text-white font-medium px-7 py-2 rounded-lg shadow-lg transition">
        Inicio
    </a>    

    <!-- Sección de contacto -->
    <section
        class="min-h-screen bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');"
    >
        <div class="flex items-center justify-center min-h-screen bg-black/60 px-4 py-12">
            <div class="container mx-auto max-w-7xl flex flex-col lg:flex-row items-center gap-12">
                
                <!-- Texto Izquierdo -->
                <div class="text-white lg:w-1/2 w-full">
                    <h1 class="text-3xl lg:text-4xl font-bold capitalize">Contáctanos</h1>
                    <p class="mt-5 text-lg max-w-xl">
                        ¿Tienes preguntas, comentarios o deseas colaborar con nosotros?
                        Estamos aquí para ayudarte. Comparte tus ideas o necesidades, ¡nos encantaría saber de ti!
                    </p>

                    <!-- Redes sociales -->
                    <div class="mt-8">
                        <h3 class="text-gray-300 font-semibold">Redes sociales</h3>
                        <div class="flex items-center gap-5 mt-4">
                            <!-- Facebook -->
                            <a href="#" target="_blank" class="text-white hover:text-blue-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82V14.708h-3.41v-3.622h3.41V8.413c0-3.377 2.064-5.212 5.085-5.212 1.444 0 2.682.107 3.041.155v3.525l-2.086.001c-1.636 0-1.952.777-1.952 1.915v2.512h3.905l-.509 3.622h-3.396V24h6.654C23.407 24 24 23.407 24 22.676V1.325C24 .593 23.407 0 22.675 0z"/>
                                </svg>
                            </a>

                            <!-- Instagram -->
                            <a href="#" target="_blank" class="text-white hover:text-pink-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.055 1.97.24 2.427.403a4.92 4.92 0 011.77 1.14 4.922 4.922 0 011.14 1.77c.163.457.348 1.256.403 2.427.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.055 1.17-.24 1.97-.403 2.427a4.92 4.92 0 01-1.14 1.77 4.922 4.922 0 01-1.77 1.14c-.457.163-1.256.348-2.427.403-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.055-1.97-.24-2.427-.403a4.92 4.92 0 01-1.77-1.14 4.922 4.922 0 01-1.14-1.77c-.163-.457-.348-1.256-.403-2.427C2.175 15.747 2.163 15.367 2.163 12s.012-3.584.07-4.85c.055-1.17.24-1.97.403-2.427a4.92 4.92 0 011.14-1.77 4.922 4.922 0 011.77-1.14c.457-.163 1.256-.348 2.427-.403C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.736 0 8.332.013 7.052.072 5.773.13 4.688.346 3.77.687a6.92 6.92 0 00-2.49 1.636A6.922 6.922 0 00.687 4.813C.346 5.732.13 6.817.072 8.096.013 9.376 0 9.78 0 12c0 2.22.013 2.624.072 3.904.058 1.279.274 2.364.615 3.282a6.92 6.92 0 001.636 2.49 6.922 6.922 0 002.49 1.636c.918.341 2.003.557 3.282.615C8.332 23.987 8.736 24 12 24s3.668-.013 4.948-.072c1.279-.058 2.364-.274 3.282-.615a6.92 6.92 0 002.49-1.636 6.922 6.922 0 001.636-2.49c.341-.918.557-2.003.615-3.282.059-1.28.072-1.684.072-3.904s-.013-2.624-.072-3.904c-.058-1.279-.274-2.364-.615-3.282a6.92 6.92 0 00-1.636-2.49 6.922 6.922 0 00-2.49-1.636c-.918-.341-2.003-.557-3.282-.615C15.668.013 15.264 0 12 0z"/>
                                    <path d="M12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8z"/>
                                    <circle cx="18.406" cy="5.594" r="1.44"/>
                                </svg>
                            </a>

                            <!-- LinkedIn -->
                            <a href="#" target="_blank" class="text-white hover:text-blue-500 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.23 0H1.77C.792 0 0 .774 0 1.73v20.54C0 23.226.792 24 1.77 24h20.46C23.208 24 24 23.226 24 22.27V1.73C24 .774 23.208 0 22.23 0zM7.12 20.452H3.56V9h3.56v11.452zM5.34 7.56a2.06 2.06 0 110-4.12 2.06 2.06 0 010 4.12zm14.332 12.892h-3.555v-5.568c0-1.33-.025-3.042-1.852-3.042-1.852 0-2.136 1.445-2.136 2.938v5.672h-3.556V9h3.415v1.561h.048c.476-.9 1.637-1.852 3.368-1.852 3.6 0 4.263 2.368 4.263 5.448v6.295z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Formulario Derecho -->
                <div class="bg-white dark:bg-gray-900 p-7 rounded-xl shadow-2xl w-full lg:w-1/2 mt-14 lg:mt-16">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Formulario de contacto</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Pregúntanos lo que necesites, estamos listos para responderte.
                    </p>
                    <form class="mt-8 space-y-5" method="POST" action="procesar_contacto.php">
                        <div>
                            <label class="block mb-1 text-sm text-gray-700 dark:text-gray-300">Nombre completo</label>
                            <input type="text" name="nombre" class="w-full px-4 py-2 border rounded-md bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200 border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400" required />
                        </div>
                        <div>
                            <label class="block mb-1 text-sm text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" name="email" class="w-full px-4 py-2 border rounded-md bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200 border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400" required />
                        </div>
                        <div>
                            <label class="block mb-1 text-sm text-gray-700 dark:text-gray-300">Mensaje</label>
                            <textarea name="mensaje" rows="5" class="w-full px-4 py-3 border rounded-md bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200 border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-md transition duration-300">Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
