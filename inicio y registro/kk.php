<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Modern - MagtimusPro</title>

    <link rel="stylesheet" href="http://localhost/inicio%20y%20registro/estilos.css">
</head>
<body>

    <!-- Menu-->

    <header>
        <div class="container__header">
            <div class="logo">
                <a href="#">
                    <img src="img/n.png" alt="">
                </a>
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </nav>

                <a href="http://localhost/inicio%20y%20registro/index.php" class="btn__quote">Iniciar sesión</a>

                <div class="socialMedia">
                    <a href="https://www.facebook.com/paul.macias.338">
                        <img src="imagenes/facebook.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/">
                        <img src="imagenes/ig.png" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/images/social media/twitter.png" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/images/social media/youtube.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>

        <!--INICIO-->
        <div class="container__cover div__offset">
            <div class="cover">
                <section class="text__cover">
                    <h1>Bienvenido a Solar Energy</h1>
                    <p>A continuación se presentarán datos relevantes sobre la aplicación, junto con información crucial y valiosa acerca de la radiación.</p>
                    <!--<a href="#" class="btn__text-cover btn__text">Empezar</a>-->
                </section>
                <section class="image__cover">
                    <img src="imagenes/logo_blanco.png" alt="">
                </section>
            </div>
        </div>

        
        <div class="container__trust container__card-primary">
            <div class="trust card__primary">
                <div class="text__trust text__card-primary">
                    <p></p>
                    <h1>Acerca de</h1>
                </div>
                <div class="container__trust container__box-cardPrimary">
                    <div class="card__trust box__card-primary">
                        <img src="" alt="">
                        <h2>¿Que es?</h2>
                        <p>Solar Energy es una aplicación web que sirve para medir la radiacion solar con herramientas de mediacion solar.</p>
                    </div>
                    <div class="card__trust box__card-primary">
                        <img src="assets/images/Trust area/archive.png" alt="">
                        <h2>Objetivo</h2>
                        <p>Disminuir los efectos de la radiación solar mediante un sistema de medición</p>
                    </div>
                    <div class="card__trust box__card-primary">
                        <img src="assets/images/Trust area/user.png" alt="">
                        <h2>.</h2>
                        <p>Poder ayudar al usuario y dar consejos sobre la proteccion contra la radiacion solar.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Sobre nosotros-->

        <div class="container__about div__offset">
            <div class="about">
                <div class="text__about">
                    <h1>Nosotros</h1>

                    <section class="testimony">
            <div class="testimony__container container">
                <img src="./imagenes/leftarrow.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Paul Macias Mares, <span class="testimony__course">estudiante.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, asperiores eaque totam nulla repudiandae quasi, deserunt culpa exercitationem
                            blanditiis laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./imagenes/paul.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Vanessa Rojas Reyes, <span class="testimony__course">estudiante.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, asperiores eaque laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione
                            voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./imagenes/jaz.jpg" class="testimony__img">
                    </figure>
                </section>

               

                <img src="./imagenes/rightarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>
                <script src="./js/slider.js"></script>

                    
                </div>
                
                <div class="image__about">
                    <img src="assets/imagenes/About/about-1.png" alt="">
                    <img src="assets/imagenes/About/about-2.png" alt="">
                </div>
            </div>
            
        </div>

    </main>
    
</body>
</html>