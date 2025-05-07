<?php
class Database {
    private $host = "localhost";
<<<<<<< HEAD
    private $db= "db_simsek";
=======
    private $db= "produk";
>>>>>>> 910ce2ad4b486c3faf039d6af2f1c7d87dcb9eec
    private $username = "root";
    private $password = "";
    public $conn;

    // $koneksi = mysqli_connect("localhost","root","","db_simsek");

    public function getConnection() {
        $this->conn = null;
        try {
            // Establish a connection using mysqli
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
            if ($this->conn->connect_error) {
                throw new Exception("Connection failed: " . $this->conn->connect_error);
            }
        } catch (Exception $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

