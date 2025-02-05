<!DOCTYPE html>
<html lang="es">
<head>
    <link href="images/iconos/icono.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/news.css">
    <link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
    <title>Boletín Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .boletin {
            font-family: serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .boletin-container {
            max-width: 800px;
            background: white;
            padding: 20px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .boletin h1 {
            text-align: center;
            border-bottom: 2px solid black;
            padding-bottom: 10px;
        }
        .boletin .section {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        .boletin .section h2 {
            font-size: 1.3em;
        }
        .boletin .text {
            flex: 1;
            padding: 10px;
        }
        .boletin .image {
            flex: 1;
        }
        .boletin .image img {
            width: 100%;
            height: auto;
            display: block;
        }
        .boletin .bold {
            font-weight: bold;
        }
        .boletin .footer {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 2px solid black;
        }
        .boletin .footer::before {
            content: "";
            display: inline-block;
            width: 50px;
            height: 2px;
            background: black;
            margin-right: 10px;
        }
        .reverse {
            flex-direction: row-reverse;
        }
    </style>
</head>
<body>

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
        <div class="boletin">
            <div class="boletin-container">
                <h1>Boletín Informativo</h1>
                
                <div class="section">
                    <div class="text">
                        <h2>Descubierto un fármaco que lo podría <span class="bold">cambiar todo</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                    <div class="image">
                        <img src="./boletin_op1/microscopio.jpg" alt="Microscopio">
                    </div>
                </div>

                <div class="section reverse">
                    <div class="text">
                        <h2>Encuentran <span class="bold">una bacteria</span> en la Antártida nunca vista antes</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                    <div class="image">
                        <img src="./boletin_op1/antartida.jpg" alt="Antártida">
                    </div>
                </div>

                <div class="section">
                    <h2>EL MISMO CICLÓN DEL AÑO PASADO VUELVE A AZOTAR CON FUERZA</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </div>

                <div class="footer">
                    <p>BORCELLE</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
	    <?php
		    require 'footer.php';
	    ?>
    </div>
</body>
</html>
