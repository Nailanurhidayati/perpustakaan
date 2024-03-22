<?php
// koneksi database
include './config/config.php';
// menangkap data yg di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nama_lenkap = $_POST['nama_lenkap'];
$alamat = $_POST['alamat'];
//menginput data ke database
mysqli_query($conn, "insert into user values('','$username','$password','$email','$nama_lenkap','$alamat','')");
// mengalihkan halaman kemabali ke index.php
header("location:index.php ?pesan=info_daftar");
?>