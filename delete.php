<?php
include 'connn.php';
$id=$_GET['id'];
$delete="delete from insdata where petid='$id'";
$delete_q=mysqli_query($conn,$delete);
header('location:view.php');

?>