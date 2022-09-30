<?php

    final class ClaseBase{
        public function test(){
            echo "ClaseBase::test() llamada\n";
        }

        final public function moreTesting(){
            echo "ClaseBase::moreTesting() llamada\n";
        }
    }

    /*En este caso, la clase hija no puede heredar de la clase padre porque es final*/ 
    class ClaseHija extends ClaseBase{

    }
?>    
