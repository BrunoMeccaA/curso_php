<?php

class Contact {
    public $name;
    public $email;
    public $phone;

    public function getName(){
        return $this-> name;
    }

    public function getEmail(){
        if($this->email == null){
            return "teste@email.com";
        } else {
            return $this->email;
        }
    }

    public function getPhone(){
        if($this->phone == null){
            return "55990807060";
        } else {
            return $this->phone;
        }
    }

    public function setEmail($novoEmail){
        $this->email = $novoEmail;
    }

    public function setPhone($novoPhone){
        $this->phone = $novoPhone;
    }
}

$contato = new Contact;
$pessoa = new Contact;
$pessoa->name = 'João';
$pessoa->email =  'joao@example.com';
$pessoa->phone = '123456789';
$pessoa->getName();


?>