<?php



class Cliente {
    private $idcliente;
    private $nome;
    private $telefone;
    function getIdcliente() {
        return $this->idcliente;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }


}

