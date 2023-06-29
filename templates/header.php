<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/sitio/Paguina/WebPage/assets/img/logos/olpega-logo-blue.svg" type="image/svg+xml">
    <link rel="stylesheet" href="/sitio/Paguina/WebPage/assets/css/output.css">
    <title>Olpega | <?php echo $title ?? 'Inicio'; ?></title>
    <meta name="description" content="<?php echo $description ?? 'Fundada en 1997, Olpega es un líder en servicios de transporte para la industria alimenticia y automotriz. Ofrecemos soluciones personalizadas de transporte y logística tanto a nivel nacional como internacional, garantizando calidad y seguridad a través de estándares estrictos y monitoreo satelital 24/7. Con presencia en México y Estados Unidos, nos esforzamos por satisfacer las necesidades específicas de cada cliente, mejorando continuamente nuestros procesos y manteniendo los más altos estándares de la industria.'; ?>">


</head>

<body>
    <!-- Comienza el navbar -->
<nav class="bg-white w-full z-20 top-0 left-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-8">
        <div class="flex-grow">
            <a href="/sitio/Paguina/WebPage/index.php" class="flex items-center">
                <img src="/sitio/Paguina/WebPage/assets/img/logos/olpega-logo-blue.svg"
                    class="h-10 mr-3 transform transition-all hover:scale-110" alt="Olpega Logo">
            </a>
        </div>
        <div class="flex md:order-2">
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 border border-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-500"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-end hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent">
                <li>
                    <a href="/sitio/Paguina/WebPage/index.php"
                        class="block py-2 pl-3 pr-4 text-gray-500 rounded hover:text-[#66CCFF] md:p-0 transform transition-all hover:scale-110 text-lg">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="/sitio/Paguina/WebPage/templates/services.php"
                        class="block py-2 pl-3 pr-4 text-gray-500 rounded hover:text-[#66CCFF] md:p-0 transform transition-all hover:scale-110 text-lg">
                        Servicios
                    </a>
                </li>
                <li>
                    <a href="/sitio/Paguina/WebPage/templates/valueadded.php"
                        class="block py-2 pl-3 pr-4 text-gray-500 rounded hover:text-[#66CCFF] md:p-0 transform transition-all hover:scale-110 text-lg">
                       Valor agregado
                    </a>
                </li>
                <li>
                    <a href="/sitio/Paguina/WebPage/templates/clients.php"
                        class="block py-2 pl-3 pr-4 text-gray-500 rounded hover:text-[#66CCFF] md:p-0 transform transition-all hover:scale-110 text-lg">
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="/sitio/Paguina/WebPage/templates/contact.php"
                        class="block py-2 pl-3 pr-4 text-gray-500 rounded hover:text-[#66CCFF] md:p-0 transform transition-all hover:scale-110 text-lg">
                        Contacto
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Termina el navbar -->


