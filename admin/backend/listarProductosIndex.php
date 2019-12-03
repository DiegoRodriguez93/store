<?php 

require '_conexion.php';

$select = mysqli_query($mysqli,"SELECT * FROM productos as p
 LEFT JOIN categorias as c ON p.id_categoria = c.id  
 LEFT JOIN monedas as m ON p.id_moneda = m.id
LIMIT 8");

while($row = mysqli_fetch_array($select)){

$nombre         = $row['nombre'];
$categoria      = $row['categoria'];
$descripcion    = $row['descripcion'];
$moneda         = $row['moneda'];
$precio         = $row['precio'];
$pathimage      = $row['pathimage'];

$response[] = array('nombre'=>$nombre,'categoria'=>$categoria,'descripcion'=>$descripcion,'moneda'=>$moneda,
'precio'=>$precio,'pathimage'=>$pathimage);

}

echo json_encode($response);
mysqli_close($mysqli);

?>