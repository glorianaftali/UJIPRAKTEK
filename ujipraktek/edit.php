<?php
// include database connection file
include ("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$Id=$_POST['Id'];
	$Judul=$_POST['Judul'];
	$Harga=$_POST['Harga'];
    $Gambar=$_POST['Gambar'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET Id='$Id',Judul='$Judul',Harga='$Harga',Gambar='$Gambar' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$Id = $user_data['Id'];
	$Judul = $user_data['Judul'];
	$Harga = $user_data['Harga'];
    $Gambar = $user_data['Gambar'];
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
				<td>Id</td>
				<td><input type="text" name="Id" value=<?php echo $Id;?>></td>
			</tr>
			<tr> 
				<td>Judul</td>
				<td><input type="text" name="Judul" value=<?php echo $Judul;?>></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="Harga" value=<?php echo $Harga;?>></td>
			</tr>
            <tr> 
				<td>Gambar</td>
				<td><input type="text" name="Gambar" value=<?php echo $Gambar;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="Id" value=<?php echo $_GET['Id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>