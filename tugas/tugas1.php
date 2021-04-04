<?php
$servername = "localhost"; //inisialisasi servername : localhost
$username ="root"; //inisialisasi username : root
$password = ""; //inisialisasi password : (Tidak ada password)
$dbname = "myDB"; //inisialisasi dbname (db yang digunakanan) : myDB

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
//create table
$sql = "CREATE TABLE buku_tamu (
    id_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    isi text(500)
    )";

if(mysqli_query($conn, $sql)){
    echo "Table buku_tamu create succesfully";
} else {
    echo "Error creating database".mysqli_error($conn);
}
mysqli_close($conn);
?>