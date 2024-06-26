<?php
/* Smarty version 4.5.2, created on 2024-06-25 04:30:42
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\formAddAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_667a2bd254c9f5_65176279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd692f133b32f86820002f897cd7a26b5f3740929' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\formAddAutor.tpl',
      1 => 1719282488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
  ),
),false)) {
function content_667a2bd254c9f5_65176279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="col-3 m-auto formAddAutor" action="insertarAutor" method="POST">
    
      <legend class="text-center">Agregar Autor</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del autor</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
      <label class="form-label">Apellido del autor</label>
      <input type="text" name="apellido" class="form-control" placeholder="Ingrese apellido">
    </div>
      <div class="mb-3">
        <label class="form-label">Fecha de nacimiento </label>
        <input type="date" name="nacimiento" class="form-control" placeholder="Ingrese fecha de nacimiento">
      </div>
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>
    <?php }
}
