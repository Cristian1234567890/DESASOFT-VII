 
        <?php
        class soporte{
       
            public $titulo;
            protected $numero;
            private $precio;

            function __construct($tit,$num, $precio){
                $this->titulo = $tit;
                $this->numero = $num;
                $this->precio=$precio;
            }
            public function dame_precio_sin_itbm(){
                return $this->precio;
            }
            public function dame_precio_con_itbm(){
                return $this->precio*1.07;
            }

            public function dame_numero_identificacion(){
                return $this->numero;
            }

            public function imprime_caracteristicas(){
                echo "<br>".$this->titulo;
                echo "<br>".$this->precio." (ITBM no incluido)";
            }

            public function __destruct(){
                echo "<br> Destruido: ".$this->titulo;
            }           
        }   
        
        class video extends soporte{
            protected $duration;
            function __construct($tit, $num, $precio, $dur){
                parent::__construct($tit,$num,$precio);
                $this->duration = $dur;
            }

            public function imprime_caracteristicas(){
                echo "<br> Película en Blu-Ray: ";
                parent::imprime_caracteristicas();
                echo"<br>Duración: ".$this->duration;
            }
        }
        
        class juego extends soporte{
            protected $consola;// consola del juego ej: DS Lite
            protected $min_num_jugadores;
            protected $max_num_jugadores;

            function __construct($tit,$num,$precio,$con, $min_j, $max_j){
                parent::__construct($tit,$num,$precio);
                $this->consola= $con;
                $this->min_num_jugadores= $min_j;
                $this->max_num_jugadores= $max_j;
            }

            public function imprime_caracteristicas(){
                echo"<br> Juevo para: ".$this->consola;
                parent::imprime_caracteristicas();
                echo"<br>".$this->imprime_jugadores_posibles(); 
            }

            public function imprime_jugadores_posibles(){
                if($this->min_num_jugadores==$this->max_num_jugadores){
                    if($this->min_num_jugadores==1){
                        echo "<br> Para un Jugado";
                    }
                    else{
                        "<br> Para".$this->min_num_jugadores." Jugadores";
                    }
                }
                    else{
                        echo "<br> De: ".$this->min_num_jugadores." hasta: ".$this->max_num_jugadores. " Jugadores";
                    }
                }
        
            }
        
        ?>    
 