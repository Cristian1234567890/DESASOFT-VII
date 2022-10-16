<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13.4</title>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>
<body>
    
    <H1>Eliminar Cookies</H1>
    <?php
        if(isset($_COOKIE["user"])){
            setcookie("user","",time()+60*5);
            echo "<H3>La cookie 'user' ha sido eliminada satisfactoriamente</H3></BR>";
        }
        else{
            echo "<H3>La cookie 'user' no existe</H3><br/>";
        }
    ?>
    <BR/><A HREF="Lab-131.php">Volver al contador de visitas</A>
    <BR/><A HREF ="Lab-132.php">Volver al saludo a ususario</A>
</body>
</html>