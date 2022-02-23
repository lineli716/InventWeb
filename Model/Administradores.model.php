<?php
    class Administradores 
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function CrearProducto($idControl, $idUsuarios, $idMarcas, $idCategoria, $Nombre,$Descripcion,$Precio,$Cantidad)
        {
            $con = new Conexion();
            $consulta=$con->query("INSERT INTO `productos`(`idProductos`, `Control_idControl`, `Usuarios_idUsuario`, `Marcas_idMarcas`, `Categoria_idCategoria`, `Nombre`, `Descripción`, `Precio`, `Cantidad`);";
            $this->con->close();
            return $consulta;
        }

    }
?>