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

    include 'templates/header.php'; 
?>
<!-- Empieza body -->
<div class="overflow-x-hidden bg-gray-100">
    <div class="relative" style="height: calc(100vh - 60px);">
        <section class="px-4 py-32 mx-auto max-w-7xl absolute inset-0 flex items-center justify-center text-center">
            <div class="w-full mx-auto md:w-11/12 xl:w-8/12">
                <div class="mb-6 text-2xl text-custom-blue md:text-3xl md:leading-normal font-semibold">
                    <span class="text-gray-500 animate-fade animate-delay-200">Bienvenidos a</span> 
                    <h1 class="text-6xl font-rubik text-custom-blue font-extrabold inline-block border-b-4 border-custom-blue animate-fade animate-delay-500" style="color: #3961ad;"> OLPEGA</h1>
                </div>
                <p class="text-lg text-gray-500 mb-8 animate-fade-up animate-delay-[399ms]">Transporte y Logística de Excelencia</p>
                <a href="/sitio/Paguina/WebPage/templates/services.php" class="inline-block bg-custom-blue text-white hover:bg-blue-700 py-2 px-4 rounded-lg animate-fade-up animate-delay-[399ms]" style="background-color: #3961ad;">
                    Explora Nuestros Servicios
                </a>
            </div>
        </section>
    </div>
</div>




<section class="text-gray-600  animate__fadeIn">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <h2
                class="text-gray-900 text-lg title-font font-medium mb-3 text-center animate-fade animate-delay-[400ms]">
                NUESTRAS SUCURSALES</h2>
            <img alt="feature"
                class="animate__fadeIn object-cover object-center h-full w-full animate-fade animate-delay-[400ms] mb-3"
                src="./assets/img/dummies/olpega-sucursales.svg">
        </div>
        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center ">
            <div class="flex flex-col mb-10 lg:items-start items-center animate-fade-right animate-delay-[800ms]">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500 mb-5">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/settings.svg"
                        class="text-blue-500 w-6 h-6 font-medium" alt="">
                </div>
                <div class="flex-grow animate__lightSpeedInRight">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Personalización del servicio</h2>
                    <p class="leading-relaxed text-base">
                        Distribuidora Olpega S.A. de C.V., fundada en 1997, se dedica a
                        proporcionar servicios de transporte personalizados que se adaptan a las necesidades específicas
                        de cada cliente. Su alcance abarca tanto el territorio nacional como internacional, brindando
                        soluciones de valor y tiempo adecuadas a las características de cada industria.
                    </p>
                </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center animate-fade-right animate-delay-[900ms]">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500 mb-5">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/verified_user.svg" class="text-blue-500 w-6 h-6"
                        alt="">
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Calidad y seguridad</h2>
                    <p class="leading-relaxed text-base">
                        Olpega se esfuerza por satisfacer las necesidades de sus
                        clientes, colaboradores y de la sociedad a través de procesos estandarizados, personal
                        competente, trabajo en equipo y la mejora continua de su Sistema de Calidad y Seguridad.
                    </p>
                </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center animate-fade-right animate-delay-[1000ms]">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500 mb-5">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/satelite.svg" class="text-blue-500 w-6 h-6"
                        alt="satelite">
                </div>
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Monitoreo satelital</h2>
                    <p class="leading-relaxed text-base">
                        Con monitoreo satelital las 24 horas del día, los 365 días del
                        año, asegura la gestión eficiente y la calidad en sus servicios de transporte.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray-100 text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Politica de calidad
                <br class="hidden lg:inline-block">
            </h1>
            <p class="mb-8 leading-relaxed">
                La política de calidad de Distribuidora OLPEGA se enfoca en satisfacer los requerimientos del cliente y
                asegurar la calidad de sus servicios. Se compromete a ofrecer eficiencia y eficacia en todas sus
                operaciones, desde la cotización hasta la cobranza. Promueve la mejora continua de sus procesos a través
                de la participación y capacitación de su personal. Además, se adhiere a los reglamentos y leyes
                aplicables al autotransporte de carga federal y otros requisitos pertinentes. Esta política es
                comunicada a todo el personal de la empresa.
            </p>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded w-400 h-300" alt="hero"
                src="./assets/img/politicas/calidad.png-1.webp">
        </div>
    </div>
</section>
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            <div class="p-4 lg:w-1/3 w-full">
                <div
                    class="h-full bg-gray-100  px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative animate-fade-right">
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">MISIÓN</h1>
                    <p class="leading-relaxed mb-3">
                        "Ofrecer servicio de transporte de carga en todo el territorio
                        nacional, cumpliendo estrictos estándares de calidad y atención personalizada, para satisfacer
                        las necesidades de nuestros clientes, colaboradores y de la sociedad que está en contacto con
                        nuestras operaciones, mediante procesos estandarizados, personal competente, trabajo en equipo y
                        la mejora continua de nuestro Sistema de Calidad y Seguridad".
                    </p>
                    <p class="text-custom-blue inline-flex items-center">GR-01-01-01

                    </p>
                </div>
            </div>
            <div class="p-4 lg:w-1/3 w-full">
                <div class="h-full bg-gray-100 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">VISIÓN</h1>
                    <p class="leading-relaxed mb-3">
                        "Ser el principal proveedor de servicio de transportación y distribución internacional de carga
                        para la industria alimenticia y automotriz; una organización que se distinga ante la comunidad y
                        sus clientes por su prestigio, calidad, seguridad y capacidad de respuesta, con un crecimiento
                        sostenido y una alta rentabilidad; respaldada con colaboradores motivados, competentes y
                        altamente comprometidos; operando tecnología avanzada y estándares internacionales".
                    </p>
                    <p class="text-custom-blue inline-flex items-center">GR-01-01-02
                    </p>
                </div>
            </div>
            <div class="p-4 lg:w-1/3 w-full">
                <div class="h-full bg-gray-100 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">VALORES</h1>
                    <div class="inline-block text-center mx-auto">
                        <ul class="list-disc list-inside leading-relaxed mb-3">
                            <li class="mb-3">Honestidad. </li>
                            <li class="mb-3">Respeto. </li>
                            <li class="mb-3">Responsabilidad.</li>
                            <li class="mb-3">Compromiso.</li>
                            <li class="mb-3">Integridad.</li>
                            <li class="mb-3">Trabajo en Equipo.</li>
                        </ul>
                        <p class="text-custom-blue block items-center">GR-01-01-03</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Termina body -->
<?php include 'templates/footer.php'; ?>