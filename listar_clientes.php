<?php
$arquivo = "clientes.json";
if (file_exists($arquivo)){
    $clientes = json_decode(file_get_contents($arquivo), true);

    echo "<h2>Lista de Cientes</h2>";
    echo "<ul>";
    foreach ($clientes as $c){
        echo "<li>{$c['idPessoa']}-{$c['nome']} - CPF: {$c['cpf']} - Saldo: {$c['saldo']}</li>";
}
    echo "</ul>";
} else{
    echo "Nenhum Cliente Cadastrado.";
}