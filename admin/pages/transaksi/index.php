<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Pemesanan</li>
    </ol>

    < <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Data Pemesanan Restoran</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Member</th>
                                <th>Tgl Pemesanan</th>
                                <th>Provinsi</th>
                                <th>Kota/Distrik</th>
                                <th>Alamat</th>
                                <th>Kurir</th>
                                <th>Total Pemesanan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $pemesanan = $db->TampilTransaksi();
                            foreach ($pemesanan as $no => $pecah) :


                            ?>
                                <tr>
                                    <td><?= ++$no ?></td>
                                    <td><?= $pecah['member_nama'] ?></td>
                                    <td><?= $pecah['pemesanan_tgl'] ?></td>
                                    <td><?= $pecah['pemesanan_provinsi'] ?></td>
                                    <td><?= $pecah['pemesanan_distrik'] ?></td>
                                    <td><?= $pecah['pemesanan_alamatlengkap'] ?></td>
                                    <td><?= $pecah['pemesanan_kurir'] ?></td>
                                    <td><?= number_format($pecah['pemesanan_total']) ?></td>
                                    <td>
                                        <a class="btn btn-info btn-sm btn-block mb-2" href="index.php?page=pages/transaksi/detail_pemesanan&iddetail=<?= $pecah['pemesanan_id'] ?>">Detail Pemesanan</a>
                                        <a class="btn btn-warning btn-sm btn-block mb-2" href="index.php?page=pages/member/edit_member&idedit=">Edit</a>
                                        <a class="btn btn-danger btn-sm btn-block" href="index.php?page=pages/member/hapus_member&idhapus=">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>