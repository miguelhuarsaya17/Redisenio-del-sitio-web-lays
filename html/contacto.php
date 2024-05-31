<?php  
    $titulo = "Preguntas Frecuentes";
    require_once("../components/header.php");
?>
    <main>
        <section class="container" id="seccion1-contacto">
            <div class="row">
                <article class="col-sm-12 col-md-5 col-lg-5" id="lista-redes">
                    <h2>Visitenos en</h2>
                    <ul id="lista-icono-redes" class="row">
                        <li class="col-sm-6 col-md-6 col-lg-3"><a href="https://www.instagram.com/lays/?hl=es" target="_blank"><img src="../img/instagram.png" alt="instagram-icono" width="70" height="70"></a></li>
                        <li class="col-sm-6 col-md-6 col-lg-3"><a href="https://www.youtube.com/user/Lays" target="_blank"><img src="../img/youtube.png" alt="youtube-icono" width="70" height="70"></a></li>
                        <li class="col-sm-6 col-md-6 col-lg-3"><a href="https://www.facebook.com/laysargentina/" target="_blank"><img src="../img/facebook.png" alt="facebook-icono" width="70" height="70"></a></li>
                        <li class="col-sm-6 col-md-6 col-lg-3"><a href="https://twitter.com/LAYS" target="_blank"><img src="../img/twitter.png" alt="twitter-icono" width="70" height="70" id="twitter-icono"></a></li>
                    </ul>
                </article>
            </div>
        </section>

        <section class="container-fluid" id="seccion2-contacto">
            <h2>Preguntas Frecuentes</h2>
            <div class="row">
                <article class="col-sm-12 col-md-6 col-lg-6">
                    <h3>¿Qué es Lay's?</h3>
                    <p>Lay's es una marca de chips y snacks propiedad de PepsiCo.</p>
                </article>
                <article class="col-sm-12 col-md-6 col-lg-6">
                    <h3>¿Dónde se fabrican los productos Lay's?</h3>
                    <p>Los productos Lay's se fabrican en diversas plantas alrededor del mundo.</p>
                </article>
                <article class="col-sm-12 col-md-6 col-lg-6">
                    <h3>¿Cuándo se fundó Lay's?</h3>
                    <p>Lay's fue fundada en 1932 por Herman W. Lay en Nashville, Tennessee.</p>
                </article>
                <article class="col-sm-12 col-md-6 col-lg-6">
                    <h3>¿Qué tipos de chips y snacks produce Lay's?</h3>
                    <p>Lay's ofrece una amplia gama de chips y snacks, incluyendo papas fritas, tortillas, aperitivos horneados y más.</p>
                </article>
                <article class="col-sm-12 col-md-6 col-lg-6">
                    <h3>¿Cuáles son los sabores más populares?</h3>
                    <p>Algunos de los sabores más populares incluyen Original, Queso Cheddar, Barbacoa y Limón.</p>
                </article>
                <article class="col-sm-12 col-md-6 col-lg-6">
                    <h3>¿Lay's ofrece opciones de snacks saludables?</h3>
                    <p>Lay's ofrece opciones de snacks bajos en grasa y reducidos en sodio bajo la marca "Lay's Light".</p>
                </article>
            </div>
        </section>

        <section class="container" id="seccion3-contacto">
            <h2>Informacion de Contacto</h2>
            <div class="row">
                <article class="col-sm-12 col-md-4 col-lg-4">
                    <img src="../img/correo.png" alt="correo" width="80" height="80">
                    <h3 class="contacto-icono">layscontacto@gmail.com</h3>
                </article>
                <article class="col-sm-12 col-md-4 col-lg-4">
                    <img src="../img/horario.png" alt="reloj" width="80" height="80">
                    <h3 class="contacto-icono">Lunes a viernes 9-17:00</h3>
                </article>
                <article class="col-sm-12 col-md-4 col-lg-4">
                    <img src="../img/telefono.png" alt="telefono" width="80" height="80">
                    <h3 class="contacto-icono">+1 (555) 123-4567</h3>
                </article>
            </div>
        </section>
    </main>
    <?php
require_once "../components/footer.php";
?>