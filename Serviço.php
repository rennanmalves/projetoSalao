<?php


class Serviço {
    private $idserviço;
    private $duraçao;
    private $preço;
    private $nomedoserviço;
    function getIdserviço() {
        return $this->idserviço;
    }

    function getDuraçao() {
        return $this->duraçao;
    }

    function getPreço() {
        return $this->preço;
    }

    function getNomedoserviço() {
        return $this->nomedoserviço;
    }

    function setIdserviço($idserviço) {
        $this->idserviço = $idserviço;
    }

    function setDuraçao($duraçao) {
        $this->duraçao = $duraçao;
    }

    function setPreço($preço) {
        $this->preço = $preço;
    }

    function setNomedoserviço($nomedoserviço) {
        $this->nomedoserviço = $nomedoserviço;
    }


}
