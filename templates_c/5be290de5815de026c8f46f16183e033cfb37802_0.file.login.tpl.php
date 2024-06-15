<?php
/* Smarty version 4.5.2, created on 2024-06-15 06:14:16
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_666d151890b7e3_08980336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5be290de5815de026c8f46f16183e033cfb37802' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\login.tpl',
      1 => 1718424789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_666d151890b7e3_08980336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="animated-header">Libros y autores</h1>
<form class="col-3 m-auto login" action="verificar_usuario" method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="contraseña">
  </div>
  <?php if ($_smarty_tpl->tpl_vars['msj']->value) {?>
    <div class='alert alert-warning'>
      <?php echo $_smarty_tpl->tpl_vars['msj']->value;?>

    </div>
  <?php }?>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:finHtml.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
