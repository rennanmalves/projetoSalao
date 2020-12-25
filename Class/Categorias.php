<?php


class Categorias {
    private $idcategorias;
    private $especializaçao;
    private $nome;
    private $salariodocargo;
    function getIdcategorias() {
        return $this->idcategorias;
    }

    function getEspecializaçao() {
        return $this->especializaçao;
    }

    function getNome() {
        return $this->nome;
    }

    function getSalariodocargo() {
        return $this->salariodocargo;
    }

    function setIdcategorias($idcategorias) {
        $this->idcategorias = $idcategorias;
    }

    function setEspecializaçao($especializaçao) {
        $this->especializaçao = $especializaçao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSalariodocargo($salariodocargo) {
        $this->salariodocargo = $salariodocargo;
    }


}
