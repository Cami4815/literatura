{include "inicio.tpl"}
<form class="col-3 m-auto" action="verificarAutor" method="POST">
<input type="text" name="id" class="form-control " value="{$autor->id_autor1}" hidden/>
    
      <legend class="text-center">Editar Autor</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del autor</label>
        <input type="text" name="nombre" class="form-control " value="{$autor->nombre}">
      </div>
      <div class="mb-3">
        <label class="form-label">apellido </label>
        <input type="text" name="apellido" class="form-control" value="{$autor->apellido}" >
      </div>
      <div class="mb-3">
        <label class="form-label">Fecha de nacimiento</label>
        <input type="date" name="nacimiento" class="form-control" value="{$autor->nacimiento}">
      </div>

     
      <button class="btn btn-primary col-12">Submit</button>
  </form>
