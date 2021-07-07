<!DOCTYPE html>
<html>
<head>
	<title>Senarai Peserta</title>
</head>
<body>

	<?php
require('config.php');
//code
?>
<hr>
 <div id="nav">
<table align="center">
<p align="center">Senarai Nama Peserta</p>
       
        <td align="center" bgcolor="skyblue">Nama Peserta</td>
		<td align="center" bgcolor="skyblue">Email Peserta</td>
		<td align="center" bgcolor="skyblue">No Tel</td>
		<td align="center" bgcolor="skyblue">slot</td>
		
		
	</div>

<?php
$result=mysqli_query($link,"SELECT * FROM name ");
while($array=mysqli_fetch_array($result)){
	$nama=$array['nama'];
	echo "<tr>";
	echo "<td><center>".$array['nama']."</center></td>";
	echo "<td><center>".$array['email']."</center></td>";
	echo "<td><center>".$array['no tel']."</center></td>";
	echo "<td><center>".$array['slot']."</center></td>";



}
echo "</table>";
?>
<hr>
<h3><center><a href="register.php">Daftar Peserta</a></center></h3>||

</body>
</html>

