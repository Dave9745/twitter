<?php

class ColonnesManager extends DatabaseManager {
    
    function getAllColonnes(){
        
        $bdd = parent::getBdd();
        
        $req = $bdd->prepare("Select * FROM colonnes");
        $req->execute();
        while($reponse = $req->fetch()){
            $colonnes[] = new colonnes($reponse);
        }
        
        return $colonnes;
        
        
    }

    
}