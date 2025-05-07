<?php
require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../../core/App.php';


class Dashboard extends Controller{

    public function index(){
        // $judul = "SISTEM INFORMASI SEKOLAH";
        $this->view_only('template/header',['title'=>'TUGAS MUHAMMAD HELMI']);
        $this->view_only('template/sidebar');
        $this->view_only('template/navbar');
        $this->view_only('dashboard/dashboard');
        $this->view_only('template/footer');
        $this->view_only('template/load');

    }
    
}
