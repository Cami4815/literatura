<?php
/* Smarty version 4.5.2, created on 2024-06-01 21:43:24
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665b79dccadbd4_74086506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa77ce2c74fa6aa1a863a49e0d0dec08feaeebe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\inicio.tpl',
      1 => 1717270999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665b79dccadbd4_74086506 (Smarty_Internal_Template $_smarty_tpl) {
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
<nav class="nav nav-pills flex-column flex-sm-row">

<?php if ($_smarty_tpl->tpl_vars['loageado']->value) {?>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="CerrarSesion">Cerrar Sesion</a>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href=""> Bienvenido <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
 </a>
  <?php } else { ?>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="login">Login</a>
  <?php }?>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="libroTabla">Tabla de libros 📚</a>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="mostrarLibro">Libros</a>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="autores">Autores</a>
</nav><?php }
}
