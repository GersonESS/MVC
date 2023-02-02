<?php
require "Model.php";
require "ViAar  fcalertAA

ew.php";

    class Controller
    
    {
        public function index()
        {
            $model = new Model();
            $view = new View();
            $string = $model->get_string();
            $view->render($string);
        }
        
    }
?>
