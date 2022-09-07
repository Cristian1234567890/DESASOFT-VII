<html>
    <head>
        <title>Laboratorio 3.2</title></head>
        
    <body>
        <?php
            $p1 = $_POST['precio1'];
            $p2 = $_POST['precio2'];
            $p3= $_POST['precio3'];
            $media = ($p1+$p2+$p3)/3;
            echo "<br/> DATOS RECIBIDOS";
            echo "<br/> Precio del producto del establecimiento 1:".$p1." dolares";
            echo "<br/> Precio del producto del establecimiento 2:".$p2." dolares";
            echo "<br/> Precio del producto del establecimiento 3:".$p3." dolares <br/>";
            echo "<br/> El precio medio del producto es de: ".$media." dolares";
        ?>    
    </body>

</html>