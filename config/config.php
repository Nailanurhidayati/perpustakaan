<?php
$conn = mysqli_connect("localhost", "root","", "db_perpus");
//check koneksi
if (mysqli_connect_error()){
    echo "koneksi database gagal : . mysqli_connect_error"();
}
?>