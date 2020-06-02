<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Kategori Barang</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Kategori Barang</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $datakategori = $db->TampilKategori();
                        foreach ($datakategori as $no => $pecah) :
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $pecah['kategori_nama'] ?></td>
                                <td> <a class="btn btn-success" style="width: 80px;" href="index.php?page=pages/katmakanan/edit&idedit=<?= $pecah['kategori_id'] ?>">Edit</a>
                                    <a class="btn btn-danger" style="width: 80px;" href="index.php?page=pages/katmakanan/hapus&idhapus=<?= $pecah['kategori_id'] ?>">Hapus</a></td>
                            </tr>
                        <?php endforeach ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>