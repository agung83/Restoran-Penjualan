<?php 
$idhapus = $_GET['idhapus'];
 $db->HapusMakanan($idhapus);
echo "
 <script>
 alert('Data Berhasil di hapus');
 window.location='index.php?page=pages/barang/index'
 </script>";
