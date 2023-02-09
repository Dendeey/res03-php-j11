<?php

class Router
{
    
    private UserController $usercontroller;
    
    public function __construct()
    {
        $this->usercontroller = new UserController();
        
    }
    
    // PUBLIC GETTERS //
    
    
    
    
    // PUBLIC SETTERS //
    
    
    
    
    // METHODES //
    
    public function checkRoute(string $route) : void
    {
        
        if($route === "users")
        {
            $this->usercontroller->index();
        }
        else if($route === "user-create")
        {
            $this->usercontroller->create();
        }
        else if($route === "user-edit")
        {
            $this->usercontroller->edit();
        }
        else
        {
            $this->usercontroller->index();
        }
        
    }
    
    
}

?>