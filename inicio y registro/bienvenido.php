<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Energy</title>
    <link rel="shortcut icon" href="./images/n.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalizar.css">
    <link rel="stylesheet" href="http://localhost/inicio%20y%20registro/css/esti.css">

    <meta name="theme-color" content="#2091F9">

    <meta name="title" content="Aprende CSS desde cero">
    <meta name="description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">


    <meta property="og:type" content="website">
    <meta property="og:url" content="https://alexcgdesign.github.io">
    <meta property="og:title" content="Aprende CSS desde cero">
    <meta property="og:description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="og:image" content="https://alexcgdesign.github.io/images/css.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.jordanalex.com/">
    <meta property="twitter:title" content="Aprende CSS desde cero">
    <meta property="twitter:description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="twitter:image" content="https://alexcgdesign.github.io/images/css.jpg">
</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title"></h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="#" class="nav__links"></a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links"></a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links"></a>
                </li>




                <div class="menu">

                <div class="socialMedia">
                    <a href="https://www.facebook.com/paul.macias.338">
                        <img src="imagenes/facebook.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/">
                        <img src="imagenes/ig.png" alt="">
                    </a>
                </div>
           




                <img src="./images/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="./imagenes/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Bienvenido a Solar Energy.</h1>
            <p class="hero__paragraph">Datos en tiempo real y herramientas que te permitirán entender mejor la radiación solar en tu área. Ya sea que estés interesado en la energía solar, la salud o simplemente quieras conocer más sobre el sol, nuestra aplicación es tu compañera ideal.</p>
            <a href="http://localhost/inicio%20y%20registro/index.php" class="cta">Comienza ahora</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Qué veras?</h2>
            <p class="about__paragraph">Todo lo necesario y datos relevantes sobre la aplicación, junto con información crucial y valiosa acerca de la radiación.</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./imagenes/objetivo.png" class="about__icon">
                    <h3 class="about__title">Objetivo</h3>
                    <p class="about__paragrah">Disminuir los efectos de la radiación solar mediante un sistema de medición.</p>
                </article>

                <article class="about__icons">
                    <img src="./imagenes/medidor.png" class="about__icon">
                    <h3 class="about__title">Medidor</h3>
                    <p class="about__paragrah">Se implemento un medidor en el cual te mostrara el nivel de radiacion que esta expuest@</p>
                </article>

                <article class="about__icons">
                    <img src="./imagenes/usuario.png" class="about__icon">
                    <h3 class="about__title">Usuario</h3>
                    <p class="about__paragrah">Poder ayudar al usuario y dar consejos sobre la proteccion contra la radiacion solar.</p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">La radiacion solar.</h2>
                    <p class="knowledge__paragraph">
                        La radiación solar es la energía electromagnética emitida por el sol. Esta radiación se clasifica en diferentes longitudes de onda, incluyendo luz visible, infrarrojos y ultravioleta. La medición de la radiación solar es esencial para comprender su impacto en diversos campos como la energía solar, la agricultura y la salud. Nuestra aplicación web proporciona datos precisos sobre la radiación solar en tiempo real, </p>
                    <a href="info.html" class="cta">Más</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="./imagenes/sol.jpg" class="knowledge__img">
                </figure>
            </div>
        </section>

        <section class="price container">
            <h2 class="subtitle">Nosotros</h2>

        <section class="testimony">
            <div class="testimony__container container">
                <img src="./imagenes/2.png" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Paul Macias Mares, <span class="testimony__course">estudiante.</span></h2>
                        <p class="testimony__review">Soy estudiante.........</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Vanessa Rojas Reyes, <span class="testimony__course">estudiante.</span></h2>
                        <p class="testimony__review">Soy estudiante.........</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./imagenes/jaz.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                
                        <img src="" class="testimony__img">
                    </figure>
                </section>

               

                <img src="./imagenes/flecha.png" class="testimony__arrow" id="next">
            </div>
        </section>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>