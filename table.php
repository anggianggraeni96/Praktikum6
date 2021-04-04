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
$sql = "CREATE TABLE liga (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(3) NOT NULL,
    negara VARCHAR(30) NOT NULL,
    champion int(3)
    )";

if(mysqli_query($conn, $sql)){
    echo "Table create succesfully";
} else {
    echo "Error creating database".mysqli_error($conn);
}
mysqli_close($conn);
?>