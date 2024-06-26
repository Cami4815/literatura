<?php
/* Smarty version 4.5.2, created on 2024-06-26 04:06:53
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\autor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_667b77bd2b2d48_84279519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a80479708f4bda469aa4fba7c74fb788a362e905' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\autor.tpl',
      1 => 1719367599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_667b77bd2b2d48_84279519 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<base href=<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literatura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="styles/styles.css">
<body>
<?php $_smarty_tpl->_subTemplateRender('file:inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="libroTabla" class="btn btn-primary">Volver al inicio</a>

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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autor']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['autor']->value->apellido;?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['autor']->value->nacimiento;?>
 </td>


             <td>
              <a href='verunAutorLibros/<?php echo $_smarty_tpl->tpl_vars['a']->value->id_autor1;?>
' action='libros' class='btn btn-success'>Ver libros del autor</a> 
              <a href='eliminarAutor/<?php echo $_smarty_tpl->tpl_vars['a']->value->id_autor1;?>
' action='libros' class='btn btn-success'>Borrar </a> 
             
              <a href='editarAutor/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id_autor1;?>
' class='btn btn-success'>Editar Autor</a> 
            
            
              </td>

              </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
     </table>
    </div>
    
<?php $_smarty_tpl->_subTemplateRender('file:finHtml.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
