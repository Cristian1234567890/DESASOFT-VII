<?php

    class SubObject{
        static $instances =0;
        public $instance;

        public function __construct(){
            $this->instance =++self::$instances;
        }

        public function __clone(){
            $this->instance = ++self::$instances;
        }
    }

    class MyCloneable{
        public $object1;
        public $object2;

        function __clone(){
            //forzar una copia de this->is_object
            $this->object1 = clone $this->object1;
        }
    }
?>    
