<?php

    class Arreglo{
        protected $v_min;
        protected $v_max;
        function __construct($min, $max){
            $this->v_min = $min;
            $this->v_max= $max;
            
        }

        function create_Array(){
            $i_max=0;
            $r_max=0;
            $a= array();
            echo "Creacion de Arreglo automatizado: <br><br><br>";
            for($i=1; $i<=20;$i++){
                $a[$i]=rand($this->v_min,$this->v_max);
                if($r_max==$a[$i]){
                    $a[$i]=$r_max-1;
                }
                if($r_max<$a[$i]){
                    $r_max=$a[$i];
                    $i_max=$i;
                }
            
                echo "|".$a[$i]."|";
            }
            echo "<br><br> el valor maximo es: ".$r_max." en el indice: ".$i_max;
        }
    }
        
    
?>   