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

    <div class="card-body">
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

    <div class="tabs">
        <div class="tab-header">
            <div class="active">
                <i class="fa fa-code"></i>Seccion 1
            </div>
            <div>
                <i class="fa fa-code"></i>Seccion 2
            </div>
            <div>
                <i class="fa fa-code"></i>Seccion 3
            </div>
            <div>
                <i class="fa fa-code"></i>Seccion 4
            </div>
        </div>
        <div class="tab-indicator"></div>
            <div class="tab-body">
            <div class="active">
                <h2>Esta es la seccion 1</h2>
                <p>
                    Esto es el parrafo numero 1
                </p>
            </div>
            <div>
                <h2>Esta es la seccion 2</h2>
                <p>
                    Contenido parrafo 2
                </p>
            </div>
            <div>
                <h2>Esta es la seccion 3</h2>
                <p>
                    Contenido parrafo 3
                </p>
            </div>
            <div>
                <h2>Esta es la seccion 4</h2>
                <p>
                    Contenido parrafo 4
                </p>
            </div>
            </div>
    </div>

    <script type="text/javascript" src="./assets/js/nav.js"></script>
    <script type="text/javascript" src="./assets/js/tab-button.js"></script>

</body>

</html>