<?php

class Pais{
    private $id;
    private $pais;

    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }

    function getPais() {
        return $this->pais;
    }
    function setPais($pais) {
        $this->pais = $pais;
    }


}