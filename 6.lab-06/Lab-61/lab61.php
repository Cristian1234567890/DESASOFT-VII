<html>
    <head>
        <title>Laboratorio 6.1</title></head>
    
    <body>
        <?php
        class cliente{
       
            var $nombre;
            var $numero;
            var $peli_alq;

            function __construct($nombre,$numero){
                $this->nombre = $nombre;
                $this->numero = $numero;
                $this-> peli_alq=array();
            }

            function __destruct(){
                echo "<br> Destruido: ".$this->nombre;
            }

            function give_num(){
                return $this->numero;
            }
        }   
        //instaciamos un par de objetos clientes
        $cliente1 = new cliente("pepe",1);
        $cliente2 = new cliente("Roberto",564);

        //Mostraremos el resultado creado.

        echo "<br> El identificador del cliente 1 es: ".$cliente1->give_num();
        echo "<br> El identificador del cliente 2 es: ".$cliente2->give_num();

        ?>    
    </body>

</html>