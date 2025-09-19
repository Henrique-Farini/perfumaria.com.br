<?php
class Produto

 {
    private $id;
    private $nome;
    private $preco;

    public function __construct($id, $nome, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    //Getters
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    //Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
       $this->preco = $preco;
    }
// converte o objeto para array(util para salvar em JSON)
public function toArray(){
    return [
        "id"=> $this->id,
        "nome"=> $this->preco
    ];
}
// Cria objeto produto a partir de um array (JSON)
public static function fromArray($data){
    return new Produto($data['id'], $data['nome'], $data['preco']);
    }
}



