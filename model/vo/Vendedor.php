<?php

class Vendedor{
    private $id;
    private $nome;
    private $sobrenome;
    private $cpf;
    private $email;
    private $salario;

    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }

    function getSobrenome() {
        return $this->nome;
    }
    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function getCpf()
    {
        return $this->cpf;
    } 
    function setCpf($cpf)
    {
        $this->cpf = $cpf;
        
    }

    function getEmail() {
        return $this->email;
    }
    function setEmail($email) {
        $this->email = $email;
    }

    function getSalario() {
        return $this->salario;
    }
    function setSalario($salario) {
        $this->salario = $salario;
    }


}