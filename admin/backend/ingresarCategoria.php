<?php

$categoria = $_POST['nombre_categoria'];

if($categoria == ''){
    $response = array('result'=>false , 'message'=>'categoría vacia');
    die(json_encode($response));
}

require '_conexion.php';

$insert = mysqli_query($mysqli,"INSERT INTO categorias (categoria)
VALUES ('$categoria' )");

if($insert){

    $response = array('result'=>true , 'message'=>'Categoría añadida correctamente');

}else{

    $response = array('result'=>false , 'message'=>'Ha ocurrido un error intenté más tarde');   

}

echo json_encode($response);
mysqli_close($mysqli);

?>

