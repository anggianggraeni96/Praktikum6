<html>
    <head>
        <title>Koneksi Database MySQL</title> <!-- Menampilkan judul tab Koneksi Database MySQL -->
    </head>
    <body>
        <h1>Demo Koneksi database MySQL</h1> <!--Print : Demo Koneksi database MySQqL-->
        <?php
        $conn = mysqli_connect("localhost","root","" ); //koneksi

        //Check connection
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL".mysqli_connect_error();
            exit;
        }
        ?>
    </body>
</html>