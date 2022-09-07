<html>
    <head>
        <title>Laboratorio 1.2</title></head>
    
    <body>
        <?php
            $num= $_POST['num'];
            $res= 1;
            for($i=1; $i<=$num;$i++){
                $res= $res*$i;
            }
            echo "El factorial de: ".$num." es: ".$res;
        ?>    
    </body>

</html>