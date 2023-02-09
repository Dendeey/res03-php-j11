<?php

class UserController extends AbstractController
{
    // Attributs //
    
    private UserManager $manager;
    
    // Constructor //
    
    public function __construct()
    {
        
        $this->manager = new UserManager();
        
    }
    
    // METHODES //
    
    public function index()
    {
        $this->render();
    }
    
    public function create(array $post)
    {
        
    }
    
    public function edit(array $post)
    {
        
    }
}

?>