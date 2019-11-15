
<?php
include "Conexion_base_datos.php";
$id=$_GET['ID'];
$Tipo_Identificacion=$_GET['Tipo_Identificacion'];
$Numero_Identificacion=$_GET['Numero_Identificacion'];
$Nombre=$_GET['Nombre'];
$Telefono_Celular=$_GET['Telefono_Celular'];
$Producto_interes=$_GET['Producto_interes'];


if($Tipo_Identificacion!=null||$Numero_Identificacion!=null|| $Nombre!=null||
$Telefono_Celular!=null|| $Producto_interes!=null)
{
    $sql = "UPDATE cliente SET  Tipo_Identificacion='".$Tipo_Identificacion."', Numero_Identificacion= ".$Numero_Identificacion.", Nombre='".$Nombre."', Telefono_Celular= ".$Telefono_Celular.", Producto_interes= '".$Producto_interes."' WHERE ID= ".$id;
    mysqli_query($conn, $sql);
if($Tipo_Identificacion=1)
 {
    header("location:base_de_datos.php");
 }
}
?>


