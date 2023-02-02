<?php
require "Model.php";
require "ViAaew.php";

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
