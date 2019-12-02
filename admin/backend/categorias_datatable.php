<?php

require '_conexion.php';

$query = mysqli_query($mysqli,"SELECT * FROM categorias");

$count_rows = mysqli_num_rows($query);

if($count_rows > 0){

    while($row = mysqli_fetch_array($query)){


        $id = $row['id'];
        $categoria = $row['categoria'];
    
        $btn_editar     = '<button onclick="editarCategoria('.$id.',`'.$categoria.'`)">Editar</button>'; 
        $btn_eliminar   = "<button onclick='eliminarCategoria(".$id.")'>Eliminar"."</button>";
    
        $response[] = array($btn_editar, $categoria, $btn_eliminar);
    }
    
}else{
    $response = array();
}


echo '{ "data": '. json_encode($response) . '} ';

mysqli_close($mysqli);