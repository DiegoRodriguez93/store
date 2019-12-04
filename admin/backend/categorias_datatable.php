<?php

require '_conexion.php';

$query = mysqli_query($mysqli,"SELECT * FROM categorias");

$count_rows = mysqli_num_rows($query);

if($count_rows > 0){

    while($row = mysqli_fetch_array($query)){


        $id = $row['id'];
        $categoria = $row['categoria'];
    
        $btn_editar     = '<button class="btn btn-primary" onclick="editarCategoria('.$id.',`'.$categoria.'`)"><i class="fas fa-pen "></i></button>'; 
        $btn_eliminar   = "<button class='btn btn-danger' onclick='eliminarCategoria(".$id.")'><i class='fas fa-trash'></i>"."</button>";
    
        $response[] = array($btn_editar, $categoria, $btn_eliminar);
    }
    
}else{
    $response = array();
}


echo '{ "data": '. json_encode($response) . '} ';

mysqli_close($mysqli);