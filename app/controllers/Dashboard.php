<?php
require_once __DIR__ . '/../../core/Controller.php';
<<<<<<< HEAD
=======
require_once __DIR__ . '/../../core/App.php';

>>>>>>> 910ce2ad4b486c3faf039d6af2f1c7d87dcb9eec

class Dashboard extends Controller{

    public function index(){
<<<<<<< HEAD
        // $title = "Dashboard";
        // $judul = "SISTEM INFORMASI SEKOLAH";
        $this->view_only('template/header',['title'=>'SISTEM INFORMASI SEKOLAH']);
=======
        // $judul = "SISTEM INFORMASI SEKOLAH";
        $this->view_only('template/header',['title'=>'TUGAS MUHAMMAD HELMI']);
>>>>>>> 910ce2ad4b486c3faf039d6af2f1c7d87dcb9eec
        $this->view_only('template/sidebar');
        $this->view_only('template/navbar');
        $this->view_only('dashboard/dashboard');
        $this->view_only('template/footer');
<<<<<<< HEAD
=======
        $this->view_only('template/load');

>>>>>>> 910ce2ad4b486c3faf039d6af2f1c7d87dcb9eec
    }
    
}
