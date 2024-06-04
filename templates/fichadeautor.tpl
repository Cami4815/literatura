{include 'inicio.tpl'}
    <div class="container col-12">
      <table class="table table-success table-striped mt-2 text-center">
        <thead>
          <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nacimiento</th>
          
       
        </tr>
        </thead>
      <tbody>
    
  
        {foreach $autores as $a}
          <tr>
            <td>{$a->nombre}</td>
            <td>{$a->apellido} </td>
            <td>{$a->nacimiento} </td>
           <td>
          </tr>
           {/foreach}
            
           {include "finHtml.tpl"}
        
    <a href="#" class="btn btn-primary stretched-link">ir al Inicio</a>
    <h3>Datos del Autor</h3>
    </div>
</div>
