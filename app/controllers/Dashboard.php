<?php
require_once __DIR__ . '/../../core/Controller.php';

class Dashboard extends Controller{

    public function index(){
        // $title = "Dashboard";
        // $judul = "SISTEM INFORMASI SEKOLAH";
        $this->view_only('template/header',['title'=>'SISTEM INFORMASI SEKOLAH']);
        $this->view_only('template/sidebar');
        $this->view_only('template/navbar');
        $this->view_only('dashboard/dashboard');
        $this->view_only('template/footer');
    }
    
}
