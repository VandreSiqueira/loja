<?php

class Pedido{
    private $id;
    private $qnt_produto;
    private $cliente_id;
    private $vendedor_id;

    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }

    function getQnt_produto() {
        return $this->qnt_produto;
    }
    function setQnt_produto($qnt_produto) {
        $this->qnt_produto = $qnt_produto;
    }

    function getCliente_id() {
        return $this->cliente_id;
    }
    function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    function getVendedor_id() {
        return $this->vendedor_id;
    }
    function setVendedor_id($vendedor_id) {
        $this->vendedor_id = $vendedor_id;
    }
  
}