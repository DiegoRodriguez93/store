<?php 

require '_conexion.php';

<<<<<<< HEAD
$select = mysqli_query($mysqli,"SELECT * FROM productos as p 
LEFT JOIN categorias as c
ON p.id_categoria = c.id
limit 8");
=======
$select = mysqli_query($mysqli,"SELECT * FROM productos as p
 LEFT JOIN categorias as c ON p.id_categoria = c.id  
 LEFT JOIN monedas as m ON p.id_moneda = m.id
LIMIT 8");
>>>>>>> v0.0.2

while($row = mysqli_fetch_array($select)){

$nombre         = $row['nombre'];
$categoria      = $row['categoria'];
$descripcion    = $row['descripcion'];
<<<<<<< HEAD
$id_moneda      = $row['id_moneda'];
$precio         = $row['precio'];
$pathimage      = $row['pathimage'];

$response[] = array('nombre'=>$nombre,'categoria'=>categoria,'descripcion'=>$descripcion,'id_moneda'=>$id_moneda,
=======
$moneda         = $row['moneda'];
$precio         = $row['precio'];
$pathimage      = $row['pathimage'];

$response[] = array('nombre'=>$nombre,'categoria'=>$categoria,'descripcion'=>$descripcion,'moneda'=>$moneda,
>>>>>>> v0.0.2
'precio'=>$precio,'pathimage'=>$pathimage);

}

echo json_encode($response);
mysqli_close($mysqli);

?>