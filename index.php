<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Base</title>
</head>
<body>
    <!-- Comienza el navbar -->
    <header class="header">
        <div class="logo">
            <img src="./assets/img/logo.png" alt="Logo olpega">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Quiénes somos</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Valor agregado</a></li>
                <li><a href="#">Clientes</a></li>
            </ul>
        </nav>
        <a href="" class="btn"><button>Contacto</button></a>
        <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

        <div class="overlay" id="mobile-menu">
            <a onclick="closeNav" href="" class="close">&times;</a>
            <div class="overlay-content">
                <a href="#">Inicio</a>
                <a href="#">Quiénes somos</a>
                <a href="#">Servicios</a>
                <a href="#">Valor agregado</a>
                <a href="#">Clientes</a>
                <a href="#">Contacto</a>
                
            </div>
        </div>

    </header>
    <!-- Termina el navbar -->


    <!-- Empieza body -->
    <div class="texto">
        <div class="titulo">
            <h2>SERVICIO DE LOGISTICA Y TRANSPORTE DE ALTO RENDIMIENTO</h2>
        </div>
        <div class="parrafo contenedor">
            <p>
                Bienvenido a Olpega Inc. Somos un líder en el campo de los servicios de transporte y logística con más de 25 años de experiencia, proporcionando soluciones personalizadas y seguras para cada cliente y cada industria.    
            </p>
            <img class="img-map" src="./assets/img/dummies/servicio-nacional.png" alt="Mapa Mexico">
        </div>
    </div>
    
    <!-- Empieza el tab-button -->
    <div class="container">
        <div class="tabs">
            <div class="tab-header">
                <div class="active">
                    <span class="material-symbols-outlined">view_timeline</span>
                    <i class="fa fa-code text-general">MISIÓN</i>
                </div>
                <div>
                    <span class="material-symbols-outlined">group</span>
                    <i class="fa fa-code text-general">VISIÓN</i>
                </div>
                <div>
                    <span class="material-symbols-outlined">diversity_3</span>
                    <i class="fa fa-code text-general">NUESTROS VALORES</i>
                </div>
            </div>
            <div class="tab-indicator"></div>
                <div class="tab-body">
                <div class="active">
                    <p class="text-general text-center">
                        “Ofrecer servicio de transporte de carga para la industria 
                        alimenticia y automotriz; en todo el territorio nacional e 
                        internacional, cumpliendo estrictos estándares de calidad y 
                        atención personalizada, para satisfacer las necesidades de 
                        nuestros clientes, colaboradores y de la sociedad que está en 
                        contacto con nuestras operaciones, mediante procesos estandarizados, 
                        personal competente, trabajo en equipo y la mejora continua de la 
                        efectividad de nuestro Sistema de Calidad y Seguridad”.
                    </p>
                </div>
                <div>
                    <p class="text-general text-center">
                        “Ser el principal proveedor de servicio de transportación y distribución 
                        internacional de carga para la industria alimenticia y automotriz; una 
                        organización que se distinga ante la comunidad y sus clientes por su prestigio, 
                        calidad, seguridad y capacidad de respuesta, con un crecimiento sostenido y 
                        una alta rentabilidad; respaldada con colaboradores motivados, competentes y 
                        altamente comprometidos; operando tecnología avanzada y estándares internacionales”.
                    </p>
                </div>
                <div>
                    <p class="text-general text-center">
                        Nuestra empresa se basa en valores fundamentales. Actuamos con honestidad y transparencia, 
                        generando confianza en nuestros clientes. Respetamos y cumplimos las exigencias de 
                        nuestros clientes, brindando atención oportuna y transparente. Somos responsables y 
                        eficientes en cada requerimiento, demostrando confiabilidad. Estamos comprometidos en 
                        satisfacer las necesidades de nuestros clientes con entregas oportunas. Mantenemos la 
                        integridad al informar cualquier situación de riesgo. Trabajamos en equipo para cumplir 
                        eficientemente con los requerimientos de nuestros clientes.
                    </p>
                </div>
                </div>
        </div>
    </div>
    <!-- Termina el tab-button -->

    <div class="texto">
        <div class="titulo">
            <h2>SERVICIO DE LOGISTICA Y TRANSPORTE DE ALTO RENDIMIENTO</h2>
        </div>
        <div class="parrafo contenedor">
            <p>
                Bienvenido a Olpega Inc. Somos un líder en el campo de los servicios de transporte y logística con más de 25 años de experiencia, proporcionando soluciones personalizadas y seguras para cada cliente y cada industria.    
            </p>
            <img class="img-map" src="./assets/img/dummies/servicio-nacional.png" alt="Mapa Mexico">
        </div>
    </div>
    
    <script type="text/javascript" src="./assets/js/nav.js"></script>
    <script type="text/javascript" src="./assets/js/tab-button.js"></script>

</body>

</html>
