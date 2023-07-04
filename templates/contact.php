<?php 
    $routes = [
        '/sitio/Paguina/WebPage/templates/about.php' => 'Acerca de Nosotros',
        '/sitio/Paguina/WebPage/templates/clients.php' => 'Nuestros Clientes',
        '/sitio/Paguina/WebPage/templates/services.php' => 'Nuestros Servicios',
        '/sitio/Paguina/WebPage/templates/valueadded.php' => 'Valor Agregado',
        '/sitio/Paguina/WebPage/templates/contact.php' => 'Contacto',
    ];

    $descriptions = [
        '/sitio/Paguina/WebPage/templates/about.php' => 'Descripción para Acerca de Nosotros',
        '/sitio/Paguina/WebPage/templates/clients.php' => 'Descripción para Nuestros Clientes',
        '/sitio/Paguina/WebPage/templates/services.php' => 'Descripción para Nuestros Servicios',
        '/sitio/Paguina/WebPage/templates/valueadded.php' => 'Descripción para Valor Agregado',
        '/sitio/Paguina/WebPage/templates/contact.php' => 'Descripción para Contacto',
    ];

    $current_route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (array_key_exists($current_route, $routes)) {
        $title = $routes[$current_route];
        $description = $descriptions[$current_route];
    }

    include 'header.php'; 
?>

<!-- Matriz -->
<section class="text-gray-600 body-font bg-gray-100">
    <div class="container px-2 md:px-1 py-24 mx-auto">
        <h1 class="text-3xl font-medium text-center title-font mb-24 text-gray-900">Contáctanos
        </h1>
        <div class="md:grid md:grid-cols-2 md:gap-8">
            <div class="w-full h-[500px] shadow-lg mb-10">

                <div class="bg-gray-300 rounded-lg overflow-hidden p-10 relative h-full">
                    <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                        marginheight="0" marginwidth="0" scrolling="no"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1258.5736496686736!2d-100.28805627047292!3d25.773403855641668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866293616f1ae0d7%3A0xd5283dbadfe3ce0d!2sDistribuidora%20Olpega!5e0!3m2!1ses-419!2smx!4v1687972751291!5m2!1ses-419!2smx">
                    </iframe>
                </div>
            </div>
            <div class="py-8 ">
                <h1 class="text-3xl font-medium title-font mb-2 text-gray-900">Sucursal Matriz Nuevo León
                </h1>
                <div class="mb-5">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/map.svg"
                        class="text-blue-500 w-6 h-6 font-medium inline-block mr-2" alt="">
                    <p class="leading-relaxed text-base break-words inline-block">Lic. José López Portillo 610, Joyas de
                        Anahuac, 66054 Cd Gral Escobedo, N.L.
                    </p>
                </div>
                <div class="mb-5">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/mail.svg"
                        class="text-blue-500 w-6 h-6 font-medium inline-block mr-2" alt="">
                    <p class="leading-relaxed text-base inline-block">olpega.monterrey@olpega.net
                    </p>
                </div>
                <div class="mb-5">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/call.svg"
                        class="text-blue-500 w-6 h-6 font-medium inline-block mr-2" alt="">
                    <p class="leading-relaxed text-base inline-block">(222) 2222222
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Saltillo -->
<section class="text-gray-600 body-font">
    <div class="container flex flex-wrap px-2 md:px-1 py-24 mx-auto items-center">

        <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Sucursal Saltillo
            </h1>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/map.svg" class="text-blue-500 w-6 h-6 font-medium"
                        alt="">
                </div>
                <p class="leading-relaxed text-sm sm:text-base ml-4 break-words">Lib. Óscar Flores Tapia 1025, Sin
                    Nombre de Col 18, 25350 Saltillo, Coah.
                </p>
            </div>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/mail.svg"
                        class="text-blue-500 w-6 h-6 font-medium" alt="">
                </div>
                <p class="leading-relaxed text-base ml-4">olpega.saltillo@olpega.net
                </p>
            </div>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/call.svg"
                        class="text-blue-500 w-6 h-6 font-medium" alt="">
                </div>
                <p class="leading-relaxed text-base ml-4">(222) 2222222
                </p>
            </div>
        </div>
        <div class="flex flex-col w-full md:w-1/2 h-[400px] shadow-lg">
            <div
                class="bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative h-full">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                    marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1919.5477499019573!2d-100.90483311325866!3d25.472748848537556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86881355ce683e99%3A0x9ad7f4c9e57956e0!2sOlpega!5e0!3m2!1ses-419!2smx!4v1687973127902!5m2!1ses-419!2smx"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Puebla -->
