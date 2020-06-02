<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Admin</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Admin</div>
        <div class="card-body">
            <a class="btn btn-primary mb-2" style="margin-top: -10px; " href="index.php?page=pages/admin/tambah_admin">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Admin</th>
                            <th>Username Admin</th>
                            <th>Password Admin</th>

                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $dataadmin = $db->tampilDataAdmin();
                        //var_dump($dataadmin);
                        foreach ($dataadmin as $no => $pecah) :
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $pecah['admin_nama'] ?></td>
                                <td><?= $pecah['admin_username'] ?></td>
                                <td><?= $pecah['admin_password'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="index.php?page=pages/admin/edit_admin&idedit=<?= $pecah['admin_id'] ?>">Edit</a>
                                    <a class="btn btn-danger" href="index.php?page=pages/admin/hapusadmin&idhapus=<?= $pecah['admin_id'] ?> ">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>