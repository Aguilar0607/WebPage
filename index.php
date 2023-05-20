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
        <h3>¿QUIÉNES SOMOS?</h3>
    </div>
    <div>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas ratione quis consequuntur sunt. 
            Quod fuga iure eligendi maxime, iste incidunt vitae reprehenderit 
            nulla mollitia, explicabo amet repudiandae aperiam voluptas earum!
        </p>
    </div>

    <script type="text/javascript" src="./assets/js/nav.js"></script>
</body>

</html>