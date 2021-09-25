<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web completa</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/Logo_Bandai.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="#" id="enlace-equipo" class="btn-header">Equipo</a>
                    <a href="#" id="enlace-servicio" class="btn-header">Servicios</a>
                    <a href="#" id="enlace-trabajo" class="btn-header">Trabajos</a>
                    <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                    <a href="#" id="enlace-compañia" class="btn-header">Compañia</a>
                    
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Bandai Namco</h1>
            <h2>Empresa de entretenimieto</h2>
        </div>
    </header>
    <main>
        <section class="team contenedor" id="equipo">
            <h3>Miembros Del Equipo</h3>
            <p class="after">Conoce a las personas que logran que este sueño se cumpla cada dia</p>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/people1.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Hair Alejandro</h4>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/people2.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Felix Narro</h4>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/people3.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Silvie</h4>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about" id="servicio">
            <div class="contenedor">
                <h3>Nuestros servicios</h3>
                <p class="after">Siempre innovando sin fin</p>
                <div class="servicios">
                    <div class="caja-servicios">
                        <img src="img/heart.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/responsive.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/efectos.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="work contenedor" id="trabajo">
            <h3>Nuestra Empresa</h3>
            <p class="after">Logramos llevar el mundo del gaming a un nivel desconocido</p>
            <div class="botones-work">
                <ul>
                    <li class="filter active" data-nombre='todos'>Todos</li>
                    <li class="filter" data-nombre='tendencias'>Tendencias</li>
                    <li class="filter" data-nombre='juegos'>Juegos</li>
                    <li class="filter" data-nombre='noticias'>Noticias</li>
                </ul>
            </div>
            <div class="galeria-work">
                <div class="cont-work juegos">
                    <div class="img-work">
                        <img src="img/Juego1_scarlet-nexus.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Juegos</h4>
                    </div>
                </div>
                <div class="cont-work juegos">
                    <div class="img-work">
                        <img src="img/Juego2_Dark_ souls_3.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Juegos</h4>
                    </div>
                </div>
                <div class="cont-work juegos">
                    <div class="img-work">
                        <img src="img/Juego3_DBFiterz_Z.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Juegos</h4>
                    </div>
                </div>
                <div class="cont-work tendencias">
                    <div class="img-work">
                        <img src="img/Juego6_Little_Nightmares_2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Tendencias</h4>
                    </div>
                </div>
                <div class="cont-work tendencias">
                    <div class="img-work">
                        <img src="img/Juego5_Dark_Souls_Remastered.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Tendencias</h4>
                    </div>
                </div>
                <div class="cont-work tendencias">
                    <div class="img-work">
                        <img src="img/Juego4_DB_Legends.png" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Tendencias</h4>
                    </div>
                </div>
                <div class="cont-work noticias">
                    <div class="img-work">
                        <img src="img/marketing1.jpeg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Noticias</h4>
                    </div>
                </div>
                <div class="cont-work noticias">
                    <div class="img-work">
                        <img src="img/marketing2.jpeg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Noticias</h4>
                    </div>
                </div>
                <div class="cont-work noticias">
                    <div class="img-work">
                        <img src="img/marketing3.jpeg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Noticias</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
                <img src="img/Logo_Bandai.png" alt="">
            </div>
            <div class="iconos">
                <i class="fab fa-youtube"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-github"></i>
            </div>
            <p>La pasión e innovación es lo que nos distingue del resto</p>
        </div>

    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>