<?php
include 'header.php';
include 'navbar.php';
?>
<div class ="content mt 3">
    <div class ="card">
        <div class="card-body">
            <form method="post" action="proses_simpan_peminjam.php">
            <div class="form-group">
                <label>judul</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label>tanggal_peminjaman</label>
                <input type="text" class="form-control" name="tanggal_peminjaman">
            </div>
            <div class="form-group">
                <label>tanggal_pengembalian</label>
                <input type="text" class="form-control" name="tanggal_pengembalian">
            </div>
            <div class="form-group">
                <label>status_peminjaman</label>
                <input type="date" class="form-control" name="status_peminjaman">
            </div>
            <div class="form-group">
                <button type="submit" class="from-control btn btn-primary btn-sm mt-3">Simpan</button>
            </div>
            </form>
        </div>

    </div>

</div>
<?php
include 'footer.php';