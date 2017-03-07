<?php

class Taches {
    
    protected $id;
    protected $nom;
    protected $description;
    protected $colonne_id;
    
    function __construct($data = array()){
        if (!empty($data)){
            $this->hydrate($data);
        }
        
    }
    
    public function hydrate($data){
        
        foreach($data as $key => $val) {
           $method = "set".ucfirst($key);
           if(method_exists($this, $method)){
               $this->$method($val);
           }
        }    
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($nom){
        $this->nom = $nom;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function setDescription($description){
        $this->description = $description;
    }
    
     public function getColonne_Id($colonne_id){
        return $this->colonne_id;
    }

    
    public function setColonne_Id($colonne_id){
        $this->colonne_id = $colonne_id;
    }
    
   

}