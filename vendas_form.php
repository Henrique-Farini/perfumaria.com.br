<?php
// Vitor, Flavio e Gabriel

// Carregar clientes com tratamento de erro
$clientes = [];
if (file_exists("clientes.json")) {
    $clientesData = file_get_contents("clientes.json");
    if ($clientesData !== false) {
        $clientes = json_decode($clientesData, true) ?? [];
    }
}

// Carregar produtos com tratamento de erro
$produtos = [];
if (file_exists("produtos.json")) {
    $produtosData = file_get_contents("produtos.json");
    if ($produtosData !== false) {
        $produtos = json_decode($produtosData, true) ?? [];
    }
}

// Verificar se JSON decode retornou array válido
if (!is_array($clientes)) $clientes = [];
if (!is_array($produtos)) $produtos = [];
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
        <?php if (isset($c['idPessoa']) && isset($c['nome'])): ?>
          <option value="<?= $c['idPessoa'] ?>">
            <?= htmlspecialchars($c['nome']) ?>
          </option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
    <br><br>

    <!-- Selecionar Produto -->
    <label>Produto:</label><br>
    <select name="idProduto" required>
      <option value="">- Selecione um Produto -</option>
      <?php foreach ($produtos as $p): ?>
        <?php if (isset($p['id']) && isset($p['nome']) && isset($p['preco'])): ?>
          <option value="<?= $p['id'] ?>">
            <?= htmlspecialchars($p['nome']) ?> -
            R$ <?= number_format($p['preco'], 2, ',', '.') ?>
          </option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
    <br><br>

    <!-- Quantidade -->
    <label>Quantidade:</label><br>
    <input type="number" name="quantidade" value="1" min="1" required>
    <br><br>

    <button type="submit">Adicionar Item</button>
  </form>

  <br>
  <a href="listar_vendas.php">Ver Vendas</a>
</body>
</html>
