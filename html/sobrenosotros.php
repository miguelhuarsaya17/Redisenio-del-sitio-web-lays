<?php  
    $titulo = "Sobre Nosotros";
    require_once("../components/header.php");
?>
    <main>
        <section class="container" id="seccion1-aboutme">
            <h1>Sobre nosotros</h1>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <img src="../img/historia.png" alt="inicios de lays" width="350" height="260">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-7" id="texto-aboutme">
                    <p>Lay's es una marca icónica que ha estado deleitando a los amantes de las papas fritas desde su fundación en 1932. Nuestra historia comenzó cuando Herman Warden Lay creó la receta original en Nashville, Tennessee, en los Estados Unidos. Desde entonces, hemos evolucionado y crecido para convertirnos en una de las marcas de snacks más reconocidas a nivel mundial. Nuestra pasión por la calidad y el sabor auténtico nos ha impulsado a lo largo de los años.</p>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="seccion2-aboutme">
            <div class="container">
                <h2>Mision y Valores</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-7" id="texto2-aboutme">
                        <p>En Lay's, nuestra misión es simple pero poderosa: brindar momentos de alegría a través de nuestros deliciosos snacks. Nos esforzamos por ofrecer productos de la más alta calidad, elaborados con ingredientes frescos y auténticos. Nuestros valores fundamentales incluyen la integridad, la innovación y el compromiso con la sostenibilidad. Estos valores nos guían en cada paso que damos.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-5">
                        <img src="../img/misionyvalores.png" alt="señor cultivando papas" width="350" height="260">
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="seccion3-aboutme">
            <h2 class="d-none">Cualidades</h2>
            <div class="row">
                <article class="col-sm-6 col-md-4 col-lg-4">
                    <img src="../img/planeta.png" alt="mundo" width="100" height="100">
                    <h3>Explora el Sabor Global</h3>
                    <p>Sabores que han conquistado el mundo. Desde Norteamérica hasta Asia, nuestras papas Lays son amadas globalmente, llevando un pedacito de sabor a cada rincón del planeta.</p>
                </article>
                <article class="col-sm-6 col-md-4 col-lg-4">
                    <img src="../img/compromiso.png" alt="manos estrechandose" width="100" height="100">
                    <h3>Compromiso Sólido</h3>
                    <p>Compromiso con los agricultores y proveedores. Nos estrechamos las manos con aquellos que comparten nuestro compromiso con la calidad, asegurando ingredientes frescos y deliciosos en cada bolsa.</p>
                </article>
                <article class="col-sm-6 col-md-4 col-lg-4">
                    <img src="../img/recetas.png" alt="libro recetas" width="100" height="100">
                    <h3 id="prueba">Recetas Atemporales</h3>
                    <p>Una tradición que perdura. Con décadas de experiencia, nuestras recetas atemporales reflejan una dedicación constante a la excelencia, manteniendo la calidad en cada crujiente bocado.</p>
                </article>
                <article class="col-sm-6 col-md-4 col-lg-4">
                    <img src="../img/pasion.png" alt="corazon en llamas" width="100" height="100">
                    <h3>Pasión por el Sabor</h3>
                    <p>Pasión en cada chip. Cada bolsa de Lays está impregnada con nuestra pasión por ofrecer sabores auténticos y satisfactorios, creando momentos inolvidables con cada bocado.</p>
                </article>
                <article class="col-sm-6 col-md-4 col-lg-4">
                    <img src="../img/certificado.png" alt="sello de calidad" width="100" height="100">
                    <h3>Calidad Insuperable</h3>
                    <p>Calidad insuperable sellada en cada bolsa. Nuestro compromiso con la artesanía premium asegura que cada papa Lays cumpla con los más altos estándares, brindándote una experiencia inigualable.</p>
                </article>
                <article class="col-sm-6 col-md-4 col-lg-4">
                    <img src="../img/excelencia.png" alt="medalla" width="100" height="100">
                    <h3>Estándar de Excelencia</h3>
                    <p>Elevando el estándar de los aperitivos. Elegir Lays significa optar por un estándar de excelencia, donde cada bolsa es una estrella en el universo de los aperitivos, garantizando un placer extraordinario.</p>
                </article>
            </div>
        </section>
    </main>

    <?php 
        require_once("../components/footer.php");
    ?>