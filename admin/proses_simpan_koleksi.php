<?php

include '../config/config.php';


$buku_id = $_POST['buku_id']; 
$kategori_id = $_POST['kategori_id'];


mysqli_query($conn,"INSERT INTO kategoribuku_relasi values('','$buku_id','$kategori_id')");

header("location:koleksi.php?pesan=simpan");

?>