<?php
    //koneksi database
    include '../config/config.php';

    //menangkap data id yang dikirim dari url
    $buku_id =$_GET['buku_id'];


    //menghapus data dari databas
    mysqli_query($conn,"DELETE FROM buku WHERE buku_id=$buku_id");

    //mengalihkan halaman kembali ke index.php
    header("location:buku.php?pesan=hapus");

    ?>