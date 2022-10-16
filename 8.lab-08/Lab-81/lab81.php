<html>
    <head>
        <title>Laboratorio 8.1</title></head>
    
    <body>
        <?php

            include('class_lib.php');
            $v= $_POST['ventas'];
            $ev= new Evaluacion($v);
            $ev->calc();
        ?>    
    </body>

</html>