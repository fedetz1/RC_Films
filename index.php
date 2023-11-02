<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina MONJOOOO</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./nav.css">
</head>
<body>
        <div class="video-container">
            <video autoplay muted loop id="background-video">
                <source src="./fondo2.mp4" type="video/mp4">
                Tu navegador no admite el elemento de video.
            </video>
        </div>
    <header>
        <?php 
        include "./nav.html"
        ?>
    </header>
    <main>
        <div class="container">
            <div class="contenedor-fotos">
                <div class="fotos foto foto1">
                    <p>Fotos</p>
                    <div class="imagen" alt=""></div>
                </div>
                <div class="videos foto foto2">
                    <p>Videos</p>
                    <div class="imagen" alt=""></div>
                </div>
                <div class="afiliados foto foto3">
                    <p>Afiliados</p>
                    <div class="imagen" alt=""></div>
                </div>
                <div class="merchandising foto foto5">
                    <p>Merchandising</p>
                    <div class="imagen" alt=""></div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>

    <script src="script.js"></script>
</body>
</html>