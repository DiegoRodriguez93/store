$(document).ready(function(){

    /* RELLENAR CATEGORIAS */

    $.ajax({
        type: "GET",
        url: "backend/listarCategorias.php",
        dataType: "JSON",
        success: function(datos){
            $('#categorias_select').empty()
            $.each(datos, function(i, datos){
                
                var opt = "<option value='"+datos.id+"'><b>"+datos.categoria+"</option>";

                $(opt).appendTo("#categorias_select");
                
            });   
         } ,error:function(){
            $('#categorias_select').empty();
            $("<option>No se ha podido cargar las categorías en este momento</option>").appendTo("#categorias_select");
         }
        
        });

$("#fileToUpload").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ["image/jpeg","image/png","image/jpg"];

    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
        alert('Por favor seleccione un formato de imagen válido (JPEG/JPG/PNG).');
        $("#fileToUpload").val('');
        return false;
    }

    if(this.files[0].size > 307200){
        alert("El archivo es demasiado grande!");
        $("#fileToUpload").val('');
        return false;
     };
});

});
/* DOCUMENT READY END */

$('#form_producto').on('submit',function(e){
    
    e.preventDefault();

    if($('#nombre').val().length < 2){
        $('#nombre').attr('class','form-control is-invalid');
        return false;
    }else{
        $('#nombre').attr('class','form-control is-valid');
    }

    if($('#precio').val() < 1){
        $('#precio').attr('class','form-control is-invalid');
        return false;
    }else{
        $('#precio').attr('class','form-control is-valid');
    }

    if($("#fileToUpload").val() == ''){
        $('#fileToUpload').attr('class','form-control is-invalid');
        return false;
    }else{
        $('#fileToUpload').attr('class','form-control is-valid');
    }


/* var formData = new FormData($("#form_producto")[0]); */

$.ajax({
    url: "backend/uploadProducto.php",
    type: "POST",
    data : new FormData(this),
    processData: false,
    contentType: false,
    success: function(res){

        if(res.result){
            $('#form_producto').trigger('reset');
        }else{
            alert(res.message);
        }



    },
    error: function(xhr, ajaxOptions, thrownError) {
       console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
    }
});

});