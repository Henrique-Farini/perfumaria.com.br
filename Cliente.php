<?php
// Cliente.php
##########################################
#              Rafael Mega               #
##########################################
require_once "Pessoa.php";
#classe cliente é pai e pessoa é filho
class Cliente extends Pessoa {
    private float $credito;
    private float $saldo;

    public function __construct($idPessoa, $nome, $cpf, $credito, $saldo) {
        parent::__construct($idPessoa, $nome, $cpf);
        $this->credito = $credito;
        $this->saldo = $saldo;
    }

    public function toArray() {
        return [
            "idPessoa" => $this->getIdPessoa(),
            "nome" => $this->getNome(),
            "cpf" => $this->getCpf(),
            "credito" => $this->credito,
            "saldo" => $this->saldo
        ];
    }
}
