{include 'formAddAutor.tpl'}
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
    
  
        {foreach $autores as $a}
          <tr>
            <td>{$a->nombre}</td>
            <td>{$a->apellido} </td>
            <td>{$a->nacimiento} </td>
    
          
           <td>
              <a href='verunAutorLibros/{$a->id_autor1}' action='libros' class='btn btn-success'>Ver libros del autor</a> 
              <a href='eliminarAutor/{$a->id_autor1}' action='libros' class='btn btn-success'>Borrar </a> 
              <a href='editarAutor/{$a->id_autor1}' class='btn btn-success'>Editar Autor</a> 
            
            
              </td>
          </tr>
           {/foreach}
           <a href='insertarAutor/{$a->id_autor1}' action='insertarAutor' class='btn btn-success'>Insertar Autor</a> 

           <a href="libroTabla" class="btn btn-primary">Volver al inicio</a>
            
           {include "finHtml.tpl"}
        