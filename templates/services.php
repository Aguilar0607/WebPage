<?php 
    $routes = [
        '/sitio/Paguina/WebPage/templates/about.php' => 'Acerca de Nosotros',
        '/sitio/Paguina/WebPage/templates/clients.php' => 'Nuestros Clientes',
        '/sitio/Paguina/WebPage/templates/services.php' => 'Nuestros Servicios',
        '/sitio/Paguina/WebPage/templates/valueadded.php' => 'Valor Agregado',
    ];
    

    $current_route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (array_key_exists($current_route, $routes)) {
        $title = $routes[$current_route];
    }

    include 'header.php'; 
?>


<div id="indicators-carousel" class="relative px-4 py-24 mx-auto max-w-7xl" data-carousel="static">
<h2 class=" text-3xl font-extrabold leading-tight text-gray-900 text-center mb-12">SERVICIOS</h2>
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="/sitio/Paguina/WebPage/assets/img/servicios/300custom.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/sitio/Paguina/WebPage/assets/img/servicios/313.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/sitio/Paguina/WebPage/assets/img/servicios/serie.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/sitio/Paguina/WebPage/assets/img/servicios/calle.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/sitio/Paguina/WebPage/assets/img/servicios/300.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <!-- Slider controls -->
<button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        <span class="sr-only">Previous</span>
    </span>
</button>
<button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        <span class="sr-only">Next</span>
    </span>
</button>

</div>


<section class="px-4 py-24 mx-auto max-w-7xl">
    
    <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4">
        <div>
            <a href="#">
                <img src="/sitio/Paguina/WebPage/assets/img/servicios/servicio-dedicado.webp"
                    class="object-cover w-full h-54 mb-5 bg-right rounded" alt="Persona" loading="lazy" />
            </a>
            <h2 class="mb-2 text-lg font-semibold text-gray-900">
                <a href="#" class="text-gray-900 hover:text-purple-700">SERVICIO DEDICADO</a>
            </h2>
            <p class="mb-3 text-sm font-normal text-gray-500">
                Olpega brinda servicio de transporte de oportunidad en todo el territorio nacional, con viajes locales,
                regionales y foráneos, además con OLPEGA INC. rompemos fronteras pues tambien ofreciéndote servicio en
                todo el territorio de los Estados Unidos.
            </p>
        </div>
        <div>
            <a href="#">
                <img src="/sitio/Paguina/WebPage/assets/img/servicios/servicio-nacional.webp"
                    class="object-cover w-full h-54 mb-5 bg-center rounded" alt="Mapa MX" loading="lazy" />
            </a>
            <h2 class="mb-2 text-lg font-semibold text-gray-900">
                <a href="#" class="text-gray-900 hover:text-purple-700">SERVICIO NACIONAL</a>
            </h2>
            <p class="mb-3 text-sm font-normal text-gray-500">
                Olpega brinda servicio de transporte de oportunidad en todo el territorio nacional, con viajes locales,
                regionales y foráneos, estamos comprometidos a ofrecerte el mejor servicio en México garantizando la
                seguridad de su transportación.
            </p>
        </div>
        <div>
            <a href="#">
                <img src="/sitio/Paguina/WebPage/assets/img/servicios/monitoreo.webp"
                    class="object-cover w-full h-54 mb-5 bg-center rounded" alt="Monitoreo" loading="lazy" />
            </a>
            <h2 class="mb-2 text-lg font-semibold text-gray-900">
                <a href="#" class="text-gray-900 hover:text-purple-700">RASTREO SATELITAL</a>
            </h2>
            <p class="mb-3 text-sm font-normal text-gray-500">
                Todas nuestras unidades cuentan con monitoreo satelital las 24 horas del día, los 365 días del año,
                mejorando así la capacidad de gestión y la calidad en el servicio asgurándonos que nuestros operadores
                cumplan con las instrucciones de ruta.
            </p>
        </div>
        <div>
            <a href="#">
                <img src="/sitio/Paguina/WebPage/assets/img/servicios/olpega-inc.webp"
                    class="object-cover w-full h-54 mb-5 bg-center rounded" alt="Mapa USA" loading="lazy" />
            </a>
            <h2 class="mb-2 text-lg font-semibold text-gray-900">
                <a href="#" class="text-gray-900 hover:text-purple-700">OLPEGA INC.</a>
            </h2>
            <p class="mb-3 text-sm font-normal text-gray-500">
                Olpega Inc. es una empresa con presencia en los Estados Unidos, te ofrece los mismos servicios de
                calidad que en México, estamos en constante capacitación para mantener los estándares más altos en la
                transportación y la logística.
            </p>
        </div>
</section>









<?php include 'footer.php'; ?>