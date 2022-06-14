<?php

class Cliente{
    private $id;
    private $nome;
    private $sobrenome;
    private $cpf;
    private $email;
    private $data_criacao;
    private $endereco_id;

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

    function getData_criacao() {
        return $this->data_criacao;
    }
    function setData_criacao($data_criacao) {
        $this->data_criacao = $data_criacao
    }

    function getEndereco_id() {
        return $this->nome;
    }
    function setEndereco_id($endereco_id) {
        $this->endereco_id = $endereco_id;
    }
}