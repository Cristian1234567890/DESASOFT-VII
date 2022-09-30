<?php

    class ClaseBase{
        public function test(){
            echo "ClaseBase::test() llamada\n";
        }

        final public function masTest(){
            echo "ClaseBase::masTest() llamada\n";
        }
    }

    class ClaseHija extends ClaseBase{
        /*
        La siguiente funcion no funciona debido a que las funciones tipo final que se heredan no pueden se sobre escritas, es decir en la clase hija
        no se puede llamar una funcion con el mismo nombre que una funcion final de la clase base (clase padre).
        public function masTest(){
            echo "ClaseHijo::masTest llamada\n";
        }*/
        //por esta razon debemos llamarla de otra forma para identificarla
       public function masTest2(){
        echo "ClaseHijo::masTest llamada\n";
       }
    }
?>    
