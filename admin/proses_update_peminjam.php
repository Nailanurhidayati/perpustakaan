<?php
//koneksi database
include '../config/config.php';

//menangkap data yang dikirim dari from
$peminjaman_id = $_POST['peminjaman_id'];
$nama_lenkap = $_POST['nama_lenkap'];
$judul = $_POST['judul'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$status_peminjaman = $_POST['status_peminjaman'];

mysqli_query($conn, "UPDATE user SET peminjaman_id='$peminjaman_id',nama_lenkap='$nama_lenkap',judul='$judul',
                        tanggal_peminjaman='$tanggal_peminjaman',tanggal_pengembalian='$tanggal_pengembalian',status_peminjaman='$status_peminjaman' WHERE user_id='$user_id '");

//mengalihkan halaman kembali ke index.php
header("location:peminjam.php?pesan=update");

?>