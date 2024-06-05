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

{if $usuario =='administrador'}  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
    data-toggle="dropdown" aria-expanded="false">Agregar</a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="libroTabla">Vehiculo</a></li>
        {* <li><a class="dropdown-item" href="AgregarMarcaNavBTN">Marca</a></li> *}
      </ul>
      </li>
  {/if}
 

{if $loageado}
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="logout">Bienvenido! {$usuario} Cerrar Sesion</a>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="libroTabla">Tabla de libros 📚</a>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="mostrarLibro">Libros</a>
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="autores">Autores</a>
  <li class="nav-item">           
 <nav class="nav nav-pills flex-column flex-sm-row">
   {else}
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="login">Login</a>
  {/if}
   <h5> “De los diversos instrumentos inventados por el hombre, el más asombroso es el libro; todos los demás son extensiones de su cuerpo… Sólo el libro es una extensión de la imaginación y la memoria”. Jorge Luis Borges.</h5>
  <nav class="nav nav-pills flex-column flex-sm-row">
  </nav>