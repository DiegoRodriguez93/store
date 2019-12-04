const tablec = $('#TableC').DataTable({
    ajax: 'backend/categorias_datatable.php',
    "language": {
        "url": "json/spanish .json"
    }
});


function eliminarCategoria($id){

    var confirmDelete = confirm("¿Esta seguro que desea eliminar la categoría?");

    if (confirmDelete == true) {

        $.ajax({
            type: "POST",
            url: "backend/eliminarCategoria.php",
            data: {id:$id},
            dataType: "JSON",
            success: function (res) {
                if(res.result){
                    tablec.ajax.reload();
                }else{
                    alert(res.message);
                }
            }
        });

	} 

}

function editarCategoria($id, $categoria){
    
var opcion = prompt("Editar el nombre:", $categoria);
 
if (opcion == null || opcion == "" || opcion == $categoria ) {
       return false;
        }else{

            $.ajax({
                type: "POST",
                url: "backend/editarCategoria.php",
                data: {id: $id,
                       categoria: opcion},
                dataType: "JSON",
                success: function (res) {
                    if(res.result){
                        tablec.ajax.reload();
                    }else{
                        alert(res.message);
                    }
                }
            });

        }

}


$(document).ready(function(){

    $('#categorias').attr('class','activado');

    $('#form_categorias').on('submit',function(e){

        e.preventDefault();

        if($('#nombre_categoria').val().length < 1 ){
            alert('Debes ingresar un nombre de categoria válido');
            return false;
        }

        $.ajax({
            type: "POST",
            url: "backend/ingresarCategoria.php",
            data: $('#form_categorias').serialize(),
            dataType: "JSON",
            success: function (res) {
                if(res.result){
                    alert(res.message);
                    $('#form_categorias').trigger('reset');
                    tablec.ajax.reload();
                }else{
                    alert(res.message);
                }
            }
        });

    });

/*    var tablec = $('#TableC').DataTable({
        ajax: 'backend/categorias_datatable.php'
    }); */

});