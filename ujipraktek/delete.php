<?php 
include ('config.php');

if (isset($_GET['Id'])) {
    header('Location: Index.php');
}
 

$id = $_GET['Id'];
 
$sql = "DELETE FROM produk WHERE id=$id";
$query = mysqli_query($connect,$sql);
 
if ($query){
header('Location: Index.php');
} else {
    header('Location: delete.php?status=gagal');
}
?>
