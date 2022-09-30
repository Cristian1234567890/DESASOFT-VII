<html>
    <head>
        <title>Laboratorio 7.1</title></head>
    
    <body>
        <?php
            include("class_lib.php");
            echo MiClase::constante."<br>";

            $clase = new MiClase();
            $clase->mostrarConstante();

        ?>    
    </body>

</html>