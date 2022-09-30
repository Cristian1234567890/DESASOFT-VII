<?php

    abstract class ClaseAbstracta{
        //Se fuerza la herencia de la clase para definir estos metodos
        abstract protected function tomarValor();
        abstract protected function prefixedValor($prefix);

        public function printOut(){
            print $this->tomarValor()."<br>";
        }
    }

    class ClaseConcreta1 extends ClaseAbstracta{
        protected function tomarValor(){
            return "ClaseConcreta1";
        }
        public function prefixedValor($prefix){
            return "{$prefix} ClaseConcreta1";
        }
    }

    class ClaseConcreta2 extends ClaseAbstracta{
        protected function tomarValor(){
            return "ClaseConcreta2";
        }

        public function prefixedValor($prefix){
            return "{$prefix} ClaseConcreta2";
        }
    }
?>    
