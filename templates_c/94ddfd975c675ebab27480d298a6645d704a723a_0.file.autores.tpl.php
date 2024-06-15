<?php
/* Smarty version 4.5.2, created on 2024-06-14 23:47:54
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\autores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_666cba8abbf383_98491214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ddfd975c675ebab27480d298a6645d704a723a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\autores.tpl',
      1 => 1718401105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_666cba8abbf383_98491214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container col-12">
      <table class="table table-success table-striped mt-2 text-center">
        <thead>
          <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nacimiento</th>
          <th scope="col">Libros</th>
          
       
        </tr>
        </thead>
      <tbody>
    
  
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['a']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['a']->value->apellido;?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['a']->value->nacimiento;?>
 </td>
           <td>
              <a href='verunAutorLibros/<?php echo $_smarty_tpl->tpl_vars['a']->value->id_autor1;?>
' action='libros' class='btn btn-success'>Ver libros del autor</a> 
              <a href='eliminarAutor/<?php echo $_smarty_tpl->tpl_vars['a']->value->id_autor1;?>
' action='libros' class='btn btn-success'>Borrar </a> 
              <a href='insertarAutor/<?php echo $_smarty_tpl->tpl_vars['a']->value->id_autor1;?>
' action='autores' class='btn btn-success'>Insertar Autor</a> 
              <a href='verunAutorLibros/<?php echo $_smarty_tpl->tpl_vars['a']->value->id_autor1;?>
' action='libros' class='btn btn-success'>Editar Autor</a> 

            
              </td>
          </tr>
           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           <a href="libroTabla" class="btn btn-primary">Volver al inicio</a>
            
           <?php $_smarty_tpl->_subTemplateRender("file:finHtml.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }
}
