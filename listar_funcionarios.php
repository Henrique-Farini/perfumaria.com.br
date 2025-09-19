<?php  
    // listar_funcionarios.php
    require_once "Funcionario.php";

    $funcionariosFile = "funcionarios.json";
    if (!file_exists($funcionariosFile)) file_put_contents($funcionariosFile, "[]");

    $funcionariosJSON = json_decode(file_get_contents($funcionariosFile), true);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>
</head>
<body>
    <h1>Funcionários Cadastrados</h1>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Cargo</th>
            <th>Salário(R$)</th>
            <th>Ações</th>
        </tr>
    <?php foreach ($funcionariosJSON as $f): ?>
        <tr>
            <td><?= $f['idFuncionario']?></td>
            <td><?= $f['nome']?></td>
            <td><?= $f['cpf']?></td>
            <td><?= number_format($f['salario'],2,',','.')?></td>
            <td>
                <form action="excluir_funcionario.php" method="post" style="display:inline;" onsubmit="return
                confim('Deseja realmente excluir este funcionário?');">
                    <input type="hidden" name="idFuncionario" value="<?=$f['idFuncionario']?>">
                    <button type="submit">❌Excluir</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
    
    
</body>
</html>