<section class="text-gray-600 body-font bg-gray-100">
    <div class="container flex flex-wrap px-2 md:px-1 py-24 mx-auto items-center">

        <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Sucursal Puebla
            </h1>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/map.svg" class="text-blue-500 w-6 h-6 font-medium"
                        alt="">
                </div>
                <p class="leading-relaxed text-sm sm:text-base ml-4 break-words">Acajete-Teziutlán 196, 75016 San José
                    Chiapa, Pue.
                </p>
            </div>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/mail.svg"
                        class="text-blue-500 w-6 h-6 font-medium" alt="">
                </div>
                <p class="leading-relaxed text-base ml-4">olpega.puebla@olpega.net
                </p>
            </div>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/call.svg"
                        class="text-blue-500 w-6 h-6 font-medium" alt="">
                </div>
                <p class="leading-relaxed text-base ml-4">(222) 2222222
                </p>
            </div>
        </div>
        <div class="flex flex-col w-full md:w-1/2 h-[400px] shadow-lg">
            <div
                class="bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative h-full">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                    marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d985.2549088495151!2d-97.75278006836886!3d19.25006153166765!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c557a6c43c55f3%3A0xe47016a4b83b62ba!2sDistribuidora%20Olpega%20de%20Puebla%20S.A%20de%20C.V!5e0!3m2!1ses-419!2smx!4v1687963833078!5m2!1ses-419!2smx"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mexico -->
<!-- <section class="text-gray-600 body-font">
    <div class="container flex flex-wrap px-2 md:px-1 py-24 mx-auto items-center">

        <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Sucursal Mexico
            </h1>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/map.svg" class="text-blue-500 w-6 h-6 font-medium"
                        alt="">
                </div>
                <p class="leading-relaxed text-sm sm:text-base ml-4 break-words">Carr. Teoloyucan Zumpango km4.5 Barrio
                    San Juan Teoloyucan C.P.54784
                </p>
            </div>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/mail.svg"
                        class="text-blue-500 w-6 h-6 font-medium" alt="">
                </div>
                <p class="leading-relaxed text-base ml-4">olpega.mexico@olpega.net
                </p>
            </div>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/call.svg"
                        class="text-blue-500 w-6 h-6 font-medium" alt="">
                </div>
                <p class="leading-relaxed text-base ml-4">(222) 2222222
                </p>
            </div>
        </div>
        <div class="flex flex-col w-full md:w-1/2 h-[400px] shadow-lg">
            <div
                class="bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative h-full">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                    marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d985.2549088495151!2d-97.75278006836886!3d19.25006153166765!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c557a6c43c55f3%3A0xe47016a4b83b62ba!2sDistribuidora%20Olpega%20de%20Puebla%20S.A%20de%20C.V!5e0!3m2!1ses-419!2smx!4v1687963833078!5m2!1ses-419!2smx"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Chiapas -->
<section class="text-gray-600 body-font bg-white">
    <div class="container flex flex-wrap px-2 md:px-1 py-24 mx-auto items-center">

        <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Sucursal Chiapas
            </h1>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/map.svg" class="text-blue-500 w-6 h-6 font-medium"
                        alt="">
                </div>
                <p class="leading-relaxed text-sm sm:text-base ml-4 break-words">Carretera Ejido la Libertad, No. Ext.
                    S/N, No. Int. S/N, Suchiate 90, C.P. 30840,Suchiate Ciudad Hidalgo, Chiapas.
                </p>
            </div>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/mail.svg"
                        class="text-blue-500 w-6 h-6 font-medium" alt="">
                </div>
                <p class="leading-relaxed text-base ml-4">olpega.chiapas@olpega.net
                </p>
            </div>
            <div class="flex items-center mb-5">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-blue-500">
                    <img src="/sitio/Paguina/WebPage/assets/img/icons/call.svg"
                        class="text-blue-500 w-6 h-6 font-medium" alt="">
                </div>
                <p class="leading-relaxed text-base ml-4">(222) 2222222
                </p>
            </div>
        </div>
        <div class="flex flex-col w-full md:w-1/2 h-[400px] shadow-lg">
            <div
                class="bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative h-full">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                    marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.6952593930196!2d-92.16349802407282!3d14.673227775292771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858e15cc0e9930d1%3A0xebb69190a0a7b413!2sDistribuidora%20Olpega%20de%20Chiapas%20S.A%20de%20C.V!5e0!3m2!1ses-419!2smx!4v1688493701813!5m2!1ses-419!2smx"
                    ></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                </div>
            </div>
        </div>
    </div>
</section>










<?php include 'footer.php'; ?>
