<?php
/* Smarty version 4.5.2, created on 2024-06-03 02:28:24
  from 'C:\xampp\htdocs\proyectos\literatura\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665d0e28228798_74284614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699839c7d287970ab07be04eec9a76324211e38b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\literatura\\templates\\libros.tpl',
      1 => 1717374497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_665d0e28228798_74284614 (Smarty_Internal_Template $_smarty_tpl) {
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
          <th scope="col">Fecha de publicacion</th>
          <th scope="col">Género</th>
          <th scope="col">Precio</th>
          <th scope="col">Cantidad de paginas</th>
          <th scope="col">Autor</th>
       
        </tr>
        </thead>
      <tbody>
    
  
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libro']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['l']->value->nombre;?>
</td>
           <td><?php echo $_smarty_tpl->tpl_vars['l']->value->fecha_publicacion;?>
 </td>
           <td><?php echo $_smarty_tpl->tpl_vars['l']->value->genero;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['l']->value->precio;?>
</td>
           <td><?php echo $_smarty_tpl->tpl_vars['l']->value->cantidad_pag;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['l']->value->id_autor;?>
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
