<?php 
// koneksi database
include 'conect.php';

// menangkap data yang di kirim dari form
$tgl = $_POST['tgl'];
$nama = $_POST['nama'];
$tglAwal = $_POST['tglAwal'];
$tglAkhir = $_POST['tglAkhir'];
$pilihan = $_POST['pilihan'];
 
// menginput data ke database
mysqli_query($conect,"INSERT INTO event VALUES('','$tgl','$nama','$tglAwal','$tglAkhir','$pilihan')");
 
// mengalihkan halaman kembali ke konten.php
header("location:CRUD.php");
 
?>