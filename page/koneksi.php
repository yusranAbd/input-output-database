<?php
$namaserver = "localhost";
$database = "workhard";
$username = "root";
$password = "";

$koneksi = mysqli_connect($namaserver, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi gagal : " . mysqli_connect_error());
}
