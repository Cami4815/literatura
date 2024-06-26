<?php
/* Smarty version 4.5.2, created on 2024-06-26 04:40:14
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\editarAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_667b7f8e8962a6_54739267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a3908af2814d909dd4c3b6fff5cdfdac852275' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\editarAutor.tpl',
      1 => 1719369610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
  ),
),false)) {
function content_667b7f8e8962a6_54739267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="col-3 m-auto" action="verificarAutor" method="POST">
<input type="text" name="id" class="form-control " value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->id_autor1;?>
" hidden/>
    
      <legend class="text-center">Editar Autor</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del autor</label>
        <input type="text" name="nombre" class="form-control " value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
">
      </div>
      <div class="mb-3">
        <label class="form-label">apellido </label>
        <input type="text" name="apellido" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->apellido;?>
" >
      </div>
      <div class="mb-3">
        <label class="form-label">Fecha de nacimiento</label>
        <input type="date" name="nacimiento" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->nacimiento;?>
">
      </div>

     
      <button class="btn btn-primary col-12">Submit</button>
  </form>
<?php }
}
