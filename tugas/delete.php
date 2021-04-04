<?php
include 'koneksi.php';

// menyimpan data id kedalam variabel
$id = $_GET['id'];

// query SQL untuk insert data
$sql="delete from pegawaii where id='$id'";
mysqli_query($conn, $sql);

//mengalihkan kehalaman utama
header ("location:home.php");
?>