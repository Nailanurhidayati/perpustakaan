<?php
    //koneksi database
    include '../config/config.php';

    //menangkap data id yang dikirim dari url
    $kategori_id =$_GET['kategori_id'];


    //menghapus data dari databas
    mysqli_query($conn,"DELETE FROM kategoribuku WHERE kategori_id=$kategori_id");

    //mengalihkan halaman kembali ke index.php
    header("location:kategori.php?pesan=hapus");

    ?>