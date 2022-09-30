 
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
        ?>    
 