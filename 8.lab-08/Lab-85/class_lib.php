<?php

    class Unitario{
        protected $t_size;

        function __construct($table_size){
            $this->t_size = $table_size;
        }

        function createTable(){
            $unit =1;
            echo "<table border=1>";
                        
            for ($n1=1; $n1<=$this->t_size; $n1++)
            {
                echo "<tr>";
                        
                for($n2=1;$n2<=$this->t_size;$n2++)
                {   
                    if($unit==$n2){
                    echo"<td bgcolor=#bdc3d6>",1,"</td>";
                    }
                    else{
                        echo "<td>",0,"</td>";
                    }
                }  
                $unit = $unit +1;
                echo "</tr>";
                }
                echo "</table>";
        }
            
    }
        
    
?>   