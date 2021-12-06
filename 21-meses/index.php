<?php
    $meta = [
        'title' => '¡Felices 21 meses!',
        'description' => 'Celebración de nuestros 21 meses. 🐥 Diter y Gianella 🐥',
        'url' => 'https://diterterrones.com',
        'cover' => '21-meses/img/05.jpg',
        'favicon' => '../img/diter-terrones-favicon-32.png',
        'theme_color' => '#5171fb'
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>Diter Terrones</title>
    <!-- metatags -->
    <link rel="icon" href="<?= $meta['favicon']; ?>" sizes="32x32" type="image/png">
    <link href="https://unpkg.com/ed-grid@3.0.0/src/css/ed-grid.min.css" rel="stylesheet">
    <meta name="theme-color" content="<?= $meta['theme_color']; ?>" />

    <meta name="title" content="<?= $meta['title']; ?>">
    <meta name="description" content="<?= $meta['description']; ?>">

    <meta property="og:title" content="<?= $meta['title']; ?>">
    <meta property="og:description" content="<?= $meta['description']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $meta['url']; ?>">
    <meta property="og:locale" content="es_PE">
    <meta property="og:site_name" content="Diter Terrones">
    <meta property="og:image" content="<?= "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . '21-meses/img/05.jpg'; ?>">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?= $meta['title']; ?>">
    <meta property="twitter:site" content="@diter_terrones">
    <meta property="twitter:description" content="<?= $meta['description']; ?>">
    <meta name="twitter:image" content="<?= "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . $meta['cover']; ?>">
    <!-- metatags -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="s-cross-center s-mb-3 s-center ribbon">
        <h1>¡Felices 21 Meses! Mi Pollita </h1>
        <img src="./img/pollita-2.gif" alt="">
    </div>

    <div class="card-quote">
        <p class="s-mb-0">
            <strong>¡¡¡¡¡ Mi Cushiiiiiiiiiiii !!!!</strong> (<em>Espero que leas esto con mi voz y en tono chillón como lo suelo hacer</em> 🤭). <br>
            Mi Princesa hermosa, hoy se cumplen <strong>21 meses</strong> desde aquel día que nos dimos nuestro primer besito y aceptamos viajar en esta aventura <strong>juntos</strong> 💖.<br>
            Escribo esto con el corazón en la mano pues hemos vivido tantas cositas, nos hemos reído sin cansancio y también llorado, hemos viajado y también nos hemos quedado acurrucados, hemos encontrado muchas diferencias y también muchas coincidencias 😍, nos hemos conocido mucho más y hemos aprendido uno del otro, hemos pasado por momentos personales muy difíciles y aquí seguimos, más fuertes que antes.<br>
            <strong>Agradezco infinitamente que Dios te haya puesto en mi camino</strong>, que hayamos coincidido en este vasto universo lleno de infitas posibilidades, agradezco que me hayas enamorado con tu sonrisita y tu inacabable ternura.
            Gracias! Gracias! Gracias! Por comprenderme a pesar de mis locuras, a pesar de mis errores, a pesar de las cosas que tengo que mejorar. Gracias por estar a mi lado cada segundo de estos 21 meses.<br>
            Gracias por enseñarme a ser más determinado, a tener más humanidad y sensibilidad con los que me rodean, <em>gracias por creer en mí incluso más de lo que yo creo en mí.</em><br>
            <strong>TE QUIERO, TE ADORO</strong> y ese amor que tenemos crece sin medida, crece porque ambos aportamos lo mejor para nosotros.<br>
            Gracias por tantas aventuras y las que aún nos faltan vivir, mi amor 💖<br>
            Me enamoras totalmente, con tu sensibilidad y ternura, con tu amor inmenso, con tu determinación para sacar adelante tus proyectos, con tu increíble fuerza, con lo graciosa que eres, aplicada en sus estudios, responsable y amorosa con su familia.<br>
            Eres extraordinariamente genial! Una mujer maravillosa que es exitosa y feliz por su propia cuenta, <em>recuérdalo siempre, mi vida, me has demostrado que eres suficiente y capaz de lograr lo que te propongas</em>.<br>
            Gracias una vez más por compartirme tu felicidad. ¿Recuerdas que una vez te comenté sobre algo que leí sobre el amor? <em>El amor está asociado a un área del cerebro en la que no se procesa el lenguaje, eso explica por qué a veces no podamos describir lo que sentimos</em> <br>
            Aquí es donde me sucede eso, quiero aterrizar todas las cosas hermosa que siento por ti pero mi cerebrito se queda pequeño 🤭. Lo trataré de resumir en un enorme <strong>¡ TE QUIERO MUCHÍSIMO, GIANELLA ASQUI !</strong>
            Sigamos creciendo y mejorando hasta el cielo, mi amor 🔥 <br>
            Gracias Y <strong>¡Felices 21 Meses Mi Pollita!</strong>
            <br>
            <br>
            <br>
            Aquí te comparto bellos recuerdos, hermosos momentos que pasamos <em>Aunque bien dicen, de los mejores momentos no hubo momento de tomar una foto </em> 🤭Esa es nuestra relación, llena de <strong>mejores momentos</strong>
        </p>
        <img src="./img/pollitos.gif" alt="">
    </div>

    <div class="ed-grid s-grid-1 m-grid-3 rows-gap s-mb-3">
        <div class="card-img">
            <img src="./img/00.png" alt="">
        </div>
        <div class="card-img">
            <img src="./img/01.jpg" alt="">
        </div>
        <div class="card-img">
            <img src="./img/02.jpg" alt="">
        </div>
        <div class="card-img">
            <img src="./img/03.jpg" alt="">
        </div>
        <!-- <div class="card-img">
            <img src="./img/04.jpg" alt="">
        </div> -->
        <div class="card-img">
            <img src="./img/05.jpg" alt="">
        </div>
        <div class="card-img">
            <img src="./img/06.jpg" alt="">
        </div>
    </div>

    <div class="s-cross-center s-mb-3 s-center ribbon">
        <h1>¡Felices 21 Meses! Mi Pollita </h1>
        <img src="./img/pollita-2.gif" alt="">
    </div>

    <div class="ed-grid s-grid-1 m-grid-2 rows-gap">
        <div class="card-img">
            <img src="./img/07.jpg" alt="">
        </div>
        <div class="card-img">
            <img src="./img/08.jpg" alt="">
        </div>
        <div class="card-img">
            <img src="./img/09.jpg" alt="">
        </div>
        <div class="card-img">
            <img src="./img/10.jpg" alt="">
        </div>
        <div class="card-img">
            <img src="./img/11.jpg" alt="">
        </div>
        <div class="card-img">
            <img src="./img/13.jpg" alt="">
        </div>
    </div>
</body>