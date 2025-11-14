<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Agregar :.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  
      <link href="../estilos/stylesTwo.css" rel="stylesheet">

</head>

<body class="p-3 mb-2 bg-dark-subtle text-dark-emphasis">

  <br>

  <h1 class="display-4">Agregar Usuario</h1>


  <form method="POST" action="store.php">

    <div class="mb-3">
      <label for="inputID" class="form-label">Id</label>
      <input type="text" class="form-control" id="inputID" name="id">
    </div>

    <div class="mb-3">
      <label for="ImputName" class="form-label">Name</label>
      <input type="text" class="form-control" id="InputName" name="name">
    </div>

    <div class="mb-3">
      <label for="InputLastName" class="form-label">LastName</label>
      <input type="text" class="form-control" id="InputLastName" name="lastname">
    </div>

  <div class="btn-agregar"><button type="submit" class="btn btn-outline-primary">Agregar Usuario</button></div>

  </form>

</body>
</html>

