<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/WebPage/assets/css/styles.css">
    <link rel="stylesheet" href="/WebPage/assets/css/output.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Base</title>
</head>

<body>
    <!-- Comienza el navbar -->

    <nav class=bg-custom-blue  w-full z-20 top-0 left-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-8">
            <a href="/WebPage/index.php" class="flex items-center">
                <img src="/WebPage/assets/img/logo.webp" class="h-8 mr-3 transform transition-all hover:scale-110"
                    alt="Olpega Logo">
            </a>
            <div class="flex md:order-2">
                <button type="button" data-modal-target="contact-modal" data-modal-toggle="contact-modal"
                    class="text-white bg-[#88AADD] hover:bg-[#66CCFF] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 transform transition-all hover:scale-110">Contacto</button>

                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-white rounded-lg md:hidden hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-gray-200"
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
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent">
                    <li>
                        <a href="/WebPage/index.php"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#66CCFF] md:p-0 transform transition-all hover:scale-110">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="/WebPage/templates/services.php"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#66CCFF] md:p-0 transform transition-all hover:scale-110">
                            Servicios
                        </a>
                    </li>
                    <li>
                        <a href="/WebPage/templates/valueadded.php"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#66CCFF] md:p-0 transform transition-all hover:scale-110">
                            Valor
                            agregado
                        </a>
                    </li>
                    <li>
                        <a href="/WebPage/templates/clients.php"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#66CCFF] md:p-0 transform transition-all hover:scale-110">
                            Clientes
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>






    <!-- Termina el navbar -->
    <!-- Empieza el Modal -->

    <!-- Modal toggle -->


    <!-- Main modal -->
    <div id="contact-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="contact-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd">
                        </path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <form class="space-y-6" action="#">
                        <!-- Nombre -->
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                                nombre
                            </label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Nombre" required>
                        </div>
                        <!-- Correo -->
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                                correo electrónico
                            </label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="ejemplo@dominio.com" required>
                        </div>
                        <!-- Numero -->
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                                teléfono
                            </label>
                            <input type="tel" name="phone" id="phone" pattern="[0-9]{10}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="2222222222" required>
                        </div>
                        <!-- Asunto -->
                        <div>
                            <label for="subject"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asunto
                            </label>
                            <input type="text" name="subject" id="subject"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Asunto" required>
                        </div>
                        <!-- Mensaje -->
                        <div>
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mensaje</label>
                            <textarea name="message" id="message" minlength="10"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Escribe tu mensaje aquí" required>
                            </textarea>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar
                            correo
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Termina el Modal -->