<?php


class Funcionario {
    private $idfuncionario;
    private $nome;
    private $senha;
    private $login;
    private $telefone;
    function getIdfuncionario() {
        return $this->idfuncionario;
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getLogin() {
        return $this->login;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setIdfuncionario($idfuncionario) {
        $this->idfuncionario = $idfuncionario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }


}
