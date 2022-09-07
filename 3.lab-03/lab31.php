<html>
    <head>
        <title>Laboratorio 3.1</title></head>
    
    <body>
        <?php
            $diametro = $_POST['diam'];
            $altura = $_POST['altu'];
            $radio = $diametro/2;

            $Pi= 3.141593;
            $volumen = $Pi*$radio*$radio*$altura;
            echo "<br/>el volumen del cilindro es de: ".$volumen."metros cubicos";
        ?>
    </body>

</html>