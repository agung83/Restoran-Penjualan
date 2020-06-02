<?php
$idhapus = $_GET['idhapus'];
$db->HapusDataMember($idhapus);

echo "
<script>
alert('data berhasil dihapus')
window.location='index.php?page=pages/member/index'
</script>";
