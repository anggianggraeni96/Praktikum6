<?php
include 'koneksi.php';

//menyimpan data kedalam variable
$id = $_POST['id'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$notelp = $_POST['notelp'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

//update table
$sql = "update pegawaii set nama='$nama', jenis_kelamin='$gender', tempat_lahir='$tempat', tanggal_lahir='$tanggal', no_telp='$notelp',
        agama='$agama', alamat='$alamat' where id='$id'";
mysqli_query($conn, $sql);

//mengalihkan kehalaman utama
header ("location:home.php");
?>