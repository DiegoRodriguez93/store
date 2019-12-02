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
        <div class="row">
          <div class="col-lg-4 sm-12"></div>
          <div class="col-lg-4 sm-12">
            <form id="form_categorias">
              <div class="text-center">
                <h5>Ingresar nueva categoría</h5>
              </div>
              <input required class="form-control" autocomplete="false" id="nombre_categoria" name="nombre_categoria" type="text">
              <div class="text-center">
                <input type="submit" class="btn btn-success my-1" value="Ingresar">
              </div>
            </form>
          </div>
          <div class="col-lg-4 sm-12"></div>
        </div>

        <div class="col-12 mt-4">
          <div class="text-center">
            <h4>Lista de categorías</h4>
            <!-- DATATABLE HERE -->
            <table id="TableC" class="table table-bordered mt-4 mx-auto" style="width:100%; margin-top:8%;">
              <thead>
                <tr>
                  <th style="width:5%">Editar</th>
                  <th style="width:33%">Nombre</th>
                  <th style="width:5%">Eliminar</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="../lib/js/jquery-3.4.1.min.js"></script>
  <script src="../lib/js/bootstrap.min.js"></script>
  <script src="../lib/js/popper.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="js/categorias.js"></script>

</body>

</html>