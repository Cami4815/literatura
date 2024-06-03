{include "inicio.tpl"}
<form class="col-3 m-auto formAddTask" action="verificar_usuario" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="contraseña">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
{include "finHtml.tpl"}

