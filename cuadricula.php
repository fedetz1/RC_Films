<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./cuadricula.css">
    <link rel="stylesheet" href="./nav.css">
</head>
<body>
            <video autoplay muted loop id="background-video">
                <source src="./afiliadito.mp4" type="video/mp4">
                Tu navegador no admite el elemento de video.
            </video>
    <header>
        <?php 
        include "./nav.html"
        ?>
    </header>
    <main>
        <div class="cuadricula-fotos">
            <div class="contenedor-cuadricula">
                <div class="foto-cuadricula foto1-cuadricula" alt=""></div>
                <div class="foto-cuadricula foto2-cuadricula" alt=""></div>
                <div class="foto-cuadricula foto3-cuadricula" alt=""></div>
                <div class="foto-cuadricula foto4-cuadricula" alt=""></div>
                <div class="foto-cuadricula foto5-cuadricula" alt=""></div>
                <div class="foto-cuadricula foto6-cuadricula" alt=""></div>
                <div class="foto-cuadricula foto7-cuadricula" alt=""></div>
                <div class="foto-cuadricula foto8-cuadricula" alt=""></div>
            </div>
        </div>
    </main>
    <script src="./cuadricula.js"></script>
</body>
</html>