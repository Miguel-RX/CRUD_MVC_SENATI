<?php 

    require_once __DIR__ . '/../controllers/UserController.php';

    $userController = new UserController();

    //llamado de la funcion delete 
    $userController -> deleteUser($_GET['id']);

?>