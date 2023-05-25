<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/WebPage/assets/css/styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Base</title>
</head>

<body>
    <!-- Comienza el navbar -->
    <header class="header">
        <a class="logo" href="/WebPage/">
            <img src="/WebPage/assets/img/logo.png" alt="Logo olpega">
        </a>
        <nav>
            <ul class="nav-links">
                <li><a href="/WebPage/">Inicio</a></li>
                <li><a href="/WebPage/templates/about.php">Quiénes somos</a></li>
                <li><a href="/WebPage/templates/services.php">Servicios</a></li>
                <li><a href="/WebPage/templates/valueadded.php">Valor agregado</a></li>
                <li><a href="/WebPage/templates/clients.php">Clientes</a></li>
            </ul>
        </nav>
        <a id="contactButtonMobile" class="btn"><button>Contacto</button></a>

        <a onclick="openNav()" class="menu"><button>Menu</button></a>


        <div class="overlay" id="mobile-menu">
            <a onclick="closeNav()" href="" class="close">&times;</a>
            <div class="overlay-content">
                <a href="/WebPage/">Inicio</a>
                <a href="/WebPage/templates/about.php">Quiénes somos</a>
                <a href="/WebPage/templates/services.php">Servicios</a>
                <a href="/WebPage/templates/valueadded.php">Valor agregado</a>
                <a href="/WebPage/templates/clients.php">Clientes</a>
                <a id="contactButton" class="btn"><button>Contacto</button></a>

            </div>
        </div>

    </header>
    <!-- Termina el navbar -->
    <!-- Empieza el Modal -->
    <div id="backdrop"></div>
    <div id="contactModal" class="container-modal fade-in">
        <div class="modal-content">
            <div class="title">
                <p>Contacto</p>
                <a onclick="closeNav()" href="" class="close">&times;</a>
            </div>
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" placeholder="Nombre" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Correo</label>
                        <input type="email" id="email" placeholder="Correo" required>
                    </div>
                    <div class="input-box">
                        <label for="phone">Telefono</label>
                        <input type="tel" id="phone" placeholder="Telefono" pattern="[0-9]{10}" required>
                    </div>
                    <div class="input-box">
                        <label for="subject">Asunto</label>
                        <input type="text" id="subject" placeholder="Asunto" required>
                    </div>
                    <div class="input-box">
                        <label for="message">Mensaje</label>
                        <textarea name="message" id="message"></textarea>
                    </div>
                </div>
                <div class="destino">
                    <span class="correo-destino">Destino</span>
                    <input type="radio" name="destino" id="radio-1">
                    <input type="radio" name="destino" id="radio-2">
                    <input type="radio" name="destino" id="radio-3">
                    <div class="categoria">
                        <label for="radio-1">
                            <span class="dot one"></span>
                            <span>Sistemas</span>
                        </label>
                        <label for="radio-2">
                            <span class="dot two"></span>
                            <span>Recursos Humanos</span>
                        </label>
                        <label for="radio-3">
                            <span class="dot three"></span>
                            <span>Gerente</span>
                        </label>
                    </div>
                </div>
                <div class="enviar">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>




    </div>
    <!-- Termina el Modal -->