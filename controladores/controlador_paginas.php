<?php
session_start();
include_once(".\modelos\carrito.php");
include_once(".\modelos\inicio.php");
include_once(".\modelos\conexion.php");

class controladorPaginas{
    // metodos
    public function inicio(){
        //si ese usuario de sesión tiene un valor, imprime esa información
        if($_SESSION['correo_cliente']=='ok'){
            $nombreUsuario=$_SESSION['nombreUsuario'];
        }
        
        //Buscar todos los artículos
        $articulos=inicio::consultarArticulos();
        //Buscar los artículos con 20% de descuento
        $articulosDes=inicio::consultarArticulosDescuento();

        $carrito=carrito::obtener_detalles_articulos_carrito();

        //Agregar al carrito
        if($_POST) {
            $id_articulos = $_POST["id_articulos"];
            carrito::agregar_al_carrito($id_articulos);
            header("location:?controlador=paginas&accion=inicio");
            // error aqui 
        }  
        
        // $productoYaEstaEnCarrito=carrito::obtener_id_articulos_carrito();
        

        include_once("vistas/paginas/inicio.php");
    }

    public function conteo_carrito(){
        // $conteo = count(carrito::obtener_id_articulos_carrito());
        include_once("vistas/template.php");
    }

    public function error(){
        include_once("vistas/paginas/error.php");
    }
}

?>