{include "inicio.tpl"}
<form class="col-3 m-auto formAddAutor" action="insertarAutor" method="POST">
    
      <legend class="text-center">Agregar Autor</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del autor</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
      <label class="form-label">Apellido del autor</label>
      <input type="text" name="apellido" class="form-control" placeholder="Ingrese apellido">
    </div>
      <div class="mb-3">
        <label class="form-label">Fecha de nacimiento </label>
        <input type="date" name="nacimiento" class="form-control" placeholder="Ingrese fecha de nacimiento">
      </div>
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>
    