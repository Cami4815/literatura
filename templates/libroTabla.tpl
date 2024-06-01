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
    
  
        {foreach $libro as $a }
            <tr>
            <td>{$a->nombre}</td>
           <td>{$a->fecha_publicacion} </td>
           <td>{$a->genero}</td>
            <td>{$a->precio}</td>
           <td>{$a->cantidad_pag}</td>
            <td>{$a->id_autor}</td>
            <td>
                 <a href='verAutor/{$a->id}' action='autores' class='btn btn-success'>Ver autor</a>  
               <a href='delete/{$a->id}' class='btn btn-danger'>Eliminar</a>
           </td>
           </tr>
        {/foreach}
        </tbody>
     </table>
    </div>
{include 'finHtml.tpl'}

   