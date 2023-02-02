<?php

    class Model
    {
        public $string;

        public function __construct()
        {
            $this->string = "OLÁ Mundo..";
        }
        public function get_string()
        {
            return $this->string;
        }
    }
?>
