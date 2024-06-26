<!DOCTYPE html>
<html lang="en">
<head>
<base href={$base}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literatura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="styles/styles.css">
<body>
<nav class="nav nav-pills flex-column flex-sm-row">

{if $loageado}
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="CerrarSesion">Cerrar Sesion</a>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href=""> Bienvenido {$usuario} </a>
  {else}
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="login">Login</a>
  {/if}
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="libroTabla">Tabla de libros 📚</a>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="mostrarLibro">Libros</a>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="autores">Autores</a>
</nav>