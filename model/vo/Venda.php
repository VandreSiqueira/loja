<?php

class Cliente{
    private $id;
    private $pedido_id;
    private $produto_id;
 
    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }

    function getPedido_id() {
        return $this->pedido_id;
    }
    function setPedido_id($pedido_id) {
        $this->pedido_id = $pedido_id;
    }

    function getProduto_id() {
        return $this->produto_id;
    }
    function setProduto_id($produto_id) {
        $this->produto_id = $produto_id;
    }

}