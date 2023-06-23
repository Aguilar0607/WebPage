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


<div class="texto">
    <div class="titulo-about">
        <h2>¿Quiénes somos?</h2>
    </div>
    <div class="parrafo-about">
        <p>
            Fundada en 1997, Olpega es una empresa de servicios de transportación de acuerdo a las necesidades específicas de cada cliente, las cuales permiten proponer soluciones de valor y tiempo de acuerdo a las características de cada industria.
        </p>
        <p>
            Fundada en 1997, Olpega es una empresa de servicios de transportación de acuerdo a las necesidades específicas de cada cliente, las cuales permiten proponer soluciones de valor y tiempo de acuerdo a las características de cada industria.
        </p>
        <p>
            Fundada en 1997, Olpega es una empresa de servicios de transportación de acuerdo a las necesidades específicas de cada cliente, las cuales permiten proponer soluciones de valor y tiempo de acuerdo a las características de cada industria.
        </p>
    </div>
</div>



<?php include 'footer.php'; ?>