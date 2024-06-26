<?php
/* Smarty version 4.5.2, created on 2024-06-26 03:18:15
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\fichadeautor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_667b6c57990e59_06193484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e41d325989ea9c65e8f6f46d66406afd8b8cacf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\fichadeautor.tpl',
      1 => 1719349598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_667b6c57990e59_06193484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container col-12">
      <table class="table table-success table-striped mt-2 text-center">
        <thead>
          <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nacimiento</th>
          
       
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
          </tr>
           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
           <?php $_smarty_tpl->_subTemplateRender("file:finHtml.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
    <a href="#" class="btn btn-primary stretched-link">ir al Inicio</a>
    <h3>Datos del Autor</h3>
    </div>
</div>
<?php }
}
