<?php

class Cidade{
    private $id;
    private $cidade;
    private $pais_id;

    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }

    function getCidade() {
        return $this->cidade;
    }
    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function getPais_id() {
        return $this->pais_id;
    }
    function setPais_id($pais_id) {
        $this->pais_id = $pais_id;
    }

}