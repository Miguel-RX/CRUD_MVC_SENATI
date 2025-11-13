<?php 

require_once 'Connection.php';

    class UserModel {
        private $pdo;
        public function __construct()
            {
                $this->pdo = Connection::conectar();
            }
        
        public function getAllUsers(){
            $stmt = $this -> pdo -> query("SELECT * FROM users");
            return $stmt -> fetchAll();
        }

        public function addUser($data) {
            $stmt = $this->pdo->prepare("INSERT INTO users (id, name, lastname) VALUES(:id, :name, :lastname);");
            
            $stmt -> executed([
                'id' => $data['id'],
                'name' => $data['name'],    
                'lastname' => $data['lastname']
                ]); 
        }


        //completar 50%
        public function updateUser($data) {
            $stmt = $this->pdo->prepare("UPDATE users SET name=:name, lastname=:lastname
                                        WHERE id=:id");
            
            $stmt -> executed([
                'id' => $data['id'],
                'name' => $data['name'],    
                'lastname' => $data['lastname']
                ]); 
        }
        public function deleteUser($data) {
            $stmt = $this->pdo->prepare("DELETE users SET name=:name, lastname=:lastname
                                        WHERE id=:id");
            
            $stmt -> executed([
                'id' => $data['id'],
                'name' => $data['name'],    
                'lastname' => $data['lastname']
                ]); 
        }

    }

?>