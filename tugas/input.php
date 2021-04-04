<!Doctype html>
<html>
    <head>
        <title>Input</title> <!--Menampilkan Judul Tab input -->
    </head>
    <body>
        <form method="POST" action="inputAct.php"> <!--form dengan method post-->
            <table width="400" align="center" cellpadding="2" cellspacing="2"> <!--table dengan lebar 400, align tengah,-->
            <tr>
                    <td align="center" colspan="2">  
                        Input Data Pegawai 
                    </td> <!--Print : Input Data Pegawai-->
                </tr>
                <tr>
                    <td width="130">Nama</td> <!--Print : Nama-->
                    <td><input type="text" name="nama"></td> <!--Textbox input nama-->
                </tr>
                <tr>
                    <td width="130">Jenis Kelamin</td> <!--Print : Jenis Kelamin-->
                    <td colspan="2"><input type="radio" name="gender" value="Pria"> Laki-laki
                    <input type="radio" name="gender" value="Wanita"> Perempuan </td> <!--Radio button input Jenis kelamin-->
                </tr>
                <tr>
                    <td width="130">Tempat Lahir</td> <!--Print : Tempat Lahir-->
                    <td><input type="text" name="tempat"></td> <!--Textbox input Tempat Lahir-->
                </tr>
                <tr>
                    <td width="130">Tanggal Lahir</td> <!--Print : Tanggal Lahir-->
                    <td><input type="date" name="tanggal"></td> <!--input tanggal-->
                </tr>    
                <tr>
                    <td width="130">No.Telp</td> <!--Print : No.Telp-->
                    <td><input type="text" name="notelp"></td> <!--Textbox input No.Telp-->
                </tr>
                <tr>
                    <td width="130">Agama</td> <!--Print : Agama-->
                    <td><input type="text" name="agama"></td> <!--Textbox input Agamaemail-->
                </tr>
                <tr>
                    <td width="130">Alamat</td> <!--Print : Alamat-->
                    <td><textarea name="alamat" cols="30" rows="5"></textarea></td> <!--Textarea input alamat-->
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnlogin" value="Submit"> <!--Button Submit bernilai Submit-->
                        <input type="reset" name="reset" value="Reset"> <!--Button Reset-->
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>