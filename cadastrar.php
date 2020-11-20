<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title>Formulario</title>
</head>
<body>
    <section>
    
    <h1>Cadastrar</h1>
    
    <form action="" method="POST">
    <input type="text" placeholder="Nome Completo" maxlength="30" name="nome">
    <input type="text" placeholder="Telefone" maxlength="15" name="telefone">
    <input type="email" placeholder="Usuario" maxlength="40" name="usuario">
    <input type="password" placeholder="Senha" maxlength="30" name="senha">
    <input type="password" placeholder="Confirmar Senha" name="confirmarSenha">
    <input type="submit" value="Cadastrar">
    </form>
    
    </section>
<?php
//verificar se clicou no botao 
isset($_POST['nome']) {
    $nome = addslashes($_POST['nome']); //addslashes impede qualquer ação maliciosa 
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confirmarSenha']);
}

?>

</body>
</html>