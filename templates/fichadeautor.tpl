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
               <a href='delete/{$a->id}' class='btn btn-danger'>Eliminar</a>
           </td>
          </tr>
           {/foreach}
            
           {include "finHtml.tpl"}
        