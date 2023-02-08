<?php
//untuk beda domain atau cors
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//include_once untuk menyertakan file lain supaya tidak menuliskan perintah yang berulangkali, namumpemanggilan hanya sekali
include_once '../config/database.php';
include_once '../objects/mahasiswa.php';

//koneksi ke class database
$database = new Database();
$dbname = $database->koneksi();

//koneksi ke class mahaiswa
$mahasiswa = new mahasiswa($dbname);

//untuk mengetahui apakah variabel sudah diatur atau belum
$mahasiswa->nim = isset($_GET['nim']) ? $_GET['nim'] : die();

//memanggil function get_byNim di file mahasiswa.php
$mahasiswa->get_byNim();

if ($mahasiswa->nama != null) {
    $mhs_byNim = array(
        'nim' => $mahasiswa->nim,
        'nama' => $mahasiswa->nama,
        'jenis_kelamin' => $mahasiswa->jenis_kelamin,
        'tempat_lahir' => $mahasiswa->tempat_lahir,
        'tanggal_lahir' => $mahasiswa->tanggal_lahir,
        'alamat' => $mahasiswa->alamat
    );

    $respone = array(
        'status' =>  array(
            //respon jika nim yang dimasukkan ada di data
            'messsage' => 'Success', 
            'code' => (http_response_code(200))
        ), 'data' => $mhs_byNim
    );
} else {
    http_response_code(404);
    $respone = array(
        'status' =>  array(
            //respon jika nim yang dimasukkan tidak ada di data
            'messsage' => 'No Data Found', 
            'code' => http_response_code()
        )
    );
}

//menampilkan nilai dari hasil respon
echo json_encode($respone);
