<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_cliente.php" method="post">
    <label>Nome:</label>
    <input type="text" name="nome" required><br>

    <label>CPF:</label>
    <input type="text" name="cpf" required><br>

    <label>Credito:</label>
    <input type="number" step="0.01" name="credito"><br>

    <label>Saldo:</label>
    <input type="number" step="0.01" name="saldo"><br>

    <button type="submit">Cadastrar Cliente</button>
</form>
</body>
</html>
