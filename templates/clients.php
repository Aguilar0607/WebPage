<?php 
    $routes = [
        '/sitio/Paguina/WebPage/templates/about.php' => 'Acerca de Nosotros',
        '/sitio/Paguina/WebPage/templates/clients.php' => 'Nuestros Clientes',
        '/sitio/Paguina/WebPage/templates/services.php' => 'Nuestros Servicios',
        '/sitio/Paguina/WebPage/templates/valueadded.php' => 'Valor Agregado',
    ];

    $descriptions = [
        '/sitio/Paguina/WebPage/templates/about.php' => 'Descripción para Acerca de Nosotros',
        '/sitio/Paguina/WebPage/templates/clients.php' => 'Descripción para Nuestros Clientes',
        '/sitio/Paguina/WebPage/templates/services.php' => 'Descripción para Nuestros Servicios',
        '/sitio/Paguina/WebPage/templates/valueadded.php' => 'Descripción para Valor Agregado',
    ];

    $current_route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (array_key_exists($current_route, $routes)) {
        $title = $routes[$current_route];
        $description = $descriptions[$current_route];
    }

    include 'header.php'; 
?>

<section class="px-4 py-24 mx-auto max-w-7xl">
    <h1 class="mb-3 text-3xl font-bold leading-tight text-center text-gray-900 md:text-4xl">Nuestros Clientes</h1>
    <p class="mb-16 text-lg text-center text-gray-600">
        Contamos con una diversa y creciente base de clientes que confirman la eficacia y calidad de nuestro trabajo.
        Nuestros clientes representan una variedad de sectores y confían en nuestras soluciones para ayudarles a
        alcanzar sus objetivos. Su continua elección de nuestros servicios es la mejor validación de nuestro compromiso
        con la excelencia y la mejora continua.
    </p>
    <div class="grid grid-cols-2 gap-2 text-center lg:grid-cols-4">
        <div class="flex items-center justify-center p-6 bg-opacity-25 bg-primary-light">
            <img src="/sitio/Paguina/WebPage/assets/img/clientes/sanmarcos.webp" alt="San Marcos Logo"
                class="block object-contain h-16" />
        </div>
        <div class="flex items-center justify-center p-6 bg-opacity-25 bg-primary-light">
            <img src="/sitio/Paguina/WebPage/assets/img/clientes/joffroy.webp" alt="Joffroy Logo" class="block object-contain h-16" />
        </div>
        <div class="flex items-center justify-center p-6 bg-opacity-25 bg-primary-light">
            <img src="/sitio/Paguina/WebPage/assets/img/clientes/sb-group.webp" alt="Typeform Logo"
                class="block object-contain h-16" />
        </div>
        <div class="flex items-center justify-center p-6 bg-opacity-25 bg-primary-light">
            <img src="/sitio/Paguina/WebPage/assets/img/clientes/Nemak.webp" alt="Postcss Logo" class="block object-contain h-16" />
        </div>
        <div class="flex items-center justify-center p-6 bg-opacity-25 bg-primary-light">
            <img src="/sitio/Paguina/WebPage/assets/img/clientes/protrans.webp" alt="Yahoo Logo" class="block object-contain h-16" />
        </div>
        <div class="flex items-center justify-center p-6 bg-opacity-25 bg-primary-light">
            <img src="/sitio/Paguina/WebPage/assets/img/clientes/S.webp" alt="Algolia Logo" class="block object-contain h-16" />
        </div>
        <div class="flex items-center justify-center p-6 bg-opacity-25 bg-primary-light">
            <img src="/sitio/Paguina/WebPage/assets/img/clientes/USMotorWorks.webp" alt="Algolia Logo"
                class="block object-contain h-16" />
        </div>
        <div class="flex items-center justify-center p-6 bg-opacity-25 bg-primary-light">
            <img src="/sitio/Paguina/WebPage/assets/img/clientes/Yazaki.webp" alt="Algolia Logo" class="block object-contain h-16" />
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>