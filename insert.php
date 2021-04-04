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
//insert table
$sql = "INSERT INTO liga(kode, negara, champion)
VALUES ('Jer', 'Jerman', '4')";

if(mysqli_query($conn, $sql)){
    echo "Insert table succesfully";
} else {
    echo "Error creating database".mysqli_error($conn);
}
mysqli_close($conn);
?>