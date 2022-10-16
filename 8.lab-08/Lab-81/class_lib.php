<?php

    class Evaluacion{
        protected $sal;
        function __construct($v){
            $this->sal = $v;
            
        }

        function calc(){
            echo "<br><br> El total de Ventas cumplido fue de un: ".$this->sal."%";
            if($this->sal>=80){
                echo"<br><br>";
                echo"<img src=img/good.jpg>";
            }
            else if(($this->sal>=50)&&($this->sal<80)){
                echo "<br><br>";
                echo"<img src=img/medium.jpg>";
            }
            else{
                    echo "<br><br>";
                    echo"<img src=img/bad.jpg>";
            }
        }
    }
        
    
?>   