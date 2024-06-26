{include "inicio.tpl"}
<form class="col-3 m-auto" action="verificarLibro" method="POST">
<input type="text" name="id" class="form-control " value="{$libro->id_libro}" hidden/>
    
      <legend class="text-center">Editar libro</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del libro</label>
        <input type="text" name="nombre" class="form-control " value="{$libro->nombre}">
      </div>
      <div class="mb-3">
        <label class="form-label">Fecha de publicación </label>
        <input type="date" name="fecha" class="form-control" value="{$libro->fecha_publicacion}" >
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción de género</label>
        <input type="text" name="genero" class="form-control" value="{$libro->genero}">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio del libro</label>
        <input type="number" name="precio" class="form-control" value="{$libro->precio}">
      </div>
      <div class="mb-3">
        <label class="form-label">Cantidad de páginas</label>
        <input type="number" name="paginas" class="form-control" value="{$libro->cantidad_pag}">
      </div>
      <div class="mb-3">
      <label class="form-label">Autor</label>
     
        <select name="autor_libro" required >
        <option>-- Seleccione --</option>
        {foreach from=$autor item=a}
           
                <option value={$a->id_autor1}>{$a->nombre}</option>
           
        {/foreach}
        </select>
      </div>

     
      <button class="btn btn-primary col-12">Submit</button>
  </form>
