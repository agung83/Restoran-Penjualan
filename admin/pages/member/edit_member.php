<?php
$idedit = $_GET['idedit'];
$member = $db->ambilIdMember($idedit)[0];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $db->EditMember($_POST);

    echo "
<script>
alert('data berhasil dirubah')
window.location='index.php?page=pages/member/index'
</script>";
}

?>
<div class="container">

    <div class="card mb-3  " style="width: 100%; ">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Data Member </div>
        <div class="card-body ">

            <form action="" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $member['member_id'] ?>">

                <div class="form-group">
                    <label for="name">Nama Member</label>
                    <input class="form-control " type="text" name="nama" value="<?= $member['member_nama'] ?>" placeholder="Nama">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="price">Jenis Kelamin</label>
                    <select name="jk" id="" class="form-control">
                        <option value=" <?= $member['member_jk'] ?>"> <?= $member['member_jk'] ?> </option>
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <div class="invalid-feedback">

                    </div>
                </div>


                <div class="form-group">
                    <label for="name">Email</label>
                    <input class="form-control" type="email" value="<?= $member['member_email'] ?>" name="email" placeholder="Email">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">No Handphone</label>
                    <input class="form-control" type="number" name="nohp" value="<?= $member['member_nohp'] ?>" placeholder="Nohp">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Username</label>
                    <input class="form-control " type="text" name="username" value="<?= $member['member_username'] ?>" placeholder="Username">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Password</label>
                    <input class="form-control " type="password" name="pass" value="<?= $member['member_password'] ?>" placeholder="Password">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Tgl Daftar</label>
                    <input class="form-control " type="date" value="<?= $member['member_tgldaftar'] ?>" name="tgl">
                    <div class="invalid-feedback">
                    </div>
                </div>
                <input class="btn btn-success btn-block" type="submit" name="ubah" value="Ubah">
            </form>


        </div>
    </div>



</div>