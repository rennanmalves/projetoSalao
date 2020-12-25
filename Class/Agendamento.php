<?php


 
class Agendamento {
    private $idagendamento;
    private $horario;
    private $status;
    private $idcliente;
    function getIdagendamento() {
        return $this->idagendamento;
    }

    function getHorario() {
        return $this->horario;
    }

    function getStatus() {
        return $this->status;
    }

    function getIdcliente() {
        return $this->idcliente;
    }

    function setIdagendamento($idagendamento) {
        $this->idagendamento = $idagendamento;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }


    
}
