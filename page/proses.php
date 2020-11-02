<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>

<body>
       <h5>Data yang ditampilkan</h5>
       <?php
       include "koneksi.php";

       $nama_mhs =  $_POST['nama'];
       $npm =  $_POST['npm'];
       $kelas =  $_POST['kelas'];
       $kemampuan =  $_POST['kemp'];

       mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('$nama_mhs','$npm', '$kelas', '$kemampuan')");
       echo "Nama: $nama_mhs";
       echo "<br>";
       echo "NPM: $npm";
       echo "<br>";
       echo "Kelas: $kelas";
       echo "<br>";
       echo "Kemampuan: $kemampuan";
       ?>
       <br>
       <a href="tabel_data.php"> Lihat data</a>
</body>

</html>