<?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $db->SaveKategori($_POST);
    echo "
    <script>
    alert('Data Berhasil Di Simpan')
    window.location='index.php?page=pages/katmakanan/index'
    </script>";
} ?>
<div class="container">
    <div class="card mb-3  " style="width: 100%; ">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Data Kategori Makanan </div>
        <div class="card-body ">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nama Kategori Makanan</label>
                    <input type="text" name="namakat" class="form-control">
                </div>
                <input class="btn btn-success btn-block" type="submit" name="simpan" value="Simpan">
            </form>
        </div>
    </div>



</div>