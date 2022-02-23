<?php
    class Administrador
        {
            public $Admin;
            public $smarty;
            

            public function __construct()
            {
                $this->Admin=new Administradores();
                $this->smarty=new Smarty();
            }

            public function ProductosIn()
            {
                $rol=$_POST['rol'];
                $nombre=$_POST['nombre'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
               // $rol=$_POST['Rol_idRol'];

                $z=$this->Admin->CrearRegistro($rol, $nombre, $user, $pass);
                $this->smarty->assign('nav',"Administrador");
                $this->smarty->assign('title','Administrador');
                $this->smarty->display('Administrador/Productos.tpl');
            }
        }
?>