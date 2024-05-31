<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title><?php echo $titulo ?></title>
   <!-- cambiar el tittle para cada pagina -->
</head>

<body>
    <!-- N A V -->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
            <a class="navbar-brand logo-producto" href="inicio.php"><img src="../img/logo.png" alt="logo" width="76" height="76"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php 
                        $nav = array(
                            "Productos" => "producto.php",
                            "Sobre nosotros" => "sobrenosotros.php",
                            "Reseñas" => "resenias.php",
                            "Preguntas Frecuentes" => "contacto.php"
                        );
                        
                        foreach ($nav as $paginas => $link) {
                            echo "<li class='nav-item'><a class='nav-link' href=$link>$paginas</a></li>";
                        }  
                    ?>
                </ul>
            </div>
        </nav>
    </header>