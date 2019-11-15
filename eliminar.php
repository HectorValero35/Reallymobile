<?php
include 'Conexion_base_datos.php';
$id=$_GET['id'];
$sql="DELETE FROM cliente WHERE ID=".$id; 
mysqli_query($conn, $sql);
echo $id;
header("location:base_de_datos.php");
?>