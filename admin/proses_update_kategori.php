<?php
//koneksi database
include '../config/config.php';

//menangkap data yang dikirim dari from
$kategori_id = $_POST['kategori_id'];
$nama_kategori = $_POST['nama_kategori'];

mysqli_query($conn, "UPDATE kategoribuku SET nama_kategori='$nama_kategori' WHERE kategori_id='$kategori_id' ");

//mengalihkan halaman kembali ke index.php
header("location:kategori.php?pesan=update");

?>