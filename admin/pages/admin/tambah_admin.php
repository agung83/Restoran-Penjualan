<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // if (isset($_POST['save'])) {
    $db->tambahData($_POST);
    echo "     <script>alert('data berhasil disimpan')</script>";
    echo "     <script>window.location='index.php?page=pages/admin/index'</script>";
}
?>
<div class="container">
    <div class="card mb-3  " style="width: 100%; ">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Input Data Admin </div>
        <div class="card-body pl-5">

            <form action="" method="POST" style="width: 90%;" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="font-weight-bold">Nama Admin</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Username</label>
                    <input type="text" name="username" class="form-control" value="" required>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Password</label>
                    <input type="password" class="form-control" name="pass" required>
                </div>
                <button name="save" type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>