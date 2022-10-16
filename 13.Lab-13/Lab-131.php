<?php
    if(isset($_COOKIE['contador'])){
        setcookie('contador',$_COOKIE['contador']+1,time()+365*24*60*60);
        $mensaje= 'Gracias por visitarnos. Número de visitas: '.$_COOKIE['contador'];
    }
    else{
        //caduca en un año
        setcookie('contador',1,time()+365*24*60*60);
        $mensaje= 'Bienvenido a nuestro sitio web';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13.1</title>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>
<body>
    
    <H1>CONTADOR DE VISITAS CON COOKIES</H1>
    <H3>
    <?php
        echo $mensaje;
    ?>
    </H3>
</body>
</html>