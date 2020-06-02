<div class="container">

    <div class="card mb-3  " style="width: 100%; ">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Data Member </div>
        <div class="card-body ">

            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nama Member</label>
                    <input class="form-control " type="text" name="nama" placeholder="Nama">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="price">Jenis Kelamin</label>
                    <select name="jk" id="" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <div class="invalid-feedback">

                    </div>
                </div>


                <div class="form-group">
                    <label for="name">Email</label>
                    <textarea class="form-control" type="email" name="email" placeholder="Email"></textarea>
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">No Handphone</label>
                    <input class="form-control " type="number" name="nohp" placeholder="Nohp">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Username</label>
                    <input class="form-control " type="text" name="username" placeholder="Username">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Password</label>
                    <input class="form-control " type="password" name="pass" placeholder="Password">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Tgl Daftar</label>
                    <input class="form-control " type="date" name="tgl">
                    <div class="invalid-feedback">
                    </div>
                </div>
                <input class="btn btn-success btn-block" type="submit" name="save" value="Save">
            </form>
            <?php if (isset($_POST['save'])) {
                $db->SaveMember($_POST);

                echo "
            <script>
            alert('data berhasil disimpan')
            window.location='index.php?page=pages/member/index'
            </script>";
            } ?>

        </div>
    </div>



</div>