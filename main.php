<!DOCTYPE html>
<!--document type declaration berfungsi untuk memberi tahun browser bahwa dokumen yang akan ditampilkan adalah dokumen html-->

<html lang="en">
<!--tag  pembuka dari seluruh halaman web yang akan dibuat-->

<head>
    <!--tag yang berfungsing untuk keterangan secara teknis-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--semua isi elemen yang berada didalam tag ini akan ditampilkan ke halaman website pada saat html ini di akses oleh browser-->
    <h4>Data Masukan</h4>
    <!--FORM-->
    <form action="page\proses.php" method="POST" novalidate>
        <label for="nama">Nama: </label> <br>
        <input type="text" name="nama" id="">
        <br>
        <label for="npm">NPM: </label> <br>
        <input type="text" name="npm" id="">
        <br>
        <label for="kelas">Kelas: </label> <br>
        <input type="text" name="kelas" id="">
        <br>
        <!--input taxt-->
        <label for="kemampuan">Kemampuan: </label>
        <select name="kemp">
            <option value="PHP">PHP Programing</option>
            <option value="Python">Python</option>
            <option value="Data">Big Data</option>
            <option value="IOT">IOT</option>
        </select>
        <!--option-->
        <br>
        <input type="submit" name="btn" id="kirim" value="Kirim">
    </form>


</body>

</html>