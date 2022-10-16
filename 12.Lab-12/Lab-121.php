<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 12.1</title>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>
<body>
    <H1>MANEJO DE SESIONES</H1>
    <H2>PASO 1: Se crea la variable de sesión y se almacena</H2>
    
    <?php
        $var= "Ejemplo Sesiones";
        $_SESSION['var']= $var;
        print("<P>Valor de la variable de sesión: $var</P>\n");
    ?>
    <A HREF="Lab-122.php">Paso 2</A>
</body>
</html>