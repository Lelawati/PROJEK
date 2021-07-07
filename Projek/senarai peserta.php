<!--membuat sambungan ke db-->
<?php
	include('config.php');
?>
<html>
	<head>
	<title>Rekod senarai peserta</title>
	</head>
	<style>
	h2 {
		text-align: center;
		padding-top: 20px;
	}
	body {
		background-color: #ddd4c1;
	}
	</style>
   

	<body>
	<h2>REKOD SENARAI PESERTA</h2>
	<center>
	<table border=1 cellpadding=5 cellspacing=0 bgcolor=#b4f0ea>
		<tr>
		
		<th>NAMA PESERTA</th>
		<th>E-MAIL</th>
		<th>NO-TELEFON</th>
		<th>SLOT</th>
		<th>PADAM</th>
		<th>EDIT</th>
		</tr>
	  
		<!--memaparkan rekod PELAJAR-->
		<?php
	    
		$papar=mysqli_query($connect, "SELECT * FROM peserta");
		while($row=mysqli_fetch_array($papar)){
			 
		echo "
		<tr>
			<td>".$row['nama_peserta']."</td>
			<td>".$row['email']."</td>
			<td>".$row['notelefon']."</td>
			<td>".$row['slot']."</td>

		
			
			<td>","<a  href=\"padam peserta.php?nama_peserta=".$row['nama_peserta']. "\" Onclick=\"return confirm('Rekod ini akan dihapuskan')\">Padam</td>

          <td>","<a  href=\"edit peserta.php?nama_peserta=".$row['nama_peserta']. "\" Onclick=\"return confirm('Rekod ini akan diedit')\">Edit</td>
				
		</tr>
		";
		
		}
		?>		  
	</table>
	<p><a href="SEMINAR INFO PAGE.php"><button name='Simpan'type="submit">Simpan</button></a></p>
	
	</center>
	</body>
</html>