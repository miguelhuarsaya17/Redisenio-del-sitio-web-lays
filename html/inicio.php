<?php  
    $titulo = "Inicio";
    require_once("../components/header.php");
?>
<main>
        <!-- C A R R U S E L -->
        <section class="container primer-section" id="carrusel">
            <h1 class="d-none">Carrusel</h1>
            <!-- lo oculto porque no quiero usar <h> y asi elimino el error que me da en el validator de que cada section tiene que tener un <h> dentro -->
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/banner1.png" class="d-block w-100" alt="Banner1" width="1140" height="460">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/banner2.png" class="d-block w-100" alt="Banner2" width="1140" height="460">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/banner3.png" class="d-block w-100" alt="Banner3" width="1140" height="460">
                    </div>
                </div>
                <button class="carousel-control-prev d-none d-lg-block" type="button"
                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-lg-block" type="button"
                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- P R O D U C T O S -->
        <section class="container" id="seccion1-home">
            <h1>Productos</h1>
            <div class="row">
                <article class="card col-sm-12 col-md-6 col-lg-4 card-producto">
                    <img src="../img/clasica1.png" class="card-img-top" alt="Lay's® Clasica" width="288" height="288">
                    <div class="card-body" id="clasica">
                        <h2 class="card-title">Clasica</h2>
                        <a href="producto.php#seccion1-producto" class="btn btn-warning ver-mas">Ver mas</a>
                    </div>
                </article>
                <article class="card col-sm-12 col-md-6 col-lg-4 card-producto">
                    <img src="../img/clasica2.png" class="card-img-top" alt="Lay's® Flamin Hot" width="288" height="288">
                    <div class="card-body" id="flaminhot">
                        <h2 class="card-title">Flamin Hot</h2>
                        <a href="producto.php#flaminhot" class="btn btn-warning ver-mas">Ver mas</a>
                    </div>
                </article>
                <article class="card col-sm-12 col-md-6 col-lg-4 card-producto">
                    <img src="../img/clasica3.png" class="card-img-top" alt="Lay's® Wavy Original" width="288" height="288">
                    <div class="card-body" id="wavy">
                        <h2 class="card-title">Wavy</h2>
                        <a href="producto.php#wavy" class="btn btn-warning ver-mas">Ver mas</a>
                    </div>
                </article>
                <article class="card col-sm-12 col-md-6 col-lg-4 card-producto">
                    <img src="../img/clasica4.png" class="card-img-top" alt="Lay's® Sour Cream & Onion" width="288" height="288">
                    <div class="card-body" id="sourcream">
                        <h2 class="card-title">Sour Cream</h2>
                        <a href="producto.php#sourcream" class="btn btn-warning ver-mas">Ver mas</a>
                    </div>
                </article>
                <article class="card col-sm-12 col-md-6 col-lg-4 card-producto">
                    <img src="../img/clasica5.png" class="card-img-top" alt="Lay's® Honey Barbecue" width="288" height="288">
                    <div class="card-body" id="barbecue">
                        <h2 class="card-title">Barbecue</h2>
                        <a href="producto.php#honeybbq" class="btn btn-warning ver-mas">Ver mas</a>
                    </div>
                </article>
                
            </div>
        </section>

        <!-- R E S E Ñ A S -->
        <section class="container-fluid" id="seccion3-home">
            <h2>¡Descubre lo que dicen nuestros clientes satisfechos!</h2>
            <div class="container">
                <div class="row">
                    <article class="col-sm-6 col-md-4 col-lg-3">
                        <p class="texto">"Increíble variedad de sabores. Mis favoritas son las Papas con Sabor a Queso y Chile."</p>
                        <p class="estrellas">⭐️⭐️⭐️⭐️⭐️</p>
                        <h3 class="nombre-usuario">- SnackLover92</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3">
                        <p class="texto">"Siempre tengo un paquete de Papas Clásicas en mi despensa. Son irresistibles"</p>
                        <p class="estrellas">⭐️⭐️⭐️⭐️⭐️</p>
                        <h3 class="nombre-usuario">- CrunchMaster</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3">
                        <p class="texto">"La Edición Limitada de Sabor a Barbacoa es la mejor creación de Lay's. ¡Espero que la hagan permanente!"</p>
                        <p class="estrellas">⭐️⭐️⭐️⭐️⭐️</p>
                        <h3 class="nombre-usuario">- FlavorExplorer</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3">
                        <p class="texto">"Mis niños adoran las Papas con Sabor a Queso y siempre las eligen para sus meriendas."</p>
                        <p class="estrellas">⭐️⭐️⭐️⭐️⭐️</p>
                        <h3 class="nombre-usuario">- MomSnacker</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3">
                        <p class="texto">"La calidad de Lay's nunca baja. Las Papas con Sabor a Limón son mi <em id="cursiva">guilty pleasure</em>."</p>
                        <p class="estrellas">⭐️⭐️⭐️⭐️⭐️</p>
                        <h3 class="nombre-usuario">- CitrusCraver</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3">
                        <p class="texto">"¡Las Papas con Sabor a Jalapeño son un golpe de sabor! Las recomiendo a todos."</p>
                        <p class="estrellas">⭐️⭐️⭐️⭐️⭐️</p>
                        <h3 class="nombre-usuario">- SpicyCruncher</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3">
                        <p class="texto">"Me encanta la atención al cliente de Lay's. ¡Siempre están dispuestos a escuchar a sus fans!"</p>
                        <p class="estrellas">⭐️⭐️⭐️⭐️⭐️</p>
                        <h3 class="nombre-usuario">- HappySnacker</h3>
                    </article>
                    <article class="col-sm-6 col-md-4 col-lg-3">
                        <p class="texto">"Las Papas con Sabor a Barbacoa son la mejor adición a cualquier reunión. ¡Mis amigos siempre las piden!"</p>
                        <p class="estrellas">⭐️⭐️⭐️⭐️⭐️</p>
                        <h3 class="nombre-usuario">- BBQMaster</h3>
                    </article>
                </div>
                <a href="resenias.php#seccion3-resenias" id="link-resenias">¡Comparte tu experiencia con Lay's ahora!</a>
            </div>
        </section>
    </main>
    <?php 
        require_once("../components/footer.php");
    ?>