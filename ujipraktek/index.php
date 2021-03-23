<?php
include ('config.php');
$sql = "SELECT * FROM produk";
    $query = mysqli_query($connect, $sql);
?>
 
<html>
<head>
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Tambah Film</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Id</th> 
        <th>Judul</th> 
        <th>Harga</th> 
        <th>Gambar</th> 
        <th>Edit/Delete</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>".$user_data['Id']."</td>";
        echo "<td>".$user_data['Judul']."</td>";
        echo "<td>".$user_data['Harga']."</td>";
        echo "<td><img src='" . $user_data['Gambar'] . "'height='120' width='120' ></td>";
        echo "<td><a style='color: inherit 'href='edit.php?Id=$user_data[Id]'>Edit</a> | <a style='color: inherit ' href='delete.php?Id=$user_data[Id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>