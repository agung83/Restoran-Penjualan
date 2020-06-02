<?php
$idhapus = $_GET['idhapus'];

$db->HapusKategori($idhapus);
echo "
 <script>
 alert('Data Berhasil di hapus');
 window.location='index.php?page=pages/katmakanan/index'
 </script>";
