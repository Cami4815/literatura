<?php
/* Smarty version 4.5.2, created on 2024-06-25 05:14:39
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\libro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_667a361fbdebc9_28751270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c178db54900cb2269a62f2b5d8b069b57827151' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\libro.tpl',
      1 => 1719285140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_667a361fbdebc9_28751270 (Smarty_Internal_Template $_smarty_tpl) {
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
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->fecha_publicacion;?>
 </td>
              <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->genero;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->precio;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->cantidad_pag;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->id_autor;?>
</td> 
      
           </tr>
        </tbody>
     </table>
    </div>



<?php $_smarty_tpl->_subTemplateRender('file:finHtml.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
