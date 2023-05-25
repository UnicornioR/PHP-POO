<?php
    include_once 'clases/Persona.php';
    $alumno =new Persona('Jose Pardo',23);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.4.slim.js" defer></script>
    <script src="js/bootstrap/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&family=Roboto+Slab:wght@100;300;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Factura Hunters</title>
    <script src="js/procesarfactura.js" defer></script>
</head>

<body>
    <header>
        <?php include('includes/header.php')?>
    </header>
    <h1>Programación orientada a objetos en php </h1>
    <nav>
        <?php include('include/enlaces.php') ?>
    </nav>
    <main>
        <pre class="resultado">
            <?php echo $alumno->getNombre();?>
            <?php echo $alumno->getEdad();?>

        </pre>
    </main>
</body>
</html>