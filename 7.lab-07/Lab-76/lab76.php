<html>
    <head>
        <title>Laboratorio 7.6</title></head>
    
    <body>
        <?php   
            include("class_lib.php");

           $diam = $_POST['diam'];
           $altu = $_POST['altu'];

           $cil = new Cilindro($diam,$altu);
           $vol= $cil->calc_volumen();
           $a= $cil->calc_area();

           echo "<br/> El Volumen del cilindro es de: ".$vol." metros cubicos.";
           echo "<br/> El Area del cilindro es de: ".$a." metros cuadrados.";

        ?>    
    </body>

</html>