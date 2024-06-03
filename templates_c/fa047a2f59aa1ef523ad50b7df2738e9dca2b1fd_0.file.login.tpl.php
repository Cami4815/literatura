<?php
/* Smarty version 4.5.2, created on 2024-06-02 23:12:47
  from 'C:\xampp\htdocs\proyectos\Nueva carpeta\literatura\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665ce04f481543_30604239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa047a2f59aa1ef523ad50b7df2738e9dca2b1fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Nueva carpeta\\literatura\\templates\\login.tpl',
      1 => 1717270656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_665ce04f481543_30604239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="col-3 m-auto formAddTask" action="verificar_usuario" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="contraseña">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:finHtml.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
