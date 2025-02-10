<?php

class FormGenerator
{
    private $nom;
    private $adressMail;
    private $sujet;
    private $message;

    public function __construct()
    {
        
    }

    // creation des geter et seter
public function getNom()
{
    return $this->nom;
}
public function setNom($newNom)
{
    $this->nom = $newNom;
}
public function getAdressMail()
{
    return $this->adressMail;
}
public function setAdressMail($newAdressMail)
{
    $this->adressMail = $newAdressMail;
}
public function getSujet()
{
    return $this->sujet;
}
public function setSujet($newSujet)
{
    $this->sujet = $newSujet;
}
public function getMessage()
{
    return $this->message;
}
public function setMessage($newMessage)
{
    $this->message = $newMessage;
}
public function AfficherDetails()
    {
        echo ;
    }

public function AfficherDetails()
}


require_once 'interface_form.php';
class FormGenerator implements FormGeneratorInterface{
    private string $action;
    private string $method;
    private array $fields = [];
    private array $errors = [];
    
    public function __construct(string $action, string $method) {
        $this->action = $action;
        $this->method = strtoupper($method);
    }

    public function addField(string $name, string $type, string $label, array $attributes = []){

    }
}
?>