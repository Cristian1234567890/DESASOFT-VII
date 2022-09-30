<html>
    <head>
        <title>Laboratorio 6.2</title></head>
    
    <body>
        <?php
        include ("class_lib.php");
       //Ejemplo de uso de la clase Padre

       $soporte1 = new soporte("The Soccer Game", 22,3);
       echo"<b>".$soporte1->titulo."</b>";
       echo "<br> Precio: ".$soporte1->dame_precio_sin_itbm()." Dolares";
       echo "<br> Precio (ITBM incluido): ".$soporte1->dame_precio_con_itbm()." Dolares";
        
        //ejemplo de uso de clase hija video.

        $mivideo = new video("Los Otros",22,4.5,"115 Minutos");
        echo "<br><br>";
        echo "<b>".$mivideo->titulo."</b>";
        echo "<br>precio: ".$mivideo->dame_precio_sin_itbm()." Dolares";
        echo "<br>precio (ITBM incluido): ".$mivideo->dame_precio_con_itbm()." Dolares";
        echo "<br>".$mivideo->imprime_caracteristicas();

        //Ejemplo de uso de la clase hija 2

        $mijuego1 = new juego("Pes 18",21,2.5,"XBox 360", 1,2);
        $mijuego1->imprime_caracteristicas();
        $mijuego1->imprime_jugadores_posibles();
        "echo <p>";
        $mijuego2 = new juego("Fifa 18", 27, 3, "PS 4", 1,2);
        echo "<br><b>".$mijuego2->titulo."</b>";
        $mijuego2->imprime_jugadores_posibles();
        ?>    
    </body>

</html>