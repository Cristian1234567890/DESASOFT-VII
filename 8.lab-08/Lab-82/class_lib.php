<?php

    class Factorial{
        protected $num;
        function __construct($v){
            $this->num = $v;
            
        }

        function calc(){
            $res= 1;
            for($i=1; $i<=$this->num;$i++){
                $res= $res*$i;
            }
            echo "El factorial de: ".$this->num." es: ".$res;
        }
    }
        
    
?>   