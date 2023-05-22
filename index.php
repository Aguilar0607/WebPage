<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Base</title>
</head>
<body>
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

    <div class="">
        <h3>Bienvenido a Olpega: Tu socio confiable en soluciones de transporte y logística</h3>
    </div>
    <div>
        <p>
        Con más de 25 años de experiencia en el sector del transporte y logística, 
        Olpega se ha consolidado como un líder en el mercado. Nuestra amplia trayectoria 
        nos ha permitido perfeccionar nuestros servicios y 
        brindar soluciones confiables a nuestros clientes.
        </p>
    </div>

    <div class="container">
        <div class="tabs">
            <div class="tab-header">
                <div class="active">
                    <i class="fa fa-code">MISIÓN</i>
                </div>
                <div>
                    <i class="fa fa-code">VISIÓN</i>
                </div>
                <div>
                    <i class="fa fa-code">NUESTROS VALORES</i>
                </div>
            </div>
            <div class="tab-indicator"></div>
                <div class="tab-body">
                <div class="active">
                    <p>
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
                    <p>
                        “Ser el principal proveedor de servicio de transportación y distribución 
                        internacional de carga para la industria alimenticia y automotriz; una 
                        organización que se distinga ante la comunidad y sus clientes por su prestigio, 
                        calidad, seguridad y capacidad de respuesta, con un crecimiento sostenido y 
                        una alta rentabilidad; respaldada con colaboradores motivados, competentes y 
                        altamente comprometidos; operando tecnología avanzada y estándares internacionales”.
                    </p>
                </div>
                <div>
                    <p>
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


    <div>
        <p>
        Con más de 25 años de experiencia en el sector del transporte y logística, 
        Olpega se ha consolidado como un líder en el mercado. Nuestra amplia trayectoria 
        nos ha permitido perfeccionar nuestros servicios y 
        brindar soluciones confiables a nuestros clientes.
        </p>
    </div>

    <script type="text/javascript" src="./assets/js/nav.js"></script>
    <script type="text/javascript" src="./assets/js/tab-button.js"></script>

</body>

</html>