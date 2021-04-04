<?php
$servername = "localhost"; //inisialisasi servername : localhost
$username ="root"; //inisialisasi username : root
$password = ""; //inisialisasi password : (Tidak ada password)

//create connection
$conn = mysqli_connect($servername,$username,$password);
//check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
//create database
$sql = "create database pegawai";
if(mysqli_query($conn, $sql)){
    echo "Database pegawai create succesfully";
} else {
    echo "Error creating database".mysqli_error($conn);
}
mysqli_close($conn);
?>