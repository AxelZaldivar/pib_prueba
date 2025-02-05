<!DOCTYPE html>
<html lang="en">
<head>
    <link href="images/iconos/icono.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/news.css">
    <link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
    <title>Boletín Digital</title>
</head>

<body>
    <style>
        .principal {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f0f0f0;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .boletin {
            position: relative;
            width: 500px;
            height: 600px;
            perspective: 1200px;
        }

        .page {
            position: absolute;
            width: 100%;
            height: 100%;
            background: white;
            border: 2px solid #ccc;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.8s;
            transform-origin: right center;
            backface-visibility: hidden;
            overflow: hidden;
        }

        .page img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ajusta la imagen sin distorsionarla */
        }

        /* Ajuste del orden inicial */
        .page:nth-child(1) { z-index: 4; }
        .page:nth-child(2) { z-index: 3; }
        .page:nth-child(3) { z-index: 2; }
        .page:nth-child(4) { z-index: 1; }

        .page.flipped {
            transform: rotateY(-180deg);
        }

        .controls {
            position: relative;
            width: 300px;
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            z-index: 20;
        }

        .principal button {
            background: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
        }

        .principal button:disabled {
            background: #aaa;
            cursor: not-allowed;
        }
    </style>

    <div class="super_container">

        <!-- Header -->
        <?php
            require('header.php');
        ?>

        <!-- Home -->
        <div class="home">
        <input id="input_vista" type="hidden" value="0">
            <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/predicaciones/caratula.png" data-speed="0.8"></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content text-center">
                                <div class="home_title" style="text-shadow: 5px 5px 10px rgba(0,0,0,0.5);">Boletín digital</div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="./" style="text-shadow: 5px 5px 10px rgba(0,0,0,0.5);">Inicio</a></li>
                                        <li style="text-shadow: 5px 5px 10px rgba(0,0,0,0.5);">Boletín digital</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="principal">
            <div class="boletin">
                <div class="page"><img src="./boletin_op2/IMG-20250106-WA0017.jpg" alt="Página 1"></div>
                <div class="page"><img src="imagen2.jpg" alt="Página 2"></div>
                <div class="page"><img src="imagen3.jpg" alt="Página 3"></div>
                <div class="page"><img src="imagen4.jpg" alt="Página 4"></div>
            </div>

            <div class="controls">
                <button id="prev">←</button>
                <button id="next">→</button>
            </div>
        </div>

        <!-- Footer -->
	    <?php
		    require 'footer.php';
	    ?>
    </div>

    <script src="./boletin_op2/script.js"></script> <!-- Enlazamos el archivo de scripts -->
    <script type="text/javascript" src="scripts/predic.js?v=<?php echo(rand()); ?>"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/news.js"></script>

</body>
</html>
