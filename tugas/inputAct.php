<?php
include 'koneksi.php'; //koneksike database

//menyimpan data kedalam variable
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$notelp = $_POST['notelp'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

//insert table
$sql = "INSERT INTO pegawaii(nama, jenis_kelamin, tempat_lahir, tanggal_lahir, no_telp, agama, alamat)
VALUES ('$nama','$gender','$tempat','$tanggal','$notelp','$agama','$alamat')";

if(mysqli_query($conn, $sql)){
    header ("location:home.php");
} else {
    echo "Error creating database".mysqli_error($conn);
}
mysqli_close($conn);
?>