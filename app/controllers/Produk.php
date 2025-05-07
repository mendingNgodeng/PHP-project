<?php
require_once __DIR__ . '/../../core/controller.php';
require_once __DIR__. '/../models/model.php';

class Produk extends Controller{
   
    public function __construct(){
        $model = new Model(); 
    }
    public function index() {
        $judul['title'] = "Data Produk";
        $model = new Model();
        $data['guru'] = $this->model('model')->read_data("SELECT * FROM tbl_produk");
    
        if ($this->isAjaxRequest()) {
            $this->view('produk/produk_data', $data); //ajax only
        } else {
            $this->view_only('template/header', $judul);
            $this->view_only('template/sidebar');
            $this->view_only('template/navbar');
            $this->view('produk/produk', $data); // contains #container-load
            $this->view_only('template/footer');
            $this->view_only('template/load');
        }
    }

    public function form_produk($id = null){
        $model = new Model();
        $judul['title'] = "SISTEM INFORMASI SEKOLAH";
        $tambah['tambah'] = "Tambah Data produk";
        $update['update'] = "Update Data produk";
        
        // inisialasi data 
        if($id == null){
            
            $d = (object) [
                'kode_produk' => null,
                'nama_produk' => '',
                'stok' => '',
                'harga_barang' => ''
            ];

            $data_teks= [
                'tambah' => "Tambah Data Produk",
                'url' =>  path('produk/tambah_data'),
                'idForm' => 'formAdd',
                'd' => $d
            ];
            
        $this->view_only('template/header',$judul);
        $this->view_only('template/sidebar');
        $this->view_only('template/navbar');
        $this->view('produk/form_produk',$data_teks);
        $this->view_only('template/footer');
        $this->view_only('template/load');

        
        }else{
            $data['d']=$this->model('model')->read_data_id("SELECT * FROM tbl_produk where kode_produk =".$id);

            $data_teks= [
                'tambah' => "Update Data Produk",
                'url' =>  path('produk/update_data'),
                'idForm' => 'formUpdate'
            ];
          
            $this->view_only('template/header',$judul);
            $this->view_only('template/sidebar');
            $this->view_only('template/navbar');
            $this->view('produk/form_produk',$data,$data_teks);
            $this->view_only('template/footer');
            $this->view_only('template/load');

        }

    }

    public function tambah_data(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Collect data from form submission
            $data = [
                'nama_produk' =>htmlspecialchars($_POST['nama_produk']),
                'stok' => htmlspecialchars($_POST['stok']),
                'harga_barang' => htmlspecialchars($_POST['harga_barang']),
                
            ];
            $hasil = $this->model('model')->insert_data('tbl_produk',$data);
            // if ($hasil) {
            //     // Redirect AND show success message
            //     echo "<script>
            //     alert('data berhasil ditambahkan!');
            //     window.location.href = '".path('produk')."'
            //     </script>";
            // } else {
            //     echo "Error updating data.";
            // }

            header('Content-Type: application/json');

            if ($hasil) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'fail', 'message' => 'Insert failed']);
            }
            

    }
    
}
    public function update_data(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['kode_produk'];
            $data = [
                'nama_produk' =>htmlspecialchars($_POST['nama_produk']),
                'stok' => htmlspecialchars($_POST['stok']),
                'harga_barang' => htmlspecialchars($_POST['harga_barang']),
            ];

            $hasil = $this->model('model')->update_data('tbl_produk',$data,"kode_produk",$id);
            // if ($hasil) {
            //     // Redirect AND show success message
            //     echo "<script>
            //     alert('data berhasil diUpdate!');
            //     window.location.href = '".path('produk')."'
            //     </script>";
            // } else {
            //     echo "Error updating data.";
            // }

            header('Content-Type: application/json');

            if ($hasil) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'fail', 'message' => 'Update failed']);
            }
    }

}
    public function delete_data($id){
        $hasil = $this->model('model')->delete_data('tbl_produk',"kode_produk",$id);
        // if ($hasil) {
        //     // Redirect AND show success message
        //     echo "<script>
        //     alert('data berhasil dihapus!');
        //     window.location.href = '".path('produk')."'
        //     </script>";
        // } else {
        //     echo "Error updating data.";
        // }

        header('Content-Type: application/json');

    if ($hasil) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'fail', 'message' => 'Delete failed']);
    }

    }
}
