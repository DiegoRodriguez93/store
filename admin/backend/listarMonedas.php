<?php

require '_conexion.php';

$query = mysqli_query($mysqli,"SELECT * FROM monedas");

$count_rows = mysqli_num_rows($query);

if($count_rows > 0){

    while($row = mysqli_fetch_array($query)){


        $id = $row['id'];
        $moneda = $row['moneda'];
    
        $response[] = array('id'=>$id,'moneda'=>$moneda);
    }
    
}else{
    $response[] = array('id'=>'','moneda'=>'No hay monedas disponibles');
}

echo json_encode($response);

mysqli_close($mysqli);

?>