<html>
    <head>
        <title>Laboratorio 7.2</title></head>
    
    <body>
        <?php
            include("class_lib.php");
            $class1 = new ClaseConcreta1;
            $class1->printOut();
            echo $class1->prefixedValor('FOO_') ."<br>";
            $class2 = new ClaseConcreta2;
            $class2->printOut();
            echo $class2->prefixedValor('FOO_') ."<br>";

        ?>    
    </body>

</html>