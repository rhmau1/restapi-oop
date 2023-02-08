<?php
//untuk beda domain atau cors
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//include_once untuk menyertakan file lain supaya tidak menuliskan perintah yang berulangkali, namumpemanggilan hanya sekali
include_once '../dbconfig/database.php';
include_once '../objects/mahasiswa.php';

//koneksi ke class database
$database = new Database();
$dbname = $database->koneksi();

//koneksi ke class mahaiswa
$mahasiswa = new Mahasiswa($dbname);

$data = json_decode(file_get_contents("php://input"));

$mahasiswa->nim = $data->nim;

//memanggil function get_byNim di file mahasiswa.php
if ($mahasiswa->delete_mhs()) {

    $respone = array(
        //respon jika berhasil
        'messsage' => 'Delete Success',
        'code' => http_response_code(200)
    );
} else {

    http_response_code(400);
    $respone = array(
        //respon jika tidak berhasil
        'messsage' => 'Delete Failed',
        'code' => http_response_code()
    );
}

//menampilkan nilai dari hasil respon
echo json_encode($respone);
