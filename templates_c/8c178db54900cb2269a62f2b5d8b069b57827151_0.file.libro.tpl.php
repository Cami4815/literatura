<?php
/* Smarty version 4.5.2, created on 2024-06-04 06:01:01
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\libro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665e917d0b4a89_60061208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c178db54900cb2269a62f2b5d8b069b57827151' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\libro.tpl',
      1 => 1717473651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_665e917d0b4a89_60061208 (Smarty_Internal_Template $_smarty_tpl) {
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

<form class="col-3 m-auto" action="verificarLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
" method="POST">
    
      <legend class="text-center">Editar libro</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del libro</label>
        <input type="text" name="nombre" class="form-control " value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
">
      </div>
      <div class="mb-3">
        <label class="form-label">Fecha de publicación </label>
        <input type="date" name="fecha" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->fecha_publicacion;?>
" >
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción de género</label>
        <input type="text" name="genero" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->genero;?>
">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio del libro</label>
        <input type="number" name="precio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->precio;?>
">
      </div>
      <div class="mb-3">
        <label class="form-label">Cantidad de páginas</label>
        <input type="number" name="paginas" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->cantidad_pag;?>
">
      </div>
      <div class="mb-3">
        <label class="form-label">Autor</label>
        <select name="autor_libro" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_autor;?>
">

        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        </select>
      </div>
      
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>

<?php $_smarty_tpl->_subTemplateRender('file:finHtml.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
