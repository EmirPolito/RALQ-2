<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Cristian Barraza, Irving Esteban, Emir Polito">
  <title>RALQ</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fuentes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">

  <!-- Botón volver al inicio -->
  <a href="index.php"
    class="fixed top-8 left-9 bg-blue-600 hover:bg-blue-500 text-white font-medium px-6 py-2 rounded-lg shadow-lg transition">
    Inicio
  </a>

  <!-- Contenedor principal -->
  <main class="max-w-4xl mx-auto px-4 py-12 space-y-12">

    <!-- Título del Blog -->
    <h1 class="text-3xl lg:text-4xl font-bold text-blue-600 text-center">From the Blog</h1>

    <!-- Blog Card 1 -->
    <article class="bg-white dark:bg-gray-900 rounded-xl shadow-lg overflow-hidden flex flex-col lg:flex-row">
      <img class="w-full lg:w-1/2 h-72 lg:h-auto object-cover" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Blog Image">
      <div class="p-6 flex flex-col justify-between">
        <div>
          <p class="text-sm text-blue-500 uppercase">Category</p>
          <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:underline">
            All the features you want to know
          </a>
          <p class="mt-3 text-gray-500 dark:text-gray-300 text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt, laudantium quia tempore delect.
          </p>
          <a href="#" class="inline-block mt-3 text-blue-500 underline hover:text-blue-400">Read more</a>
        </div>

        <div class="flex items-center mt-6">
          <img class="w-10 h-10 rounded-full object-cover object-center"
            src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&auto=format&fit=crop&w=764&q=80" alt="Author">
          <div class="ml-4">
            <h3 class="text-sm text-gray-700 dark:text-gray-200">Amelia Anderson</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
          </div>
        </div>
      </div>
    </article>

    <!-- Blog Card 2 -->
    <article class="bg-white dark:bg-gray-900 rounded-xl shadow-lg overflow-hidden flex flex-col lg:flex-row">
      <img class="w-full lg:w-1/2 h-72 lg:h-auto object-cover" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Blog Image">
      <div class="p-6 flex flex-col justify-between">
        <div>
          <p class="text-sm text-blue-500 uppercase">Category</p>
          <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:underline">
            Everything you need to know
          </a>
          <p class="mt-3 text-gray-500 dark:text-gray-300 text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt, laudantium quia tempore delect.
          </p>
          <a href="#" class="inline-block mt-3 text-blue-500 underline hover:text-blue-400">Read more</a>
        </div>

        <div class="flex items-center mt-6">
          <img class="w-10 h-10 rounded-full object-cover object-center"
            src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&auto=format&fit=crop&w=764&q=80" alt="Author">
          <div class="ml-4">
            <h3 class="text-sm text-gray-700 dark:text-gray-200">John Doe</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">UI/UX Designer</p>
          </div>
        </div>
      </div>
    </article>

    <!-- Blog Card 3 -->
    <article class="bg-white dark:bg-gray-900 rounded-xl shadow-lg overflow-hidden flex flex-col lg:flex-row">
      <img class="w-full lg:w-1/2 h-72 lg:h-auto object-cover" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Blog Image">
      <div class="p-6 flex flex-col justify-between">
        <div>
          <p class="text-sm text-blue-500 uppercase">Category</p>
          <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:underline">
            Top tips for developers
          </a>
          <p class="mt-3 text-gray-500 dark:text-gray-300 text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt, laudantium quia tempore delect.
          </p>
          <a href="#" class="inline-block mt-3 text-blue-500 underline hover:text-blue-400">Read more</a>
        </div>

        <div class="flex items-center mt-6">
          <img class="w-10 h-10 rounded-full object-cover object-center"
            src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&auto=format&fit=crop&w=764&q=80" alt="Author">
          <div class="ml-4">
            <h3 class="text-sm text-gray-700 dark:text-gray-200">Jane Smith</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Backend Developer</p>
          </div>
        </div>
      </div>
    </article>

  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-16 px-6 md:px-24 mt-12">
    <div class="border-t border-gray-700"></div>
    <p class="text-center mt-6 text-gray-400">© 2025 RALQ. Todos los derechos reservados.</p>
  </footer>

</body>

</html>
