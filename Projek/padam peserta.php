<?PHP 
include ('config.php');
$nama_peserta=$_GET['nama_peserta']; 
$result=mysqli_query($connect,"delete from peserta where nama_peserta='$nama_peserta'");

header("location:senarai peserta.php");
?>