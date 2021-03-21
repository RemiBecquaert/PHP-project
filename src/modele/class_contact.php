<?php

class Contact {
    private $db;
    private $insert;

    public function __construct($db){
        $this->db = $db;
        $this->insert = $this->db->prepare("insert into contact(nom, prenom, email, text)values (:nom, :prenom, :email, :text)");
    }

    public function insert($nom, $prenom, $email, $text){        
        $r = true;        
        $this->insert->execute(array(':nom'=>$nom, ':prenom'=>$prenom, ':email'=>$email, ':text'=>$text));        
        if ($this->insert->errorCode()!=0){
            print_r($this->insert->errorInfo());               
            $r=false;        
        }        
        return $r;    
        }
}

?>