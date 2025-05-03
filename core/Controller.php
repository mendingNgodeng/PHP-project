<?php
class Controller {
  
    public function model($model) {
        require_once __DIR__ . '/../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [],$data1=[]) {
        if ($data1 !== null) {
            extract($data1);
        }
        extract($data);
        require_once __DIR__ . '/../app/views/' . $view . '.php';
    }


    public function view_only($view, $data = []) {
        if ($data !== null) {
            extract($data);
        }
        
        require_once __DIR__ . '/../app/views/' . $view . '.php';
    }

}

