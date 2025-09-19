#########################################
#      ꧁꧂🤣SOARES🤣꧁꧂          #                              
#########################################
<?php
require_once "Funcionario.php";

$funcionariosFile = "funcionarios.json";

// Cria vazio se não existir
if (!file_exists($funcionariosFile)) file_put_contents($funcionariosFile,"[]");

$funcionarios = json_decode(file_get_contents($funcionariosFile),true);

// Dados do formulário
$nome = $_POST['nome'] ?? null;
$cpf = $_POST['cpf'] ?? null;
$cargo = $_POST['cargo'] ?? null;
$salario = $_POST['salario'] ?? null;

if (!$nome||!$cpf||!$salario) die("❌ Todos os campos são obrigatórios.");

// Gera ID automático 
$novold = count($funcionarios) > 0 ? max(array_column($funcionarios,"idFuncionario")) + 1 : 1;


// Cria objeto Funcionario
$funcionario = new Funcionario($novold, $nome, $cpf, $cargo, (float)$salario);

// Adiciona e salva no JSON
$funcionarios[] = $funcionario->toArray();
file_put_contents($funcionariosFile, json_encode($funcionarios, JSON_PRETTY_PRINT|
JSON_UNESCAPED_UNICODE));


// Redireciona para listagem
header("Location: listar_funcionarios.php");
exit;