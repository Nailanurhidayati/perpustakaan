<?php
session_start();
if($_SESSION['level']==""){
    header("location:..index.php?pesan=info_login");
}
?>
<p>Hallo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>
.</p>
<a href="../logout.php">Logout</a>