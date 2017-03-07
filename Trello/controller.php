<?php

class Controller {
    
    
    public function accueil(){
        
       $manager = new ColonnesManager();
       $colonnes = $manager->getAllColonnes(); 
        
       require('vueAccueil.php');    
           
    }
    
  
    
    
}