<?php

class TachesManager extends DatabaseManager {
    
    function getTasks($col_id){
        
        $bdd = parent::getBdd();
        
        $req = $bdd->prepare("Select * FROM taches WHERE colonne_id = :id");
        $req->BindParam(':id', $col_id, PDO::PARAM_INT);
        $req->execute();
        while($reponse = $req->fetch()){
            $taches[] = new taches($reponse);
        }
        
        return $taches;
        
    }
    
    /* function getLoadingTasks(){
        
        $bdd = parent::getBdd();
        
        $req = $bdd->prepare("Select * FROM taches WHERE colonne_id = 6");
        $req->execute();
        while($reponse = $req->fetch()){
            $taches[] = new taches($reponse);
        }
        
        return $taches;
        
    }
    
    function getDoneTasks(){
        
        $bdd = parent::getBdd();
        
        $tache = array();
        $req = $bdd->prepare("Select * FROM taches WHERE colonne_id = 7");
        $req->execute();
        while($reponse = $req->fetch()){
            $taches[] = new taches($reponse);
        }
        
        return $taches;
        
    }
    
    function getLoadingTasks(){
        
        $bdd = parent::getBdd();
        
        $tache = array();
        $req = $bdd->prepare("Select * FROM taches WHERE colonne_id = 8");
        $req->execute();
        while($reponse = $req->fetch()){
            $taches[] = new taches($reponse);
        }
        
        return $taches;
        
    } */
    
    
    function addTasks(){
        
        
    }
    
    function moveTasks(){
        
        
    }
    
}