<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];
$sexo = $_POST['sexo'];
$obs = $_POST['obs'];

// Validações
if (empty($nome) || empty($email) || empty($idade) || empty($cidade) || empty($sexo)) {
    echo "<h3 style='color:red;'>Erro: Preencha todos os campos obrigatórios!</h3>";
    exit;
}

if (!is_numeric($idade)) {
    echo "<h3 style='color:red;'>Erro: A idade deve ser numérica!</h3>";
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmação</title>
</head>
<body style="font-family: Arial; background:#f4f4f4;">

<div style="width:400px; margin:auto; background:white; padding:20px; margin-top:50px; border-radius:10px; box-shadow:0px 0px 10px #ccc;">
    
    <h2 style="text-align:center; color:green;">✅ Cadastro realizado!</h2>

    <p><strong>Nome:</strong> <?= $nome ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Idade:</strong> <?= $idade ?></p>
    <p><strong>Cidade:</strong> <?= $cidade ?></p>
    <p><strong>Sexo:</strong> <?= $sexo ?></p>
    <p><strong>Observações:</strong> <?= $obs ?></p>

</div>

</body>
</html>