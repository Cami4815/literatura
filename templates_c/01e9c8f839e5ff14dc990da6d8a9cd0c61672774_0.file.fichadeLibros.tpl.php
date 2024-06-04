<?php
/* Smarty version 4.5.2, created on 2024-06-04 05:11:12
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\fichadeLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665e85d078acf5_39269193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01e9c8f839e5ff14dc990da6d8a9cd0c61672774' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\fichadeLibros.tpl',
      1 => 1717470669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_665e85d078acf5_39269193 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
    <a href="libroTabla" class="btn btn-primary">Volver al inicio</a>
    
<?php $_smarty_tpl->_subTemplateRender('file:finHtml.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
