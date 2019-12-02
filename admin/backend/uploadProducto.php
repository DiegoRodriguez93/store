<?php 

require '_conexion.php';

$target_dir = "../../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

if($check !== false) {
    // El archivo es una imagen
    $uploadOk = 1;
} else {

    $uploadOk = 0;
    $response = array('result'=>false,'message'=>'El archivo no es una image');
    die(json_encode($response));
}

if (file_exists($target_file)) {
    // El archivo ya existe
    $uploadOk = 0;
    $response = array('result'=>false,'message'=>'El archivo ya existe');
    die(json_encode($response));
}

if ($_FILES["fileToUpload"]["size"] > 307200) {
    // el arcivo es muy pesado
    $uploadOk = 0;
    $response = array('result'=>false,'message'=>'El archivo es muy pesado');
    die(json_encode($response));
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //Formatos de imagen permitidos
    $uploadOk = 0;
    $response = array('result'=>false,'message'=>'Formato de imagén no permitido');
    die(json_encode($response));
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk != 0) {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $ok = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $imagePath = basename( $_FILES["fileToUpload"]["name"]);
    } else {
        $response = array('result'=>false,'message'=>'Ha ocurrido un error intenté más tarde');
        die(json_encode($response));
    }

} else {

    $response = array('result'=>false,'message'=>'Ha ocurrido un error intenté más tarde');
    die(json_encode($response));

}

$nombre       = $_POST['nombre'];
$id_categoria = $_POST['categorias_select'];
$descripcion  = $_POST['descripcion'];
$id_moneda    = $_POST['moneda'];
$precio       = $_POST['precio'];

$insert = mysqli_query($mysqli,"INSERT INTO productos (nombre, id_categoria, descripcion, id_moneda, precio, pathimage) 
VALUES ('$nombre', '$id_categoria', '$descripcion', '$id_moneda', '$precio', '$imagePath' ) ");

if($insert){
    
    $response = array('result'=>true);
    die(json_encode($response));

}else{

    $response = array('result'=>false,'message'=>'Ha ocurrido un error intenté más tarde');
    die(json_encode($response));

}

mysqli_close($mysqli);

?>