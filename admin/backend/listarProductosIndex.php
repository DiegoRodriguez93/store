<?php 

require '_conexion.php';

$select = mysqli_query($mysqli,"SELECT * FROM productos limit 8");

while($row = mysqli_fetch_array($select)){

$nombre         = $row['nombre'];
$id_categoria   = $row['id_categoria'];
$descripcion    = $row['descripcion'];
$id_moneda      = $row['id_moneda'];
$precio         = $row['precio'];
$pathimage      = $row['pathimage'];

$response[] = array('nombre'=>$nombre,'id_categoria'=>$id_categoria,'descripcion'=>$descripcion,'id_moneda'=>$id_moneda,
'precio'=>$precio,'pathimage'=>$pathimage);

}

echo json_encode($response);
mysqli_close($mysqli);

?>