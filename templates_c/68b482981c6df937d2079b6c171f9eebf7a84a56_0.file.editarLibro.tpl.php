<?php
/* Smarty version 4.5.2, created on 2024-06-03 02:20:27
  from 'C:\xampp\htdocs\proyectos\literatura\templates\editarLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665d0c4bb3ae19_79991698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68b482981c6df937d2079b6c171f9eebf7a84a56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\literatura\\templates\\editarLibro.tpl',
      1 => 1717374009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
  ),
),false)) {
function content_665d0c4bb3ae19_79991698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="col-3 m-auto" action="verificarLibro" method="POST">
    
      <legend class="text-center">Editar libro</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del libro</label>
        <input type="text" name="nombre" class="form-control " placeholder="Ingresar nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Fecha de publicación </label>
        <input type="date" name="fecha" class="form-control" >
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción de género</label>
        <input type="text" name="genero" class="form-control" placeholder="Ingresar género">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio del libro</label>
        <input type="number" name="precio" class="form-control" placeholder="Ingresar precio">
      </div>
      <div class="mb-3">
        <label class="form-label">Cantidad de páginas</label>
        <input type="number" name="paginas" class="form-control" placeholder="Ingresar cantidad de páginas">
      </div>
      <div class="mb-3">
        <label class="form-label">Autor</label>
        <select name="autor_libro" class="form-control" placeholder="Ingrese autor">
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
