<?php
/* Smarty version 4.0.4, created on 2022-02-23 07:19:15
  from 'C:\xampp\htdocs\InventWeb\InventWeb\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6215d1e342c368_01926338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7d395bdc6675d1673dfd9690d49dcc1718ebbad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventWeb\\InventWeb\\templates\\Cabeceras\\Header.tpl',
      1 => 1645597112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6215d1e342c368_01926338 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
   
 <title>
      <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

      <?php } else { ?>
        Inicio de Sesión
      <?php }?>
      </title>
       <body><?php }
}
