<?php
//koneksi database
include '../config/config.php';

//menangkap data yang dikirim dari from
$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nama_lenkap = $_POST['nama_lenkap'];
$alamat = $_POST['alamat'];

mysqli_query($conn, "UPDATE user SET username='$username',password='$password',email='$email',
                        nama_lenkap='$nama_lenkap',alamat='$alamat' WHERE user_id='$user_id '");

//mengalihkan halaman kembali ke index.php
header("location:pengguna.php?pesan=update");

?>