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
{include 'inicio.tpl'}
<a href="libroTabla" class="btn btn-primary">Volver al inicio</a>

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
            <tr>
              <td>{$libro->nombre}</td>
              <td>{$libro->fecha_publicacion} </td>
              <td>{$libro->genero}</td>
              <td>{$libro->precio}</td>
              <td>{$libro->cantidad_pag}</td>
              <td>{$libro->id_autor}</td> 
      
           </tr>
        </tbody>
     </table>
    </div>

<form class="col-3 m-auto" action="verificarLibro/{$libro->id_libro}" method="POST">
    
      <legend class="text-center">Editar libro</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del libro</label>
        <input type="text" name="nombre" class="form-control " value="{$libro->nombre}">
      </div>
      <div class="mb-3">
        <label class="form-label">Fecha de publicación </label>
        <input type="date" name="fecha" class="form-control" value="{$libro->fecha_publicacion}" >
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción de género</label>
        <input type="text" name="genero" class="form-control" value="{$libro->genero}">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio del libro</label>
        <input type="number" name="precio" class="form-control" value="{$libro->precio}">
      </div>
      <div class="mb-3">
        <label class="form-label">Cantidad de páginas</label>
        <input type="number" name="paginas" class="form-control" value="{$libro->cantidad_pag}">
      </div>
      <div class="mb-3">
        <label class="form-label">Autor</label>
        <select name="autor_libro" class="form-control" value="{$libro->id_autor}">

        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        </select>
      </div>
      
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>

{include 'finHtml.tpl'}