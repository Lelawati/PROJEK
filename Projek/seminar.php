<!DOCTYPE html>
<html>
<head>
	<title>SEMINAR INFO PAGE</title>
</head>
<style type="text/css">
	body {
		padding-top: 30px;
		background-color: #657cc3;
	}
	.table1 {
		width: 100%;
		margin: 0 auto;
		background-color: pink;
	}

	}
	.table2 {
		width: 100%; 
		border: 5px solid black; 
		border-radius: 5px;
	}

	img {
		width: 180px;
	
    }

     #navbar>li
    {width: 190px ; float ;text-align: center;}

	li a
	{
	background-color: cyan;
	display:block;
	text-decoration: none;
	color :black;
	line-height: 50px;
	 }
	 li>a:hover{background: #cf1b27;}	

    .footer {
		background-color: black; 
		color: white; 
		height: 50px;
		text-align: center;
		size: 16px;
	
   
	}
	


</style>

<body>
<center>	


	<table align="center" bgcolor="pink">	
	<table class="table1" cellspacing="0">
		<tr>
			<td width="10%"><img src="logo.jpg"></td>
		
			<td style="width: 900px; background-image: url('banner.jpg');"><h1><center>~Seminar Info Page</center></h1></td>	
</tr>
<?php
require('config.php');
//code
?>

<td>
<center>
<tr>
	<td colspan="2">
	<p><center><h3>Tajuk : Seminar Bagaimana Menjana RM8000 Sebulan Di Shopee</h3></p></center>
    <p><center><h3>Pengarah : Tuan Rahman Basri</h3></center></p>
    <p><center><h3>Harga : RM69</h3></center></p>
   <p><tr>
		<td colspan="3">
		<center> Slot <select type="text" name=" Slot " required>
		<option value="Slot 1">24 JUN 2021 ,10 AM </option>
    	<option value="Slot 2">30 JUN 2021 ,10 AM   </option>
    	<option value="Slot 3">1 JULAI 2021 ,10 AM    </option>
    	
  		</select><br><br></td></p></tr>



	</tr>
	<tr>
	<td colspan="3">
	<center><li><a href="register.php">Daftar disini</a></li></center>
	</td></center>

<tr class="footer">
<td colspan="2" align ="center">
<p>CONTACT US IF YOU HAVE ANYTHING TO ASK</p>
<p>No Tel - 082-887878</p>
<p>Email -rahman1234@gmail.com </p>
<p> 2021</p>
<p></p>
</td>
</tr>


	</tr></p></p>
	</td>
	</tr>
	</center>
	</td></table></table></center></body></html>
