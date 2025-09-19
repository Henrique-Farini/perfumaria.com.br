#########################################
#             Joao
#########################################
               
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>

    <form action="salvar_produto.php" method="post">
        <label>Nome do produto:<label><br>
        <input type="text" name="nome" required><br><br>

        <label>Preço (R$):<label><br>
        <input type="number" step="0.01" name="preco" required><br><br>

        <button type="submit">Salvar Produto</button>
</form>

<br>
<a href="venda_form.php">Voltar para Vendas</a>

</body>

</html>




