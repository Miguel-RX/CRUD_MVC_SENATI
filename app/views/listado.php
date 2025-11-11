<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Listado de Usuarios</h1>

    
    <table border=1>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>LastName</td>
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