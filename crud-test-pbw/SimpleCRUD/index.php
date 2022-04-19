<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all hmif_evoting data from database
$result = mysqli_query($mysqli, "SELECT * FROM hmif_evoting ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <h1>Data Calon Ketua HMIF</h1>
<a href="add.php">+ Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nama</th> 
        <th>NIM</th> 
        <th>Visi</th> 
        <th>Misi</th>
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['visi']."</td>";    
        echo "<td>".$user_data['misi']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html> 