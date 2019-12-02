<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Admin Panel</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-lg-2 mt-5">
<?php include 'include/nav.php'; ?>
</div>
<div class="col-lg-10 sm-12">
<div class="row mt-3"><div class="col-md-4"></div>
<div class="col-md-4 sm-12">
    <div class="text-center"><h4 class="d-inline">Ingresar nuevo producto </h4> <div id="close_btn" class="d-inline"><h4 class="d-inline">—</h4></div></div>
<form enctype="multipart/form-data" id="form_producto">
    <label for="">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre">

    <label for="">Categoria</label>
      <select class="form-control" name="categorias_select" id="categorias_select">
      </select>

    <label for="">Descripción (Opcional)</label>
<textarea name="descripcion" class="form-control" id="descripcion" rows="3"></textarea>

<br>
<label for="">Cargar imagen .jpg .png (Opcional)</label>
<input type="hidden" name="max_file_size" value="200000" />
<input name="fileToUpload" id='fileToUpload'  type="file" /><br><br>

<div class="row">
    <div class="col-4">
        <label for="">Moneda</label>
      <select class="form-control" name="moneda" id="moneda">
          <option value="1">$</option>
          <option value="2">U$S</option>
      </select>
    </div>
    <div class="col-8 ">
    <label for="">Precio</label>
      <input id="precio" name="precio" type="number" class="form-control" >
    </div>
  </div>

  <div class="text-center my-3">
      <input type="submit" class="btn btn-success" value="Ingresar">
  </div>

</form>
</div>
<div class="col-md-4"></div>
</div>
<div class="row mt-4"><div class="col-12"><div class="text-center"><h4>Lista de productos</h4></div>
 <!-- DATATABLE HERE -->
 <table id="TablaP" class="table table-bordered mt-4" style="width:100%; margin-top:8%;">
          <thead>
            <tr>
                <th style="width:5%" >Editar</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Moneda</th>
                <th>Precio</th>
                <th style="width:5%">Eliminar</th>
            </tr>
        </thead>
        <tbody >
        </tbody>
        </table>
</div></div>

</div>
</div>
</div></div>

<script src="../lib/js/jquery-3.4.1.min.js"></script>
<script src="../lib/js/bootstrap.min.js"></script>
<script src="../lib/js/popper.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="js/productos.js"></script>
<script>
$(document).ready(function(){
$('#productos').attr('class','activado');
});

$("#close_btn").on('click',function(){

    $("#close_btn").toggle();

  $("#form_producto").toggle();
});
</script>
</body>
</html>