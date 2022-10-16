<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 12.2</title>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>
<body>
    <H1>MANEJO DE SESIONES</H1>
    <H2>PASO 2: Se accede a la variable de sesión almacenada y se destruye</H2>
    
    <?php
        if(isset($_SESSION['var'])){
            $var = $_SESSION['var'];
            print("<P>Valor de la variable de sesión: $var</P>\n");
            unset($_SESSION['var']);
            print("<A HREF='Lab-123.php'>PASO 3</A>");
        }
        else{
            print("Session no iniciada, reiniciar en <A HREF='Lab-121.php'>PASO 1</A> INICIE SESIÓN");
        }
    ?>
    
</body>
</html>