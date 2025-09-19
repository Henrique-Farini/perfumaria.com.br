<?php
    // ╱|、
    //(˚ˎ 。7  
    //|、˜〵          
   //じしˍ,)ノ

//░░█▀░░░░░░░░░░░▀▀███████░░░░
//░░█▌░░░░░░░░░░░░░░░▀██████░░░
//░█▌░░░░░░░░░░░░░░░░███████▌░░
//░█░░░░░░░░░░░░░░░░░████████░░
//▐▌░░░░░░░░░░░░░░░░░▀██████▌░░
//░▌▄███▌░░░░▀████▄░░░░▀████▌░░
//▐▀▀▄█▄░▌░░░▄██▄▄▄▀░░░░████▄▄░
//▐░▀░░═▐░░░░░░══░░▀░░░░▐▀░▄▀▌▌
//▐░░░░░▌░░░░░░░░░░░░░░░▀░▀░░▌▌
//▐░░░▄▀░░░▀░▌░░░░░░░░░░░░▌█░▌▌
//░▌░░▀▀▄▄▀▀▄▌▌░░░░░░░░░░▐░▀▐▐░
//░▌░░▌░▄▄▄▄░░░▌░░░░░░░░▐░░▀▐░░
//░█░▐▄██████▄░▐░░░░░░░░█▀▄▄▀░░
//░▐░▌▌░░░░░░▀▀▄▐░░░░░░█▌░░░░░░
//░░█░░▄▀▀▀▀▄░▄═╝▄░░░▄▀░▌░░░░░░
//░░░▌▐░░░░░░▌░▀▀░░▄▀░░▐░░░░░░░
//░░░▀▄░░░░░░░░░▄▀▀░░░░█░░░░░░░
//░░░▄█▄▄▄▄▄▄▄▀▀░░░░░░░▌▌░░░░░░
//░░▄▀▌▀▌░░░░░░░░░░░░░▄▀▀▄░░░░░
//▄▀░░▌░▀▄░░░░░░░░░░▄▀░░▌░▀▄░░░
//░░░░▌█▄▄▀▄░░░░░░▄▀░░░░▌░░░▌▄▄
//░░░▄▐██████▄▄░▄▀░░▄▄▄▄▌░░░░▄░
//░░▄▌████████▄▄▄███████▌░░░░░▄
//░▄▀░██████████████████▌▀▄░░░░
//▀░░░█████▀▀░░░▀███████░░░▀▄░░
//░░░░▐█▀░░░▐░░░░░▀████▌░░░░▀▄░
//░░░░░░▌░░░▐░░░░▐░░▀▀█░░░░░░░▀
//░░░░░░▐░░░░▌░░░▐░░░░░▌░░░░░░░
//░╔╗║░╔═╗░═╦═░░░░░╔╗░░╔═╗░╦═╗░
//░║║║░║░║░░║░░░░░░╠╩╗░╠═╣░║░║░
//░║╚╝░╚═╝░░║░░░░░░╚═╝░║░║░╩═╝░
 class Funcionario {
    private $idFuncionario;
    private $nome;
    private $cpf;
    private $cargo;
    private $salario;

public function __construct($idFuncionario, $nome, $cpf, $cargo, $salario){
 $this->idFuncionario = $idFuncionario;
 $this->nome = $nome;
 $this->cpf = $cpf;
 $this->cargo = $cargo;
 $this->salario = $salario; 

 }


//getters
public function getldFuncionario() {
    return $this->idFuncionario;
}


public function getNome() {
    return $this->nome;

}

public function getcpf() {
    return $this->cpf;

}

public function getcargo () {
    return $this->cargo;

}

public function getSalario () {
    return $this->salario;
}

//setters

public function setNome($nome) {
    $this->nome = $nome;
}

public function setSalario($salario) {
    $this->salario = $salario;
}

//converter para array (para json)
public function toArray() {
    return[
        "idFuncionario" => $this->idFuncionario,
        "nome" => $this->nome,
        "cpf" => $this->cpf,
        "cargo" => $this->cargo,
        "salario" => $this->salario,
    
    ];
}


//criar objetivo a partir de array (json)
    public static function fromArray($data) {
        return new Funcionario(
            $data['idFuncionario'],
            $data['nome'],
            $data['cpf'],
            $data['cargo'],
            $data['salario']
        );
    }
 }

?>