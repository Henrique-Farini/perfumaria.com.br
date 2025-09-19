<?php
// listar_vendas.php
require_once "Venda.php";
require_once "Produto.php";

$vendasFile = "vendas.json";
$clientesFile = "clientes.json";

//Carregar Arquivos
$vendasJSON = json_decode(file_get_contents($vendasFile), true);
$clientes = json_decode(file_get_contents($clientesFile), true);

//Índice de clientes
$clientesIndex = [];
foreach ($clientes as $c) {
    $clientesIndex[$c['idPessoa']] = $c ['nome'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Vendas</title>
    
</head>
<body>

<h1> Vendas Registradas </h1>

<?php if (count($vendasJSON) === 0): ?>
    <p> Nenhuma venda registrada. </p>
<?php else: ?>
    <table border="1" cellpadding="5">
<tr>
    <th>ID Venda</th>
    <th>Cliente</th>
    <th>Data</th>
    <th>Itens</th>
    <th>Total (R$)</th>
</th>

<?php foreach ($vendasJSON as $v): ?>
    <?php $venda = $Venda::fromArray($v); ?>
    <tr>
        <td><?=$venda->getId()?></td>
        <td><?=$clientesIndex[$venda->getIdPessoal()] ?? "Cliente nao encontrado"?></td>
        <td><?=$venda->getData()?></td>
        <td>
            <ul>
                <?php foreach ($venda->getItens() as $item): ?>
                    <li><?= $item->getNome() ?> (R$<?= number_format($item->getPreco(),2,',','.')?>)</li>
                <?php endforeach; ?>
             </ul>
        </td>
        <td><b>R$<?= number_format($venda->getTotal(),2,',','.') ?></b></td>
    </tr>
<?php endforeach; ?>
</table
<?php endif; ?>
<br>
<a href="index.html"> Voltar ao Menu</a>

</body>
</html>