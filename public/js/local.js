$(document).ready(function(){

    // Quitar elemento del carrito sin actualizar página 
    var quitar_carrito = $('.quitar_carrito');
    quitar_carrito.on('click',function( ){
        // Obtenemos el id del botón quitar_carrito
        var id = $(this).attr('id');
        var dataString = 'id='+id;

        var ajax = $.ajax({
            // La direccion del servidor, peticion al fichecero mysql 
            url: "?controlador=carrito&accion=quitarcarrito",
            type: 'POST',
            data: dataString,
            // Para obtener la respuesta 
            success: function(data){
                $("#articulo" + id).remove();
            },
            // para capturar el error 
            error: function(data, status, error){
                alert("no encontrado");
            }
        })
    })

    // ************************************************ 

});