<?php
$iddetail = $_GET['iddetail'];


?>
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Pemesanan</li>
        <li class="breadcrumb-item active">Detail Pemesanan</li>
    </ol>
    <h2>Detail Pemesanan</h2>




    <strong></strong> <br>
    <p>

    </p>

    <p>

    </p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>nama produk</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>subtotal</th>

            </tr>
        </thead>
        <tbody>
            <?php $barang = $db->ambilSatuidDetail($iddetail);

            foreach ($barang as $no => $pecah) :
                $subtotal = $pecah['barang_hargajual'] * $pecah['pembelian_jumlah'];
            ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $pecah['barang_nama'] ?></td>
                    <td><?= $pecah['barang_hargajual'] ?></td>
                    <td><?= $pecah['pembelian_jumlah'] ?></td>
                    <td>
                        <?= $subtotal; ?>
                    </td>
                </tr>
            <?php endforeach ?>


        </tbody>
    </table>
    <a href="javascript:window.print()" class="btn btn-success">cetak </a>

</div>