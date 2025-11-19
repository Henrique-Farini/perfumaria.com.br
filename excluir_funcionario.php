
<?php
// excluir_Funcionario 
$funcionariosFile = "funcionarios.json";
if (!file_exists($funcionariosFile))file_put_contents($funcionariosFile, "[]");
//-----------------------------------//
//------------CESAR AUGUSTO----------//
//-----------------------------------//
// Se o arquivo não existir, cria um vazio
if (!file_exists($funcionariosFile)) {
    file_put_contents($funcionariosFile, "[]");
}

$funcionarios = json_decode(file_get_contents($funcionariosFile), true);

// ID vindo do formulário
$idFuncionario = $_POST['idFuncionario'] ?? null;

if (!$idFuncionario) {
    die("❌ ID do funcionário não informado.");
}

// Remove o funcionário com base no ID
$funcionarios = array_filter($funcionarios, function($f) use ($idFuncionario) {
    // remove quem TEM o mesmo id (por isso !=)
    return $f['idFuncionario'] != $idFuncionario;
});

// Reorganiza os índices após a remoção
$funcionarios = array_values($funcionarios);

// Salva novamente no JSON
file_put_contents(
    $funcionariosFile,
    json_encode($funcionarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

// Redireciona para a listagem
header("Location: listar_funcionarios.php");
exit;
