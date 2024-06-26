<?php
/* Smarty version 4.5.2, created on 2024-06-25 22:31:19
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_667b2917f2c294_63464161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa77ce2c74fa6aa1a863a49e0d0dec08feaeebe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\inicio.tpl',
      1 => 1719347477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667b2917f2c294_63464161 (Smarty_Internal_Template $_smarty_tpl) {
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
<a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="logout">¡Bienvenido! Cerrar Sesión</a> 
<a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="mostrarLibro">Libros</a> <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="autores">Autores</a>
  <a class="flex-sm- fill text-sm-center nav-link active" aria-current="page" href="libroTabla">Tabla de libros 📚</a> 
<a class="flex-sm-fill text-sm-center nav-link active" aria-current="page"  href="login">Iniciar sesión</a> 
<h5>“De los diversos instrumentos inventados por el hombre, el más asombroso es el libro; todos los demás son extensiones de su cuerpo… Sólo el libro es una extensión de la imaginación y la memoria”. Jorge Luis Borges.</h5> 
</nav>

<?php }
}
