<?php
    require_once('modelo.php');

    class Noticia extends modeloCredencialesBD{
        protected $titulo;
        protected $texto;
        protected $categoria;
        protected $fecha;
        protected $imagen;

        public function __construct(){
            parent::__construct();
        }

        public function consultar_noticias(){
            $instruction = "CALL sp_listar_noticias()";

            $consult = $this->_db->query($instruction);

            $res = $consult->fetch_all(MYSQLI_ASSOC);

            if(!$res){
                echo "Failed in the Query";
            }
            else{
                return $res;
                $res->close();
                $this->_db->close();
            }
        }

        public function consultar_noticias_filtro($campo, $valor){
            $inst = "CALL sp_listar_noticias_filtro('".$campo."','".$valor."')";

            $consulta = $this->_db->query($inst);
            $res = $consulta->fetch_all(MYSQLI_ASSOC);

            if($res){
                return $res;
                $res->close();
                $this->_db->close();
            }
        }
    }
?>