<?php
require_once __DIR__ . '/../../core/controller.php';
require_once __DIR__. '/../models/model.php';

class Guru extends Controller{
   
    public function __construct(){
        $model = new Model(); 
    }

    public function index(){
        
        $judul['title'] = "SISTEM INFORMASI SEKOLAH";
        $model = new Model();
        $data['guru'] = $this->model('model')->read_data("SELECT * FROM tb_guru");
        $this->view_only('template/header',$judul);
        $this->view_only('template/sidebar');
        $this->view_only('template/navbar');
        $this->view('guru/guru',$data);
        $this->view_only('template/footer');
    }

    public function form_guru($id = null){
        $model = new Model();
        $judul['title'] = "SISTEM INFORMASI SEKOLAH";
        $tambah['tambah'] = "Tambah Data Guru";
        $update['update'] = "Update Data Guru";
        
        // inisialasi data 
        if($id == null){
            
            $d = (object) [
                'id_guru' => null,
                'nama' => '',
                'nip' => '',
                'mapel' => ''
            ];

            $data_teks= [
                'tambah' => "Tambah Data Guru",
                'url' =>  path('guru/tambah_data'),
                'd' => $d
            ];
            
        $this->view_only('template/header',$judul);
        $this->view_only('template/sidebar');
        $this->view_only('template/navbar');
        $this->view('guru/form_guru',$data_teks);
        $this->view_only('template/footer');
        
        }else{
            $data['d']=$this->model('model')->read_data_id("SELECT * FROM tb_guru where id_guru =".$id);

            $data_teks= [
                'tambah' => "Update Data Guru",
                'url' =>  path('guru/update_data')
            ];
          
            $this->view_only('template/header',$judul);
            $this->view_only('template/sidebar');
            $this->view_only('template/navbar');
            $this->view('guru/form_guru',$data,$data_teks);
            $this->view_only('template/footer');
        }

    }

    public function tambah_data(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Collect data from form submission
            $data = [
                'nama' =>htmlspecialchars($_POST['nama']),
                'nip' => htmlspecialchars($_POST['nip']),
                'mapel' => htmlspecialchars($_POST['mapel']),
                'dibuat_pada' => htmlspecialchars(date('Y-m-d H:i:s'))
            ];
            $hasil = $this->model('model')->insert_data('tb_guru',$data);
            if ($hasil) {
                // Redirect AND show success message
                echo "<script>
                alert('data berhasil ditambahkan!');
                window.location.href = '".path('guru')."'
                </script>";
            } else {
                echo "Error updating data.";
            }
            

    }
    
}
    public function update_data(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id_guru'];
            $data = [
                'nama' =>htmlspecialchars($_POST['nama']),
                'nip' => htmlspecialchars($_POST['nip']),
                'mapel' => htmlspecialchars($_POST['mapel']),
                'dibuat_pada' => htmlspecialchars(date('Y-m-d H:i:s'))
            ]; 

            $hasil = $this->model('model')->update_data('tb_guru',$data,$id);
            if ($hasil) {
                // Redirect AND show success message
                echo "<script>
                alert('data berhasil diUpdate!');
                window.location.href = '".path('guru')."'
                </script>";
            } else {
                echo "Error updating data.";
            }
    }

}
    public function delete_data($id){
        $hasil = $this->model('model')->delete_data('tb_guru',$id);
        if ($hasil) {
            // Redirect AND show success message
            echo "<script>
            alert('data berhasil dihapus!');
            window.location.href = '".path('guru')."'
            </script>";
        } else {
            echo "Error updating data.";
        }

    }
}
