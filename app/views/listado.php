<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Listado :.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="estilos/CSS.css">
<body class="p-3 mb-2 bg-dark-subtle text-dark-emphasis">
    <br>
    <h1 class="display-4" >Listado de Usuarios</h1>
    <br>

    <table class="table table-striped">
        <tr">
            <td class="h5">Id</td>
            <td class="h5">Name</td>
            <td class="h5">LastName</td>
            <td class="h5">Action</td>
        </tr>

        <?php foreach ($users as $user) { ?>
            <tr>    
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['lastname']; ?></td>
                <td>Editar | Eliminar</td>
            </tr>
        <?php } ?>

    </table>

    <a href="/../CRUD_MVC_SENATI/app/views/agregar.php" type="button" class="btn btn-primary"> Nuevo + </a>

</body>
</html>