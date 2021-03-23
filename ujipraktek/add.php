<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Id</td>
				<td><input type="text" name="Id"></td>
			</tr>
			<tr> 
				<td>Judul</td>
				<td><input type="text" name="Judul"></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="Harga"></td>
			</tr>
			<tr> 
				<td>Gambar</td>
				<td><input type="text" name="Gambar"></td>
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
		$Id = $_POST['Id'];
		$Judul = $_POST['Judul'];
		$Harga = $_POST['Harga'];
		$Gambar = $_POST['Gambar'];
		
		// include database connection file
		include ("config.php");
				
		// Insert user data into table
		$sql = "INSERT INTO produk (Id, Judul, Harga, Gambar)
          VALUES ('$Id', '$Judul', '$Harga', '$Gambar')";

          $query = mysqli_query($connect, $sql);
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>