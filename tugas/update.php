<?php
include 'koneksi.php'; //koneksi ke database
$id = $_GET['id']; //inisialisasi id
$pegawai = mysqli_query($conn, "select * from pegawaii where id='$id'");
$row = mysqli_fetch_array($pegawai);
//membuat function untuk set active radio button
function active_radio_button($value,$input){
    //apabila value dari button sama dengan yang diinput 
    $result = $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update</title> <!--Menampilkan Judul Tab input -->
    </head>
    <body>
        <form method="POST" action="updateAct.php"> <!--form dengan method post-->
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table>
                <tr>
                    <td>Nama</td> <!--Print : Nama-->
                    <td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td> <!--Print : Jenis Kelamin-->
                    <td>
                        <input type="radio" name="gender" 
                        value="Pria" <?php echo active_radio_button("Pria", $row['jenis_kelamin'])?>>Laki Laki
                        <input type="radio" name="gender" 
                        value="Wanita" <?php echo active_radio_button("Wanita", $row['jenis_kelamin'])?>>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td> <!--Print : Tempat Lahir-->
                    <td><input type="text" value="<?php echo $row['tempat_lahir'];?>" name="tempat"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td> <!--Print : Tanggal Lahir-->
                    <td><input type="text" value="<?php echo $row['tanggal_lahir'];?>" name="tanggal"></td>
                </tr>
                <tr>
                    <td>No. Telp</td> <!--Print : No.Telp-->
                    <td><input type="text" value="<?php echo $row['no_telp'];?>" name="notelp"></td>
                </tr>
                <tr> 
                    <td>Agama</td> <!--Print : Agama-->
                    <td><input type="text" value="<?php echo $row['agama'];?>" name="agama"></td>
                </tr>
                <tr>
                    <td>Alamat</td> <!--Print : Alamat-->
                    <td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit"> <!--Submit-->
                        <a href="http://localhost/progweb/prak6/tugas/home.php">Kembali</a> <!--Kembali ke home.php-->
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>