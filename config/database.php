<?php
/* class Database, menampung atribut Database
private, pengaksesan hanya bisa di class Database
public, pengaksesan variabel bisa di luar class Database */
class Database{
    private $host = "localhost";
    private $db_name = "indonetsource1";
    private $username = "root";
    private $password = "";

    //koneksi ke database
    public $conn;
  
    public function koneksi(){
        $this->conn = null;  
        //try, membuat pernyataan untuk menguji koneksi 
        try{            
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        
        //catch, jika di try terjadi kesalahan makan kode catch yang akan dijalankan 
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        //return, menghentikan pernyataan dan mengembalikan nilai
        return $this->conn;
    }
}
?>