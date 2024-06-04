<?php
/* Smarty version 4.5.2, created on 2024-06-04 03:07:48
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\editarLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665e68e427e831_17125940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9baf3ecd5ee198a5c880d97b0f1265c779a748a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\editarLibro.tpl',
      1 => 1717463051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
  ),
),false)) {
function content_665e68e427e831_17125940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="col-3 m-auto" action="editar" method="POST">
    
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
<?php }
}
