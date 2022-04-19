<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$visi=$_POST['visi'];
	$misi=$_POST['misi'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE hmif_evoting SET nama='$nama',nim='$nim', visi='$visi', misi='$misi' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM hmif_evoting WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama=$user_data['nama'];
	$nim=$user_data['nim'];
	$visi=$user_data['visi'];
	$misi=$user_data['misi'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim" value=<?php echo $nim;?>></td>
			</tr>
			<tr> 
				<td>Visi</td>
				<td><input type="text" name="visi" value=<?php echo $visi;?>></td>
			</tr>
			<tr> 
				<td>Misi</td>
				<td><input type="text" name="misi" value=<?php echo $misi;?>></td>
			</tr>
		<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>