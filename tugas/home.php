<!Doctype html>
<html>
    <head>
        <title>Home</title> <!--Menampilkan Judul Tab input -->
    </head>
    <body>
        <h1>Data Pegawai</h1> <!--Print : Data Pegawai-->
        <table align="left" border="2" cellpadding="2" cellspacing="2">
            <tr>
                <td colspan="8" >Input Data Baru</td> <!--Print : Input Data Baru-->
                <td><a href="http://localhost/progweb/prak6/tugas/input.php">Input</a></td>
            </tr>
            <tr> <!--Print : HeaderTable, No., nama, dst.-->
                <th width="40">No.</th> 
                <th width="200">Nama</th>
                <th width="150">Jenis Kelamin</th>
                <th width="150">Tempat Lahir</th>
                <th width="150">Tanggal Lahir</th>
                <th width="150">No. Telp</th>
                <th width="150">Agama</th>
                <th width="150">Alamat</th>
                <th width="150">Action</th>
            </tr>
            <?php
            include 'koneksi.php'; //koneksi ke database
            $pegawai = mysqli_query($conn, "select * from pegawaii"); //query select
            foreach ($pegawai as $row) { //Print : data
                echo"<tr> 
                <td>".$row['id']."</td>
                <td>".$row['nama']."</td>
                <td>".$row['jenis_kelamin']."</td>
                <td>".$row['tempat_lahir']."</td>
                <td>".$row['tanggal_lahir']."</td>
                <td>".$row['no_telp']."</td>
                <td>".$row['agama']."</td>
                <td>".$row['alamat']."</td>
                <td>
                    <a href='http://localhost/progweb/prak6/tugas/update.php?id=$row[id]'>Edit</a> 
                    <a href='http://localhost/progweb/prak6/tugas/delete.php?id=$row[id]'>Hapus</a>
                </td>
                </tr>";              
                }
            ?>
        </table>
        
    </body>
</html>