<?php

$id = $_POST['id'];

if($id == ''){
    $response = array('result'=>false , 'message'=>'Ha ocurrido un error intenté más tarde');
    die(json_encode($response));
}

require '_conexion.php';

$delete = mysqli_query($mysqli,"DELETE FROM categorias WHERE id = '$id' ");

if($delete){

    $response = array('result'=>true , 'message'=>'Categoría eliminada correctamente');

}else{

    $response = array('result'=>false , 'message'=>'Ha ocurrido un error intenté más tarde');   

}

echo json_encode($response);
mysqli_close($mysqli);

?>

