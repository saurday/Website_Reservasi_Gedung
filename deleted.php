<?php 
// koneksi database
include 'conect.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conect,"DELETE FROM event WHERE id_pemesanan ='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:CRUD.php");

 