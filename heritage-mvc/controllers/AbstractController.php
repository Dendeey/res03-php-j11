<?php

abstract class AbstractController
{
    
    // METHODES //
    
    public function render(string $view, array $values) : void
    {
        
        $template = $view;
        $data = $values;
        require "layout.phtml";
        
    }
    
}

?>