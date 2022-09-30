<html>
    <head>
        <title>Laboratorio 6.5</title></head>
    
    <body>
        <?php
            include("class_lib.php");

            //print ClaseBase::test()."Value (1)<br>";
            //print ClaseBase::masTest()."Value (2)<br>";
            
            $cb = new ClaseBase();

            print $cb->test()." value (3)<br>";
            print $cb->masTest(). " value (4)<br>";

            //print ClaseHija::test()." value (5)<br>";
            //print ClaseHija::masTest()." value (6)<br>";

            $ch = new ClaseHija();
            print $cb->test()." value (7)<br>";
            print $cb->masTest()." value (8)<br>";

        ?>    
    </body>

</html>