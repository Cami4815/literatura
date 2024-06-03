{include 'inicio.tpl'}
<div class="container col-12">
      <table class="table table-success table-striped mt-2 text-center">
        <thead>
          <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nacimiento</th>
          <th scope="col">Eliminar</th>
          
       
        </tr>
        </thead>
      <tbody>
    
  
        {foreach $autores as $a}
          <tr>
            <td>{$a->nombre}</td>
            <td>{$a->apellido} </td>
            <td>{$a->nacimiento} </td>
           <td>
      
               <a href='verunAutorLibros/{$a->id_libro}' action='libro' class='btn btn-success'>Ver libros del autor</a> 

               </td>
          </tr>
           {/foreach}
           <a href="libroTabla" class="btn btn-primary">Volver al inicio</a>
            
           {include "finHtml.tpl"}
        