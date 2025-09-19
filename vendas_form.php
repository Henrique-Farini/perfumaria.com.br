<?php
##vitor e flavio e gabriel 
// Carregar clientes
$clientes = json_decode(file_get_contents("clientes.json"), true);

// Carregar produtos
$produtos = json_decode(file_get_contents("produtos.json"), true);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Nova Venda</title>
</head>
<body>
  <h1>Nova Venda</h1>

  <form action="salvar_venda.php" method="post">
    <!-- Selecionar Cliente -->
    <label>Cliente:</label><br>
    <select name="idPessoa" required>
      <option value="">- Selecione um Cliente -</option>
      <?php foreach ($clientes as $c): ?>
        <option value="<?= $c['idPessoa'] ?>">
          <?= htmlspecialchars($c['nome']) ?>
        </option>
      <?php endforeach; ?>
    </select>
    <br><br>

    <!-- Selecionar Produto -->
    <label>Produto:</label><br>
    <select name="idProduto" required>
      <option value="">- Selecione um Produto -</option>
      <?php foreach ($produtos as $p): ?>
        <option value="<?= $p['id'] ?>">
          <?= htmlspecialchars($p['nome']) ?> -
          R$ <?= number_format($p['preco'], 2, ',', '.') ?>
        </option>
      <?php endforeach; ?>
    </select>
    <br><br>

    <!-- Quantidade -->
    <label>Quantidade:</label><br>
    <input type="number" name="quantidade" value="1" min="1">
    <br><br>

    <button type="submit">Adicionar Item</button>
  </form>

  <br>
  <a href="listar_vendas.php">Ver Vendas</a>
</body>
</html> 
    



  