<?php
include('../templates/cabecera.php'); 
include('../secciones/cursos.php'); 
?>

<p>Control de Cursos</p>



<div class="col-md-5">

<form action="" method="post">

<div class="card">
  <div class="card-header">
    Cursos
  </div>
  <div class="card-body">

  <div class="mb-3">
  <label for="" class="form-label">ID</label>
  <input type="text"
    class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID">
</div>
<div class="mb-3">
  <label for="" class="form-label">Nombre del curso</label>
  <input type="text"
    class="form-control" name="nombre_curso" id="nombre_curso" aria-describedby="helpId" placeholder="Nombre del Curso">
</div>



  <div class="btn-group" role="group" aria-label="">
  <button type="button" class="btn btn-success">Agregar</button>
  <button type="button" class="btn btn-warning">Editar</button>
  <button type="button" class="btn btn-danger">Borrar</button>
</div>

  </div>



</div>



</form>

</div>

<div class="col -md-7">

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>

   <!-- Obtener la lista de cursos y la tabla -->
    <?php foreach($listacursos as $curso) { ?>
    <tr>

      <td> <?php echo $curso ['id']; ?></td>
      <td><?php echo $curso ['nombre_curso']; ?>  </td>
      <td>Seleccionar</td>
    </tr>
    <?php  } ?>
  </tbody>
</table>



</div>
<?php
include('../templates/pie.php'); 
?>