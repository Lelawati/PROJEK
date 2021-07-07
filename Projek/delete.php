<?php
include 'config.php';
$nama=$_GET['nama'];
$result=mysqli_query($link, "delete from name where nama=$nama");
echo "<script>alert('Hapus maklumat berjaya');
window.location='senarai_peserta.php'</script>";
?>
?>