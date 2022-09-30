<html>
    <head>
        <title>Laboratorio 7.5</title></head>
    
    <body>
        <?php   
            include("class_lib.php");

            $obj = new MyCloneable();

            $obj->object1 = new SubObject();
            $obj->object2= new SubObject();

            $obj2 = clone $obj;

            print("<br> Oiriginal Object: ");
            print_r($obj);

            print("<br> Oiriginal Object: ");
            print_r($obj2);

        ?>    
    </body>

</html>