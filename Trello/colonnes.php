<?php

class Colonnes {
    
    protected $id;
    protected $libelle;
    
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

    
    public function getLibelle(){
        return $this->libelle;
    }
    
    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }

}