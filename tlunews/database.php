<?php
    class Database{
        private $conn;
        public function connect(){
            if($this->conn === null){
                try{
                    $this->conn = new PDO("mysql:host=localhost;dbname=tlunews",username:"root",password:"");
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
            }
            return $this->conn;
        }
    }
?>