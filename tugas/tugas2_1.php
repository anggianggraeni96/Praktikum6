<?php
$servername = "localhost"; //inisialisasi servername : localhost
$username ="root"; //inisialisasi username : root
$password = ""; //inisialisasi password : (Tidak ada password)
$dbname = "pegawai"; //inisialisasi dbname (db yang digunakanan) : pegawai

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
//create table
$sql = "CREATE TABLE pegawaii(
    id INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama varchar(50) NOT NULL,
    jenis_kelamin ENUM('Pria','Wanita'),
    tempat_lahir varchar(30) NOT NULL,
    tanggal_lahir date,
    no_telp varchar(13),
    agama varchar(15),
    alamat varchar(100)
    )";

if(mysqli_query($conn, $sql)){
    echo "create table pegawaii succesfully";
} else {
    echo "Error creating database".mysqli_error($conn);
}
mysqli_close($conn);
?>