<html>
    <head>
        <title>Laboratorio 8.2</title></head>
    
    <body>
        <?php
            include('class_lib.php');
            $num= $_POST['num'];
            
            $fac = new Factorial($num);
            $fac->calc();
        ?>    
    </body>

</html>