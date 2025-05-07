<?php
require_once __DIR__ . '/../../config/database.php';

class Model extends Database{
    public function __construct() {
        // connection to database 
        $this->conn = $this->getConnection();
    }
    // Function to execute a read query
    function read_data($query) {
        $result = $this->conn->query($query);
        $data = [];
        if ($result) {
            while ($row = $result->fetch_object()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function read_data_id($query){
        $result = $this->conn->query($query);
        $row = $result->fetch_object();
        return $row;
    }
    // insert query
    public function insert_data($table, $data) {
        $columns = implode(", ", array_keys($data));
        
        // Escape 
        $escaped_values = array_map(function($value) {
            return "'" . $this->conn->real_escape_string($value) . "'";
        }, array_values($data));
        
        $values = implode(", ", $escaped_values);
    
        $query = "INSERT INTO $table ($columns) VALUES ($values)";
        
        // Execute
        return $this->conn->query($query);
    }

    function update_data($table, $data, $id) {
        $set = '';
        foreach ($data as $column => $value) {
            $set .= "$column = '{$this->conn->real_escape_string($value)}', ";
        }
        $set = rtrim($set, ', '); // Remove trailing comma

        $query = "UPDATE $table SET $set WHERE id_guru = $id";
        
        if ($this->conn->query($query)) {
            return true;
        }else {
            return false;
        }
    }

    function delete_data($table, $id){
        $query = "DELETE FROM $table WHERE id_guru = $id";
        return $this->conn->query($query);
        
    }
}