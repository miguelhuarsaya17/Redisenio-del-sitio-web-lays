<?php 
    $titulo = "Resultado";
    require_once("../components/header.php");
?>

    <main>
        <section class="container primer-section">
            <?php 
                $usuario;
                $tipo_lays;
                $calificacion;
                $comentario;

                if(isset($_GET["usuario"])){
                    $usuario = $_GET ['usuario'];
                }
                if(isset($_GET["tipo_lays"])){
                    $tipo_lays = $_GET ['tipo_lays'];
                }
                if(isset($_GET["calificacion"])){
                    $calificacion = $_GET ['calificacion'];
                }
                if(isset($_GET["comentario"])){
                    $comentario = $_GET ['comentario'];
                }
            ?>

            <div id="seccion-respuesta">
                <table class="row" border="1px">
                    <caption>Resultados del envio del formulario</caption>
                    <thead class="container">
                        <tr class="row">
                            <th class="col-3">Usuario</th>
                            <th class="col-3">Tipo de Lays</th>
                            <th class="col-3">Calificacion</th>
                            <th class="col-3">Comentario</th>
                        </tr>
                    </thead>
                    <tbody class="container">
                        <tr class="row">
                            <td class="col-3 valores"><?php echo $usuario?></td>
                            <td class="col-3 valores"><?php echo $tipo_lays?></td>
                            <td class="col-3 valores"><?php echo $calificacion?></td>
                            <td class="col-3 valores"><?php echo $comentario?></td>
                        </tr>
                    </tbody>
                    <tfoot class="container">
                        <tr class="row">
                            <td class="col-12">Gracias por su respuesta</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
    </main>

<?php 
    require_once("../components/footer.php");
?>