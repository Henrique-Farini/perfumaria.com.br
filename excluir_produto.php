
<?php
##############################################
#        🤍Beatriz Marques Nobrega🤍        #
##############################################
 /*       /^ ^\
         / 0 0 \
         V\ Y /V
          / - \
         /    |
        V__)  |  

    .·´¯`(>▂<)´¯`·.            */

$produtosFile = "produtos.json";

// Se não existir, cria o arquivo JSON
if (!file_exists($produtosFile)) {
    file_put_contents($produtosFile, "[]");
}

// Carrega produtos
$produtos = json_decode(file_get_contents($produtosFile), true);

// Recebe o ID enviado pelo formulário
$id = $_POST['id'] ?? null;

if ($id === null) {
    die("❌ ID do produto não informado.");
}

// Remove o produto com base no ID
$produtos = array_filter($produtos, function($p) use ($id) {
    return $p['id'] != $id;  // mantém todos MENOS o excluído
});

// Reorganiza os índices
$produtos = array_values($produtos);

// Salva alterações
file_put_contents(
    $produtosFile,
    json_encode($produtos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

// Redireciona de volta
header("Location: listar_produtos.php");
exit;