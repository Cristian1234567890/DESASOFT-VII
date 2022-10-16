<?php
    if(isset($_POST['enviar'])){
        if(array_key_exists('enviar',$_POST));
        {
            $expire= time()+ 60*5;
            setcookie("user", $_REQUEST['visitante'],$expire);
            header("Refresh:0");    
        }
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
    
    <H1>Creacion de Cookies</H1>
    <H2>La cookie "User" tendrá solo 5 minutos de duración</H2>
    <?php
        if(isset($_COOKIE["user"])){
            print("<BR/>Hola <B>".$_COOKIE["user"]."</B> gracias por visitar nuestro sitio web<BR/>");
        }else{
        ?>
    <FORM NAME="formcookie" METHOD="post" ACTION="Lab-132.php">
        </BR>Hola, primera vez que te vemos por nuestro sitio web ¿Como te llamas?
        <INPUT TYPE="text" NAME="visitante">
        <INPUT NAME="enviar" VALUE="Gracias por identificarte" TYPE="submit"/><BR/>

    </FORM>
    <?php
        }
    ?>
    <BR/><A HREF="Lab-133.php">Continuar...</A>
    
</body>
</html>