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