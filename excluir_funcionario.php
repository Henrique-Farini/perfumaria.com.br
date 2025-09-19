<?php
// excluir_Funcionario 
$funcionariosFile = "funcionarios.json";
if (!file_exists($funcionariosFile))file_put_contents($funcionariosFile, "[]");

$funcionarios = json_decode(file_get_contents($funcionariosFile), true);

$idFuncionarios = $_POST['idFuncionario']?? null;
if (!$idFuncionario) die("❌ ID do funcionario não informado. ");

//Remove o funcionario 
$funcionarios = array_filter($funcionarios, fn($f) => $f['idFuncionar'])





$funcionarios = array_values($funcionarios); //reorganiza indices 

file_put_contents($funcionariosFile, json_encode($funcionarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

//REDIRECIONA PARA A LISTAGEM 

header("Location: listar_funcionarios.php");

exit;