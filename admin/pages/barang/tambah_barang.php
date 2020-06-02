<?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $db->SaveMakanan($_POST);
    echo "     <script>alert('data berhasil disimpan')</script>";
    echo "     <script>window.location='index.php?page=pages/barang/index'</script>";
} ?>
<div class="container">
    <div class="card mb-3  " style="width: 100%; ">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Menu Makanan </div>
        <div class="card-body ">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="name">Nama Makanan</label>
                            <input class="form-control " type="text" name="nama" placeholder="Nama">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="name">Kategori Makanan</label>
                            <select name="kategori" id="" class="form-control">
                                <option value="">--Pilih--</option>
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
                            <input class="form-control " type="number" name="hargamodal">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Harga Jual</label>
                            <input class="form-control " type="number" name="hargajual">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">stok</label>
                            <input class="form-control " type="number" name="stok">
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
                            <input class="form-control " type="number" name="berat">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Biaya Pesan</label>
                            <input class="form-control " type="number" name="bpesan">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Biaya Simpan</label>
                            <input class="form-control " type="number" name="bsimpan">
                            <div class="invalid-feedback">
                            </div>
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
                            <textarea name="keterangan" id="" cols="100" rows="9"></textarea>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-success btn-block" type="submit" name="simpan" value="Simpan">
            </form>
        </div>
    </div>



</div>