<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr> 
				<td>Visi</td>
				<td><input type="text" name="visi"></td>
			</tr>
			<tr> 
				<td>Misi</td>
				<td><input type="text" name="misi"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$visi = $_POST['visi'];
		$misi = $_POST['misi'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO hmif_evoting(nama,nim,visi,misi) VALUES('$nama','$nim','$visi','$misi')");
		
		// Show message when user added
		echo "User added successfully. <a R'>View Users</a>";
	}
	?>
</body>
</html>