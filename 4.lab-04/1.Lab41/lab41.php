<html>
    <head>
        <title>Laboratorio 4.1</title></head>
    
    <body>
        <?php
            $v= $_POST['ventas'];
            echo "<br><br> El total de Ventas cumplido fue de un: ".$v."%";
            if($v>=80){
                echo"<br><br>";
                echo"<img src=img/good.jpg>";
            }
            else if(($v>=50)&&($v<80)){
                echo "<br><br>";
                echo"<img src=img/medium.jpg>";
            }
            else{
                echo "<br><br>";
                echo"<img src=img/bad.jpg>";
            }
        ?>    
    </body>

</html>