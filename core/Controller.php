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

<<<<<<< HEAD
=======
    protected function isAjaxRequest() {
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
               strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }

>>>>>>> 910ce2ad4b486c3faf039d6af2f1c7d87dcb9eec
}

