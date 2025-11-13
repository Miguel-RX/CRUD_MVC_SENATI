<?php 

// /../models/UserModel.php
    require_once __DIR__ . '/../models/UserModel.php';

    class UserController {
        
        private $model;

        public function __construct()
            {
                $this -> model = new UserModel();
            }

        public function getAllUsers(){

            $users = $this -> model -> getAllUsers();
            
            include __DIR__ . '/../views/listado.php';

        }

        public function addUser($data){
            $user = $this->model->addUser($data);

            header('Location: ../../index.php');
        }


        //creacion de update user
        public function updateUser(){

            $users = $this->model->updateUser();

            header('Location: ../../index.php');

        }
        public function deleteUser(){

            $users = $this->model->updateUser();

            header('Location: ../../index.php');

        }

    }
?>