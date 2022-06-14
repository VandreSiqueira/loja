<?php

class Endereco{
    private $id;
    private $endereco;
    private $bairro;
    private $cep;
    private $telefone;
    private $cidade_id;

    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }

    function getEndereco() {
        return $this->endereco;
    }
    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function getBairro() {
        return $this->bairro;
    }
    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function getCep() {
        return $this->ceo;
    }
    function setCep($cep) {
        $this->cep = $cep;
    }

    function getTelefone() {
        return $this->telefone;
    }
    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function getCidade_id() {
        return $this->cidade_id;
    }
    function setCidade_id($cidade_id) {
        $this->cidade_id = $cidade_id;
    }


}