<?php
$idedit = $_GET['idedit'];
$kategori = $db->AmbilSatuidKategori($idedit)[0];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $db->EditKategori($_POST);
    echo "
    <script>
    alert('Data Berhasil Di ubah')
    window.location='index.php?page=pages/katmakanan/index'
    </script>";
} ?>
<div class="container">
    <div class="card mb-3  " style="width: 100%; ">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Edit Data Kategori Makanan </div>
        <div class="card-body ">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $kategori['kategori_id'] ?>">
                <div class="form-group">
                    <label for="">Nama Kategori Makanan</label>
                    <input type="text" name="namakat" value="<?= $kategori['kategori_nama'] ?>" class="form-control">
                </div>
                <input class="btn btn-success btn-block" type="submit" name="simpan" value="Simpan">
            </form>
        </div>
    </div>



</div>