<html>
    <head>
        <title>Laboratorio 6.2</title></head>
    
    <body>
        <?php
        include ("class_lib.php");
        //instaciamos un par de objetos clientes
        $cliente1 = new cliente("pepe",1);
        $cliente2 = new cliente("Roberto",564);

        //Mostraremos el resultado creado.

        echo "<br> El identificador del cliente 1 es: ".$cliente1->give_num();
        echo "<br> El identificador del cliente 2 es: ".$cliente2->give_num();

        ?>    
    </body>

</html>