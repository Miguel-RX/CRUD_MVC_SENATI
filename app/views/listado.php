<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Listado :.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="estilos/CSS.css">
<body>
    <br>
    <h1 class="display-4" >Listado de Usuarios</h1>
    <br>

    <table class="table table-striped table-hover">
        <tr">
            <td class="h5">Id</td>
            <td class="h5">Name</td>
            <td class="h5">LastName</td>
        </tr>

        <?php foreach ($users as $user) { ?>
            <tr>    
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['lastname']; ?></td>
            </tr>
        <?php } ?>

    </table>
</body>
</html>