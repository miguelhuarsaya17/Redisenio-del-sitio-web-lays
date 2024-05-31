<?php  
    $titulo = "Produtos";
    require_once("../components/header.php");
?>

    <main>
    
        <!-- PRODUCTO PRINCIPAL -->
        <section class="container-fluid" id="seccion1-producto">
            <h1>Papas fritas LAY'S® clásicas</h1>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6" id="imagen">
                    <img src="../img/lays-clasica.png" alt="lays-clasica" width="350" height="350">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6" id="contenido">
                    <h2 class="subtitulo">Descripción</h2>
                    <p>Todo empieza con papas de campo, que se cocinan y condimentan a la perfección para que cada LAY'S®
                        tenga una crocantes insuperable y rebose del sabor a papa fresca. Happiness in Every Bite.®</p>
                    <h2>Informacion Nutricional</h2>
                    <table>
                        <tr>
                            <th>Macronutrientes</th>
                            <th>Cantidad (en mg)</th>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>Proteínas</td>
                            <td>1.2</td>
                        </tr>
                        <tr>
                            <td>Grasas totales</td>
                            <td>7.3</td>
                        </tr>
                        <tr>
                            <td>Grasas saturadas</td>
                            <td>0.8</td>
                        </tr>
                    </table>
                    <h2 class="subtitulo" id="sub-ingredientes">Ingredientes</h2>
                    <p>Papas, aceite vegetal (de girasol, maíz o canola) y sal.</p>
                </div>
            </div>
        </section>
        <!-- GALERIA -->
        <section id="seccion2-producto">
            <div class="container">
                <h2>Productos</h2>
                <div class="row">
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/lays-ligth.png" alt="Lay's® Lightly" width="206" height="290">
                        <h3 class="titulo">Lay's® Lightly</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto2.png" alt="Lay's® Baked" width="206" height="290">
                        <h3 class="titulo">Lay's® Baked</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto3.png" alt="Lay's® Limón" width="206" height="290">
                        <h3 class="titulo">Lay's® Limón</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria" id="flaminhot">
                        <img src="../img/producto4.png" alt="Lay's® Flamin" width="206" height="290">
                        <h3 class="titulo">Lay's® Flamin</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto5.png" alt="Lay's® Limon y Chile" width="206" height="290">
                        <h3 class="titulo">Limon y Chile ®</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto6.png" alt="Lay's® Kettle Cooked" width="206" height="290">
                        <h3 class="titulo">Kettle Cooked ®</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria" id="wavy">
                        <img src="../img/producto7.png" alt="Lay's® Wavy Original" width="206" height="290">
                        <h3 class="titulo">Wavy Original ®</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto8.png" alt="Lay's® Cheedar" width="206" height="290">
                        <h3 class="titulo">Lay's® Cheedar</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto9.png" alt="Lay's® Jalapeño" width="206" height="290">
                        <h3 class="titulo">Lay's® Jalapeño</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria" id="sourcream">
                        <img src="../img/producto10.png" alt="Lay's® Sour Cream" width="206" height="290">
                        <h3 class="titulo">Sour Cream ®</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto11.png" alt="Lay's® Barbecue" width="206" height="290">
                        <h3 class="titulo">Lay's® Barbecue</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto12.png" alt="Lay's® Sweet" width="206" height="290">
                        <h3 class="titulo">Lay's® Sweet</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria" id="honeybbq">
                        <img src="../img/producto13.png" alt="Lay's® Honey BBQ" width="206" height="290">
                        <h3 class="titulo">Honey BBQ ®</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto14.png" alt="Lay's® Wavy" width="206" height="290">
                        <h3 class="titulo">Lay's® Wavy</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto15.png" alt="Lay's® Ketchup" width="206" height="290">
                        <h3 class="titulo">Lay's® Ketchup</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3 productos-galeria">
                        <img src="../img/producto16.png" alt="Lay's® Queso" width="206" height="290">
                        <h3 class="titulo">Lay's® Queso</h3>
                    </article>
                </div>
            </div>
        </section>
    </main>
    <?php 
        require_once("../components/footer.php");
    ?>