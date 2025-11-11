<?php 

    require_once 'app/models/Connection.php';
    require_once 'app/controllers/UserController.php';

    Connection::conectar();

    $userController = new UserController();

    $userController -> getAllUsers();

?>