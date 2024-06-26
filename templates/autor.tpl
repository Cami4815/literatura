
{include 'inicio.tpl'}
<div class="container col-12">
      <table class="table table-success table-striped mt-2 text-center">
        <thead>
          <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nacimiento</th>
          <th scope="col">Libros</th>
          
       
        </tr>
        </thead>
      <tbody>
    
  
        {foreach $autores as $autor}
          <tr>
            <td>{$autor->nombre}</td>
            <td>{$autor->apellido} </td>
            <td>{$autor->nacimiento} </td>
    
          
           <td>
              <a href='verunAutorLibros/{$a->id_autor1}' action='libros' class='btn btn-success'>Ver libros del autor</a> 
              <a href='eliminarAutor/{$a->id_autor1}' action='libros' class='btn btn-success'>Borrar </a> 
              <a href='editarAutor/{$autor->id_autor1}' class='btn btn-success'>Editar Autor</a> 
            
            
              </td>
          </tr>
           {/foreach}
           <a href='insertarAutor/{$a->id_autor1}' action='insertarAutor' class='btn btn-success'>Insertar Autor</a> 

           <a href="libroTabla" class="btn btn-primary">Volver al inicio</a>
            
           {include "finHtml.tpl"}