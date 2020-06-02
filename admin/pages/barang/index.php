<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Menu Makanan</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Menu Makanan</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Makanan</th>
                            <th>Harga Modal</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Biaya Pesan</th>
                            <th>Biaya Simpan</th>
                            <th>Berat</th>
                            <th>Keterangan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $barang = $db->TampilDataMakanan();

                        foreach ($barang as $no => $pecah) :

                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $pecah['barang_nama'] ?></td>
                                <td><?= number_format($pecah['barang_hargamodal']) ?></td>
                                <td><?= number_format($pecah['barang_hargajual']) ?></td>
                                <td><?= $pecah['barang_stok'] ?></td>
                                <td><?= number_format($pecah['barang_biayapesan']) ?></td>
                                <td><?= number_format($pecah['barang_biayasimpan']) ?></td>
                                <td><?= $pecah['barang_berat'] ?> Gr</td>
                                <td><?= $pecah['barang_keterangan'] ?></td>
                                <td><img style="width: 100px; height: 80px;" src="images/barang/<?= $pecah['barang_gambar'] ?>" alt=""></td>
                                <td>
                                    <a class="btn btn-success mb-2" style="width: 100px;" href="index.php?page=pages/barang/edit&idedit=<?= $pecah['barang_id'] ?>">Edit</a>
                                    <a class="btn btn-danger" style="width: 100px;" href="index.php?page=pages/barang/hapus&idhapus=<?= $pecah['barang_id'] ?>">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>