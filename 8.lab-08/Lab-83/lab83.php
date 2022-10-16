<html>
    <head>
        <title>Laboratorio 8.3</title></head>
    
    <body>
        <?php
            include('class_lib.php');
            $min = $_POST['min'];
            $max= $_POST['max'];
            
            $arr = new Arreglo($min,$max);
            $arr->create_Array();
        ?>    
    </body>

</html>