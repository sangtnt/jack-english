<?php
    class DB{
        private $connection;
        public function getConnection(){
            if (isset($this->connection)){
                return $this->connection;
            }
            else{
                try{
                    $this->connection = new PDO("mysql:host=localhost; dbname=english_php", "root", "");
                    return $this->connection;
                }
                catch(PDOException $e){
                    die("Lỗi kết nối dữ liệu");
                }
            }
        }
    }
?>