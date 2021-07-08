<?php 
    class Controller{
        public function model($model)
        {
            //Require mode file
           require_once '../app/models/' .$model. '.php';

           return new $model;
        }

        //Load the View
        public function view($view, $data = [])
        {
            if(file_exists('../app/views/' . $view . '.php')){
                require_once '../app/views/' . $view . '.php';
            }else{
                die("View Doesn't Exisits");
            }
            
        }
    }