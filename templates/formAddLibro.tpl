{include "inicio.tpl"}
<form class="col-3 m-auto formAddLibro" action="insertLibro" method="POST">
    
      <legend class="text-center">Agregar libro</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del libro</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Fecha de publicación </label>
        <input type="date" name="fecha" class="form-control" placeholder="Ingrese fecha">
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción de género</label>
        <input type="text" name="genero" class="form-control" placeholder="Ingrese género">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio del libro</label>
        <input type="number" name="precio" class="form-control" placeholder="Ingrese precio">
      </div>
      <div class="mb-3">
        <label class="form-label">Cantidad de páginas</label>
        <input type="number" name="paginas" class="form-control" placeholder="Ingrese cantidad de páginas">
      </div>
      <div class="mb-3">
      <label class="form-label">Autor</label>
      <select name="autor_libro" class="form-control" placeholder="Ingrese autor">

       <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>         
      </select>
      </div>
      
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>
    