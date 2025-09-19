<?php
/*
    // mariana
    / \__
     @\___
    /     O
   /  _____/
  /_____/  U   //

  */
$produtosFile = "produtos.json";
if (!file_exists($produtosFile)) {
    file_put_contents($produtosFile, "[]");
}   
$produtos = json_decode(file_get_contents($produtosFile), true);
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="listarprodutos.css">
    <head>
    <body>
    <h1>Produtos cadastrados</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço (R$)</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($produtos as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nome'] ?></td>

            <td><?= number_format($p['preco'], 2, ',', '.') ?></td>
            <td>
                <form action="excluir_produto.php" method="POST" style="display:inline;" onsubmit="return confirm('tem certeza que deseja excluir este produto?');">
                    <input type="hidden" name="id" value="<?= $p['id'] ?>">
                    <button type="submit">❌ Excluir</button>
                </form>
                </td>
        </tr>
        <?php endforeach; ?>    
    </table>
    <br>
    <a href="produto_form.html">Cadastrar novo produto</a>
    <a href="vendas_form.php"> ir para venda</a>        
</body>
</html>
