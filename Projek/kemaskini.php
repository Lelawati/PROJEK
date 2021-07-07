<?php
include 'config.php';
if (isset($_POST['submit'])) {

	$nama=$_POST['nama_peserta'];
	$email=$_POST['email']; 
	$notelefon=$_POST['notelefon'];
	$slot=$_POST['slot'];
	$updtquery="UPDATE nama SET nama_peserta='".$nama."', email='".$email."', 
		notelefon='".$notelefon."', 
		slot='".$slot."',  
		WHERE nama_peserta='".$nama."'";

if (mysqli_query($link,$updtquery)) {
echo "<script>alert('Berjaya Kemaskini maklumat $nama');
	window.location='SEMINAR INFO PAGE.html'</script>";
}
else{
echo "<script>alert('Kemaskini maklumat tidak berjaya');
	window.location='SEMINAR INFO PAGE.html'</script>";
}
}
?>