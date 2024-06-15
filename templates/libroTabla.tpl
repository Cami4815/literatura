{include 'formAddLibro.tpl'}
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
    
  
        {foreach $libro as $l }
            <tr>
            <td>{$l->nombre}</td>
           <td>{$l->fecha_publicacion} </td>
           <td>{$l->genero}</td>
            <td>{$l->precio}</td>
           <td>{$l->cantidad_pag}</td>
            <td>{$l->id_autor}</td>
            <td>
          {if $usuario == 'admin'}
              <a href='verunAutor/{$l->id_autor1}' action='autores' class='btn btn-success'>Ver autor</a>  
              <a href='eliminarLibro/{$l->id_libro}' class='btn btn-danger'>Eliminar</a>
              </td>
                         {/if}
        {/foreach}
        </tbody>
     </table>
    </div>
{include 'finHtml.tpl'}

   