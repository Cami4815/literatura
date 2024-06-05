<?php
/* Smarty version 4.5.2, created on 2024-06-05 03:35:17
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\libroTabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665fc0d522a243_42598837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fb0e742df7b93057a56cee924f2cc42b7f2783b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\libroTabla.tpl',
      1 => 1717551195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:formAddLibro.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_665fc0d522a243_42598837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:formAddLibro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
            <td>
          <?php if ($_smarty_tpl->tpl_vars['usuario']->value == 'administrador') {?>
              <a href='verunAutor/<?php echo $_smarty_tpl->tpl_vars['l']->value->id_autor;?>
' action='autores' class='btn btn-success'>Ver autor</a>  
              <a href='delete/<?php echo $_smarty_tpl->tpl_vars['l']->value->id_libro;?>
' class='btn btn-danger'>Eliminar</a>
              </td>
                         <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
     </table>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:finHtml.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <?php }
}
