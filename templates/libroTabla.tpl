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
          <th scope="col">Acciones</th>
          
       
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
                 <a href='verunAutor/{$l->id_autor}' action='autores' class='btn btn-success'>Ver autor</a>  
               <a href='delete/{$l->id_libro}' class='btn btn-danger'>Eliminar</a>
               <a href='editar/{$l->id_libro}' class='btn btn-danger'>Editar</a>

               </td>
           </tr>
        {/foreach}
        </tbody>
     </table>
    </div>
{include 'finHtml.tpl'}

   