<?php include("../templates/header.php"); ?>
<br/>


<div class="card">
  <div class="card-header">
        <strong>Agregar empleado</strong>
  </div>
  <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre(s)*</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre o nombres">
        </div>
        <div class="mb-3">
            <label for="firstSurname" class="form-label">Primer apellido*</label>
            <input type="text" class="form-control" id="firstSurname" name="firstSurname" placeholder="Primer apellido">
        </div>
        <div class="mb-3">
            <label for="secondSurname" class="form-label">Segundo apellido</label>
            <input type="text" class="form-control" id="secondSurname" name="secondSurname" placeholder="Segundo apellido">
        </div>
        <div class="mb-3">
            <label for="picture" class="form-label">Foto</label>
            <input type="file" class="form-control" id="picture" name="picture">
        </div>
        <div class="mb-3">
            <label for="cv" class="form-label">CV(PDF)*</label>
            <input type="file" class="form-control" id="cv" name="cv">
        </div>
        <div class="mb-3">
            <label for="idPuesto" class="form-label">Puesto de trabajo*</label>
            <select class="form-select" name="idPuesto" id="idPuesto">
                <option selected>Elegir puesto de trabajo</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="dateEntry" class="form-label">Fecha de ingreso*</label>
            <input type="date" class="form-control" id="dateEntry" name="dateEntry" required>
        </div>
        <button type="submit" class="btn btn-success" id="addEmployeeButton">Agregar empleado</button>
        <a class="btn btn-primary" href="seeEmployees.php" role="button">Cancelar</a>
    </form>
  </div>
</div>


<script src="./resources/verifyAddEmployeeForm.js"></script>

<?php include("../templates/footer.php"); ?>