<?php
session_start();
include 'conn.php';

class Db extends conn
{
    //-------------------------------------------------CRUD ADMIN----------------------------------------------------//

    public function tampilDataAdmin()
    {

        $query = $this->ambilData("SELECT * FROM tbl_admin");
        return $query;
    }

    public function ambilSatuId($id)
    {
        $query = $this->ambilData("SELECT * FROM tbl_admin WHERE admin_id = '$id'");
        return $query;
    }

    public function tambahData($data)
    {
        global $koneksi;
        $nama_admin = $data['nama'];
        $username   = $data['username'];
        $password   = $data['pass'];

        $query = "INSERT INTO tbl_admin (admin_username,admin_password,admin_nama)
                                                                                VALUES 
                                                                                ('$nama_admin',
                                                                                '$username',
                                                                                '$password')";

        return $koneksi->query($query);
    }

    public function HapusData($id)
    {
        global $koneksi;
        $query =  "DELETE FROM tbl_admin WHERE admin_id = '$id'";

        return $koneksi->query($query);
    }

    public function editdata($data)
    {
        global $koneksi;
        $id         = $data['id'];
        $nama_admin = $data['nama'];
        $username   = $data['username'];
        $password   = $data['pass'];

        $query = "UPDATE tbl_admin SET      admin_nama     = '$nama_admin',
                                            admin_username = '$username',
                                            admin_password = '$password'
                                            WHERE admin_id = '$id'";

        return $koneksi->query($query);
    }
    //-------------------------------------------AKHIR DARI CRUD ADMIN---------------------------------------------//



    //----------------------------------------------CRUD KHUSUS MEMBER--------------------------------------------//
    public function tampilDataMember()
    {
        $query = $this->ambilData("SELECT * FROM tbl_member");
        return $query;
    }

    public function ambilIdMember($id)
    {
        $query =  $this->ambilData("SELECT * FROM tbl_member WHERE member_id = '$id'");
        return $query;
    }

