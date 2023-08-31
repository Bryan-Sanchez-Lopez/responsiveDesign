<?php include("../templates/header.php") ?>

<br><br>
<div class="card text">
  <div class="card-header">
    <strong>Empleados</strong> <a href="/responsivedesign/views/viewsEmployees/addEmployee.php" class="btn btn-primary">Agregar empleado</a>
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Primer apellido</th>
                <th>Foto</th>
                <th>CV</th>
                <th>Puesto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Bryan</th>
                <th>Sanchez</th>
                <th>foto.png</th>
                <th>cv.pdf</th>
                <th>Ing en software</th>
                <th>
                  <a class="btn btn-warning" href="/responsivedesign/views/viewsEmployees/editEmployee.php" role="button">Editar</a>
                  <button type="button" class="btn btn-danger" id="deleteEmployee">Eliminar</button>
                </th>
            </tr>
        </tbody>
    </table>
  </div>
</div>



<script src="./resources/deleteEmployeeAlert.js"></script>
<?php include("../templates/footer.php"); ?>