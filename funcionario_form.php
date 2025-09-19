<!DOCTYPE html>
<!--funcionario_form.php-->
<!-- 
Davi Antonio Santos
-->
<html>html lang="pt-br" </html>
<head>
    <meta charset="UFT-8">
    <title>Cadastro de funcionário</title>
</head>
<body>
    <h1>Cadastro de Funcionário</h1>
<form action="salvar_funcionario.php" method="post">
    <label>Nome:</label><br>
    <input type="text"name="nome"required><br><br>
    <label>CPF:</label><br>
    <input type="text" name="nome" required><br><br>
    <label>Cargo:</label><br><br>
    <input type="text"name="cpf" required><br><br>
    <label>Salário (R$):</label><br>
    <input type="number" step="0.01" name="salario" required><br><br>
    <button type="submit">Salvar Funcionário</button>
</form>
<br>
<a href="listar_funcionarios.php">📋Listar Funcionarários</a>
</body>
</html>