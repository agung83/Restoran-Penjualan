<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Member</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Member</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Nohp</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Tgl Daftar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $data_member =  $db->tampilDataMember();
                        foreach ($data_member as $no => $sql) :
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $sql['member_nama'] ?></td>
                                <td><?= $sql['member_jk'] ?></td>
                                <td><?= $sql['member_email'] ?></td>
                                <td><?= $sql['member_nohp'] ?></td>
                                <td><?= $sql['member_username'] ?></td>
                                <td><?= $sql['member_password'] ?></td>
                                <td><?= $sql['member_tgldaftar'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="index.php?page=pages/member/edit_member&idedit=<?= $sql['member_id'] ?>">Edit</a>
                                    <a class="btn btn-danger" href="index.php?page=pages/member/hapus_member&idhapus=<?= $sql['member_id'] ?>">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>