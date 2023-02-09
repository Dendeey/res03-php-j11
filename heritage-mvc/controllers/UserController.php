<?php

// Requires //

require "AbstractController.php";
require "./managers/UserManager.php";

class UserController extends AbstractController
{
    // Attributs //
    
    private UserManager $manager;
    
    // Constructor //
    
    public function __construct()
    {
        
        $this->manager = new UserManager("davidsim_phpj11", "3306", "db.3wa.io", "davidsim", "83c8b946aee433563583381d62aa9c15");
        
    }
    
    // METHODES //
    
    public function index()
    {
        $users = $this->manager->getAllUsers();
        
        $this->render("index", ["users" => $users]);
    }
    
    public function create(array $post)
    {
        
        $post = $this->manager->insertUser();
        
        $this->render("create", ["createPost" => $post]);
        
    }
    
    public function edit(array $post)
    {
        
        $post = $this->manager->editUser();
        
        $this->render("edit", ["editPost" => $post]);
        
    }
}

?>