<html>
    <head>
        <title>Laboratorio 6.4</title></head>
    
    <body>
        <?php
            include("class_lib.php");

            print Foo::$mi_static."Value (1)<br>";

            $foo = new Foo();

            print $foo->staticValor()." value (2)<br>";
            print $foo->mi_static. " value (3)<br>";
            //propieda no definida  mi_static
            //$foo::mi_static no es posible

            print Bar::$mi_static." value (4)<br>";

            $bar = new Bar();
            print $bar->foostatic()." value (5)<br>";

        ?>    
    </body>

</html>