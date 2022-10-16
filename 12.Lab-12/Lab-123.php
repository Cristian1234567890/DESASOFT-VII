<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 12.3</title>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>
<body>
    <H1>MANEJO DE SESIONES</H1>
    <H2>PASO 3: La variable ya ah sido destruida y su valor se ha perdido</H2>
    
    <?php
        if(isset($_SESSION['var'])){
            $var= $_SESSION['var'];
        }
        else{
            $var= "";
        }
        print("<P>Valor de la variable sesion es: $var</P>\n");
        session_destroy();
    ?>
    <A HREF="Lab-121.php">VOLVER PASO 1</A>
</body>
</html>