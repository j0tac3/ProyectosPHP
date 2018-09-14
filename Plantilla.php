<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Example</title><!--Titulo de mi web-->
         <meta charset="utf-8" />
         <link rel="stylesheet" type="text/css" href="css/style.css">
         <meta name="author" content="Sandra Valencia">
    </head>
    <body>
        <header><!--Cabecera principal de mi sitio-->
            <div class="logo">
                <a href="#">
                    Example
                </a>
            </div><!--URL de Mi Logo-->
            <div id="menu-s">
                <nav class="menu"><!--Menu-->
                    <ul class="menu-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">UX</a></li>
                        <li><a href="#">CSS3</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Linux</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--Contenido del sitio-->
        <div class="head-image"><!--Slider-->
            <img src="img/geek.jpg">
        </div>
        <div class="fila">
            <section class="contenido">
                <?php
                $variable = 2;
                ?>
                <article class="art">
                    <h1></h1>
                    <p>
                    	Prueba de PHP
                    </p>
                </article>
                <?php
                echo "<p>Esto es una prueba de PHP</p>";
                echo "Ademas de una prueba \n" . "con cadenas concatenadas\n";
                ?>
            </section>
            <aside class="sidebar">
                <h1>Publicidad</h1>
                <p>
                </p>
            </aside>
        </div>
        <footer class="footer">
            <p>
                Copyright © 2014 Example | Creado y diseñado por <a href="#">Tingsystems</a>
            </p>    
            <?php
                echo "El valor de la variable es '$variable'";
            ?>
        </footer>
    </body>
</html>