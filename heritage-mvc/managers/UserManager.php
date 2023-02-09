<?php

// Requires //

require "AbstractManager.php";
require "./models/User.php";

class UserManager extends AbstractManager
{
    
    // METHODES //
    
    public function getAllUsers() : array
    {
        
        $this->db;
        
        $query = $this->db->prepare('SELECT * FROM users');
            
        $query->execute();
    
        $getAllUsers = $query->fetchAll(PDO::FETCH_ASSOC);
        
        $getAllUsersArray = [];
        foreach($getAllUsers as $getUser)
        {
            $newUserArray = new User($getUser["email"], $getUser["username"], $getUser["password"]);
            $getAllUsersArray [] = $newUserArray;
        }
            
        return $getAllUsersArray;
    }
    
    public function getUserById(int $id) : User
    {
        
        $this->db;
        
        $query = $db->prepare("SELECT * FROM users WHERE id = :id");
        
        $parameters = ["id" => $id];
        
        $query->execute($parameters);
        
        $userById = $query->fetch(PDO::FETCH_ASSOC);
        
        $newUserById = new User($userById["id"], $userById["email"], $userById["username"], $userById["password"]);
        
        $newUserById->setId($userById["id"]);
        
        return $newUserById;
        
    }
    
    public function insertUser(User $user) : User
    {
        
        $this->db;
        
        $query = $this->db->prepare('INSERT INTO users VALUES(null, :email, :username, :password)');

        $parameters = [
            
            'email' => $user->getEmail(),
            'username' => $user->getUsername(),
            'password' => $user->getPassword()
            
        ];
        
        $query->execute($parameters);
        
        return $user;
            
    }
    
    public function editUser(User $user) : void
    {
        $query = $this->db->prepare("UPDATE users SET email = :email, username = :username, password = :password WHERE id = :id");
        
        $parameters = [
            
            'email' => $user->getEmail(),
            'username' => $user->getUsername(),
            'password' => $user->getPassword(),
            'id' => $user->getId()
            
        ];
        
        $query->execute($parameters);
        
        $userUpdated = $query->fetch(PDO::FETCH_ASSOC);
        
        $newUserUpdated = new User($userUpdated["email"], $userUpdated["username"], $userUpdated["password"]);
        
    }
}

?>