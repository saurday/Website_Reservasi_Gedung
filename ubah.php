<?php 
// koneksi database
include 'conect.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_pemesanan'];
$tgl = $_POST['tgl'];
$nama = $_POST['nama'];
$tglAwal = $_POST['tglAwal'];
$tglAkhir = $_POST['tglAkhir'];
$pilihan = $_POST['pilihan'];
 
// menginput data ke database
mysqli_query($conect,"UPDATE event SET tgl_pemesanan='$tgl', nama_cust='$nama', tgl_awalsewa='$tglAwal', tgl_akhirsewa='$tglAkhir', pilihan_gedung='$pilihan' where id_pemesanan='$id'");
 
// mengalihkan halaman kembali ke konten.php
header("location:CRUD.php");
 
?>