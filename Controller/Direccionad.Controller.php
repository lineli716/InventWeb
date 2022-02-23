<?php
    Class Direccionad
    {
        public $smarty;
        public $Admin;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->Admin = new Administrador();

        }

        public function ProductosIn()
        {
            $this->smarty->assign('nav', 'Administrador');
            $this->smarty->assign('rol','ProductosIn');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

        public function VerInventario()
        {
            $ct=$this->secretaria->VerInventario();
            $arr=array();
            while($row=mysqli_fetch_assoc($ct))
            {
                array_push($arr,$row);
            }
            $this->smarty->assign('cita', $arr);
            $this->smarty->assign('nav','secretaria');
            $this->smarty->assign('rol','vercitas');
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Secretaria.tpl');
        }
    }




?>