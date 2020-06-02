<?php
$idedit = $_GET['idedit'];
$makananid = $db->AmbilSatuidMakanan($idedit)[0];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $db->EditMakanan($_POST);

    echo "     <script>alert('data berhasil di rubah')</script>";
    echo "     <script>window.location='index.php?page=pages/barang/index'</script>";
}


?>
<div class="container">
    <div class="card mb-3  " style="width: 100%; ">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Data Barang </div>
        <div class="card-body ">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $makananid['barang_id'] ?>">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="name">Nama Makanan</label>
                            <input class="form-control" value="<?= $makananid['barang_nama'] ?>" type="text" name="nama" placeholder="Nama">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="name">Kategori Makanan</label>
                            <select name="kategori" id="" class="form-control">
                                <option value="<?= $makananid['kategori_id'] ?>"><?= $makananid['kategori_nama'] ?></option>
                                <?php $kategori = $db->TampilKategori();
                                foreach ($kategori as $pecah) :
                                ?>
                                    <option value="<?= $pecah['kategori_id'] ?>"><?= $pecah['kategori_nama'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Harga Modal</label>
                            <input class="form-control " value="<?= $makananid['barang_hargamodal'] ?>" type="number" name="hargamodal">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Harga Jual</label>
                            <input class="form-control " value="<?= $makananid['barang_hargajual'] ?>" type="number" name="hargajual">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">stok</label>
                            <input class="form-control " value="<?= $makananid['barang_stok'] ?>" type="number" name="stok">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">Berat</label>
                            <input class="form-control " value="<?= $makananid['barang_berat'] ?>" type="number" name="berat">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Biaya Pesan</label>
                            <input class="form-control " value="<?= $makananid['barang_biayapesan'] ?>" type="number" name="bpesan">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Biaya Simpan</label>
                            <input class="form-control " value="<?= $makananid['barang_biayasimpan'] ?>" type="number" name="bsimpan">
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group">
                            <img style="width: 100px; height: 80px;" src="images/barang/<?= $makananid['barang_gambar'] ?>" alt="">
                        </div>

                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">Keterangan</label>
                            <textarea name="keterangan" value="" id="" cols="100" rows="9"><?= $makananid['barang_keterangan'] ?></textarea>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-success btn-block" type="submit" name="edit" value="EDIT">
            </form>
        </div>
    </div>



</div>