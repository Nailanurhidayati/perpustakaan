<?php
//koneksi database
include '../config/config.php';

$peminjaman_id = $_POST['peminjaman_id'];
$nama_lenkap = $_POST['nama_lenkap'];
$judul = $_POST['judul'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$status_peminjaman = $_POST['status_peminjaman'];


//menginput data ke database
mysqli_query($conn,"INSERT INTO buku VALUES('','$peminjaman_id','$nama_lenkap','$judul','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman')");

//mengalihkan halaman kembali ke index.php
header('location:peminjam.php')

?>