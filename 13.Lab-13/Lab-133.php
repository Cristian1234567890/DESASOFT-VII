<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13.3</title>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>
<body>
    
    <H1>Recuperar valor de una cookie</H1>
    <?php
        if(isset($_COOKIE["user"])){
            echo "<H2>Bienvenido".$_COOKIE['user']."!</H2><br/>";
        }
        else{
            echo "<H2>Bienvenido Invitado!</H2><br/>";
        }
    ?>
    <BR/><A HREF="Lab-131.php">...Regresar</A>
    <BR/><A HREF ="Lab-134.php">Continuar...</A>
</body>
</html>