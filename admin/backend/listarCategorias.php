<?php

require '_conexion.php';

$query = mysqli_query($mysqli,"SELECT * FROM categorias");

$count_rows = mysqli_num_rows($query);

if($count_rows > 0){

    while($row = mysqli_fetch_array($query)){


        $id = $row['id'];
        $categoria = $row['categoria'];
    
        $response[] = array('id'=>$id,'categoria'=>$categoria);
    }
    
}else{
    $response[] = array('id'=>'','categoria'=>'No hay categorías disponibles');
}

echo json_encode($response);

mysqli_close($mysqli);

?>