    public function SaveMember($data)
    {
        global $koneksi;
        $nama     = $data['nama'];
        $jk       = $data['jk'];
        $email    = $data['email'];
        $nohp     = $data['nohp'];
        $username = $data['username'];
        $pass     = $data['pass'];
        $tgl      = $data['tgl'];

        $query = "INSERT INTO tbl_member   (member_nama,
                                            member_jk,
                                            member_email,
                                            member_nohp,
                                            member_username,
                                            member_password,
                                            member_tgldaftar) 
                                            VALUES 
                                                ('$nama',
                                                '$jk',
                                                '$email',
                                                '$nohp',
                                                '$username',
                                                '$pass',
                                                '$tgl')";
        return $koneksi->query($query);
    }

    public function HapusDataMember($id)
    {
        global $koneksi;
        $query = "DELETE FROM tbl_member WHERE member_id = '$id'";
        return $koneksi->query($query);
    }

    public function editmember($data)
    {
        global $koneksi;
        $id = $data['id'];
        $nama     = $data['nama'];
        $jk       = $data['jk'];
        $email    = $data['email'];
        $nohp     = $data['nohp'];
        $username = $data['username'];
        $pass     = $data['pass'];
        $tgl      = $data['tgl'];

        $query = "UPDATE tbl_member SET member_nama      = '$nama',
                                        member_jk        = '$jk',
                                        member_email     = '$email',
                                        member_nohp      = '$nohp',
                                        member_username  = '$username',
                                        member_password  = '$pass',
                                        member_tgldaftar = '$tgl'
                                        WHERE member_id = '$id'";
        return $koneksi->query($query);
    }
    //--------------------------------------------AKHIR DARI CRUD MEMBER-------------------------------------------//

    //----------------------------------------------CRUD KHUSUS BARANG---------------------------------------------//

    public function TampilDataMakanan()
    {
        $query = $this->ambilData("SELECT * FROM tbl_barang");
        return $query;
    }

    public function AmbilsatuidMakanan($id)
    {
        $query =  $this->ambilData("SELECT * FROM tbl_barang a JOIN tbl_kategori b ON a.kategori_id=b.kategori_id WHERE barang_id = '$id'");
        return $query;
    }
    public function HapusMakanan($id)
    {
        global $koneksi;
        $query = "DELETE FROM tbl_barang WHERE barang_id = '$id'";
        return $koneksi->query($query);
    }

    public function SaveMakanan($data)
    {
        global $koneksi;
        $namabrg       = $data['nama'];
        $hargamodal    = $data['hargamodal'];
        $kategori      = $data['kategori'];
        $hargajual     = $data['hargajual'];
        $stok          = $data['stok'];
        $berat         = $data['berat'];
        $biayapesan    = $data['bpesan'];
        $biayasimpan   = $data['bsimpan'];
        $keterangan    = $data['keterangan'];

        $namagmbr = $_FILES['gambar']['name'];
        $lokasi   = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($lokasi, "images/barang/" . $namagmbr);

        $query = "INSERT INTO tbl_barang (barang_nama,
                                        kategori_id,
                                        barang_hargajual,
                                        barang_hargamodal,
                                        barang_stok,
                                        barang_biayapesan,
                                        barang_biayasimpan,
                                        barang_berat,
                                        barang_keterangan,
                                        barang_gambar) VALUES (
                                            '$namabrg',
                                            '$kategori',
                                            '$hargamodal',
                                            '$hargajual',
                                            '$stok',
                                            '$berat',
                                            '$biayapesan',
                                            '$biayasimpan',
                                            '$keterangan',
                                            '$namagmbr')";
        return $koneksi->query($query);
    }
    public function EditMakanan($data)
    {
        global $koneksi;
        $id            = $data['id'];
        $namabrg       = $data['nama'];
        $hargamodal    = $data['hargamodal'];
        $kategori      = $data['kategori'];
        $hargajual     = $data['hargajual'];
        $stok          = $data['stok'];
        $berat         = $data['berat'];
        $biayapesan    = $data['bpesan'];
        $biayasimpan   = $data['bsimpan'];
        $keterangan    = $data['keterangan'];

        $namagmbr = $_FILES['gambar']['name'];
        $lokasi   = $_FILES['gambar']['tmp_name'];

        if (!empty($lokasi)) {
            move_uploaded_file($lokasi, "images/barang/" . $namagmbr);
            $query = "UPDATE tbl_barang SET barang_nama        = '$namabrg',
                                        barang_hargajual   = '$hargajual',
                                        barang_hargamodal  = '$hargamodal',
                                        kategori_id        = '$kategori',
                                        barang_stok        = '$stok',
                                        barang_biayapesan  = '$biayapesan',
                                        barang_biayasimpan = '$biayasimpan',
                                        barang_berat       = '$berat',
                                        barang_gambar      = '$namagmbr',
                                        barang_keterangan  = '$keterangan' WHERE barang_id = '$id'";
        } else {
            $query = "UPDATE tbl_barang SET barang_nama        = '$namabrg',
                                        barang_hargajual   = '$hargajual',
                                        barang_hargamodal  = '$hargamodal',
                                        kategori_id        = '$kategori',
                                        barang_stok        = '$stok',
                                        barang_berat       = '$berat',
                                        barang_biayapesan  = '$biayapesan',
                                        barang_biayasimpan = '$biayasimpan',
                                        barang_keterangan  = '$keterangan' WHERE barang_id = '$id'";
        }

        return $koneksi->query($query);
    }
    //--------------------------------------------AKHIR DARI CRUD Makanan-------------------------------------------//

    //----------------------------------------------CRUD KHUSUS KATEGORI--------------------------------------------//
    public function TampilKategori()
    {
        $query = $this->ambilData("SELECT * FROM tbl_kategori");
        return $query;
    }

    public function AmbilSatuidKategori($id)
    {
        $query = $this->ambilData("SELECT * FROM tbl_kategori WHERE kategori_id = '$id'");
        return $query;
    }
    public function HapusKategori($id)
    {
        global $koneksi;
        $query = "DELETE FROM tbl_kategori WHERE kategori_id = '$id'";
        return $koneksi->query($query);
    }

    public function EditKategori($data)
    {
        global $koneksi;
        $idkat = $data['id'];
        $namakategori = $data['namakat'];

        $query = "UPDATE tbl_kategori SET kategori_nama = '$namakategori' WHERE kategori_id = '$idkat'";
        return $koneksi->query($query);
    }

    public function SaveKategori($data)
    {
        global $koneksi;
        $namakategori = $data['namakat'];
        $query = "INSERT INTO tbl_kategori (kategori_nama) VALUES ('$namakategori')";
        return $koneksi->query($query);
    }

    //--------------------------------------------AKHIR DARI CRUD KATEGORI-------------------------------------------//

    //----------------------------------------------CRUD KHUSUS TRANSAKSI--------------------------------------------//

    public function TampilTransaksi()
    {
        $query = $this->ambilData("SELECT * FROM tbl_pemesanan a JOIN tbl_member b ON a.member_id=b.member_id");
        return $query;
    }

    public function ambilSatuidDetail($id)
    {
        $query = $this->ambilData("SELECT * FROM tbl_pembelian_produk a JOIN tbl_barang b ON a.barang_id=b.barang_id WHERE a.pemesanan_id = '$id'");
        return $query;
    }

    //--------------------------------------------AKHIR DARI CRUD TRANSAKSI-------------------------------------------//

    public function login($data)
    {
        global $koneksi;
        $user = $data['username'];
        $pass  = $data['password'];

        $query = "SELECT * FROM tbl_admin WHERE admin_username = '$user' AND admin_password = '$pass'";

        $ambil = $koneksi->query($query);
        $validasi = $ambil->num_rows;

        if ($validasi >= 1) {
            session_start();

            $_SESSION['admin'] = $ambil->fetch_object();

            echo "
            <script>
            alert('Selamat Anda Berhasil Login');
            window.location='index.php';
            </script>";
        } else {
            echo " <script>
            alert('Login Gagal Silahkan Coba Lagi ');
            window.location='login.php';
            </script>";
        }
    }
}
