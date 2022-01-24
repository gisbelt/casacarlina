<?php
// session_start();
// Interaccion con la base de datos 
class inicio{

    public $id_categoria;
    public $categoria;

    public $id_articulos;
    public $nombre_articulo;
    public $codigo_articulo;
    public $descripcion;
    public $precio_venta;
    public $imagen;
    public $cantidad;
    public $estado;
    
    // Creamos un constructor que nos va a ayudar a recibir informacion 
    // Y que la consulta se cree a partir de objetos
    // Creará lista de objetos para poder leer la informacion 
    public function  __construct($categoria,$id_articulos,$nombre_articulo,$codigo_articulo,$descripcion,$precio_venta,$imagen,$cantidad,$estado){
        // $this->id_categoria=$id_categoria;
        $this->categoria=$categoria;
        $this->id_articulos=$id_articulos;
        $this->nombre_articulo=$nombre_articulo;
        $this->codigo_articulo=$codigo_articulo;
        $this->descripcion=$descripcion;
        $this->precio_venta=$precio_venta;
        $this->imagen=$imagen;
        $this->cantidad=$cantidad;
        $this->estado=$estado;
    }

    public static function consultarArticulos(){
        $listaArticulos=[]; //Arreglo para almacenar todos los empleados que vamos a recuperar de la base de datos
        $conexionBD=BD::crearInstancia();
        // $sql=$conexionBD->query("SELECT categoria.categoria, articulos.id_articulos, articulos.nombre_articulo, articulos.codigo_articulo, articulos.descripcion, articulos.precio_venta, articulos.imagen, articulos.cantidad, articulos.estado FROM articulos INNER JOIN categoria ON categoria.id_categoria=articulos.id_categoria WHERE articulos.descuento='20%' ");
        $sql=$conexionBD->query("SELECT categoria.categoria, articulos.id_articulos, articulos.nombre_articulo, articulos.codigo_articulo, articulos.descripcion, articulos.precio_venta, articulos.imagen, articulos.cantidad, articulos.estado FROM articulos INNER JOIN categoria ON categoria.id_categoria=articulos.id_categoria WHERE articulos.estado='Activo' limit 9");
        // recuperar la información para almacenarla en la lista 
        // fetchAll va a tener todos los registros y lo vamos a recibir como si fuera uno 
        foreach($sql->fetchAll() as $articulos){
            $listaArticulos[]=new inicio($articulos['categoria'],$articulos['id_articulos'],$articulos['nombre_articulo'],$articulos['codigo_articulo'],$articulos['descripcion'],$articulos['precio_venta'],$articulos['imagen'],$articulos['cantidad'],$articulos['estado']);
        }
        return $listaArticulos;
    }

    public static function consultarArticulosDescuento(){
        $listaArticulosDes=[]; //Arreglo para almacenar todos los empleados que vamos a recuperar de la base de datos
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT categoria.categoria, articulos.id_articulos, articulos.nombre_articulo, articulos.codigo_articulo, articulos.descripcion, articulos.precio_venta, articulos.imagen, articulos.cantidad, articulos.estado FROM articulos INNER JOIN categoria ON categoria.id_categoria=articulos.id_categoria WHERE articulos.descuento='20%' ");
        // recuperar la información para almacenarla en la lista 
        // fetchAll va a tener todos los registros y lo vamos a recibir como si fuera uno 
        foreach($sql->fetchAll() as $articulos){
            $listaArticulosDes[]=new inicio($articulos['categoria'],$articulos['id_articulos'],$articulos['nombre_articulo'],$articulos['codigo_articulo'],$articulos['descripcion'],$articulos['precio_venta'],$articulos['imagen'],$articulos['cantidad'],$articulos['estado']);
        }
        return $listaArticulosDes;
    }

    public static function crear($id_categoria, $codigo_articulo, $nombre_articulo, $descripcion, $precio_venta, $cantidad, $estado){
        $conexionBD=BD::crearInstancia();
        // $sql= $conexionBD->prepare("INSERT INTO articulos (id_articulos, id_categoria, codigo_articulo, nombre_articulo, descripcion, precio_venta, imagen, cantidad, estado) VALUES (:id_articulos, :id_categoria, :codigo_articulo, :nombre_articulo, :descripcion, :precio_venta, :imagen, :cantidad, :estado)");
        $sql= $conexionBD->prepare("INSERT INTO articulos (`id_categoria`, `codigo_articulo`, `nombre_articulo`, `descripcion`, `precio_venta`, `cantidad`, `estado`) VALUES (?,?,?,?,?,?,?)");
        $sql->execute(array($id_categoria,$codigo_articulo, $nombre_articulo, $descripcion, $precio_venta, $cantidad, $estado));
    }

    public static function borrar($id_articulos){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("DELETE FROM articulos WHERE id_articulos=?");
        $sql->execute(array($id_articulos));
    }

    public static function buscar($id_articulos){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("SELECT categoria.categoria, articulos.id_articulos, articulos.nombre_articulo, articulos.codigo_articulo, articulos.descripcion, articulos.precio_venta, articulos.imagen, articulos.cantidad, articulos.estado FROM articulos INNER JOIN categoria ON categoria.id_categoria=articulos.id_categoria WHERE id_articulos=?");
        $sql->execute(array($id_articulos));
        // recuperar registro 
        $articulos=$sql->fetch();
        return new articulos($articulos['categoria'],$articulos['id_articulos'],$articulos['nombre_articulo'],$articulos['codigo_articulo'],$articulos['descripcion'],$articulos['precio_venta'],$articulos['imagen'],$articulos['cantidad'],$articulos['estado']);

    }

    public static function editar($id,$nombre,$correo){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("UPDATE empleados SET nombre=?, correo=? WHERE id=?");
        $sql->execute(array($nombre,$correo,$id));


    }

}
?>