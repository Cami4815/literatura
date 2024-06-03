<?php
/* Smarty version 4.5.2, created on 2024-06-02 04:00:30
  from 'C:\xampp\htdocs\proyectos\literatura\templates\fichadeautor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665bd23ed2ff74_73238315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6009a180434bef0f9361afcc00861b650caf172c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\literatura\\templates\\fichadeautor.tpl',
      1 => 1717196328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_665bd23ed2ff74_73238315 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container col-12">
      <table class="table table-success table-striped mt-2 text-center">
        <thead>
          <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nacimiento</th>
          <th scope="col">Eliminar</th>
          
       
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
               <a href='delete/<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
' class='btn btn-danger'>Eliminar</a>
           </td>
          </tr>
           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
           <?php $_smarty_tpl->_subTemplateRender("file:finHtml.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }
}
