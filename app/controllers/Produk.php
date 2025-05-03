<?php
require_once __DIR__ . '/../../core/controller.php';
require_once __DIR__. '/../models/model.php';

class Produk extends Controller{
   
    public function __construct(){
        $model = new Model(); 
    }

    public function index(){
        
        $judul['title'] = "SISTEM INFORMASI SEKOLAH";
        $model = new Model();
        $data['guru'] = $this->model('model')->read_data("SELECT * FROM tbl_produk");
        $this->view_only('template/header',$judul);
        $this->view_only('template/sidebar');
        $this->view_only('template/navbar');
        $this->view('produk/produk',$data);
        $this->view_only('template/footer');
    }
}
