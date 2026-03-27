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
            <!-- <a href="https://publuu.com/flip-book/789518/1745350">Ayuda</a> -->
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
        <img src="img/laboratorios/labodesc.jpg" alt="Robot de laboratorio" class="hero-image">
        <div class="hero-text">
            <h1>LABORATORIOS</h1>
            <p>Un laboratorio químico es un espacio en el que se estudian mezclas de elementos, sustancias y compuestos para obtener informaciones de carácter científico, generalmente en forma de datos, para la posterior realización de un informe.</p>
        </div>
    </div>
    </section>

    <main>

        <div class="menu">
            <a href="quimica-general.php" class="menu-item">
                <img src="img/laboratorios/labo1.png" alt="Instrumentaria de Laboratorio">
            </a>
            <a href="analisis-instrumental.php" class="menu-item">
                <img src="img/laboratorios/labo2.png" alt="Estructuras Moleculares">
            </a>
            <a href="plantas-quimicas.php" class="menu-item">
                <img src="img/laboratorios/labo3.png" alt="Elementos Químicos">
            </a>
        </div>
    </main>

    
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

</body>
</html>
