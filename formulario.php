<?php

require_once 'usuarios.php';
$u = new Usuario;

?>

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
    <h1>Logar</h1>
    <form  method="POST">
    <input type="email" placeholder="Usuario" name="email"> 
    <input type="password" placeholder="Senha" name="senha">
    <input type="submit" value="Acessar">
    <a href="cadastrar.php">Ainda não é inscrito? <strong> Cadastre-se </strong> </a>
    
    </form>
    
    </section>
</body>
</html>
<?php
//<---------------------------------php------------------------
// 1 - VERIFICAR SE ELA APERTOU O BOTÃO CADASTRAR 
// 2 - GURADER DADOS DENTRO DE VARIAVEIS
// 3 - ENVIAR DADOS COLHIDOS PARA A CLASSE, FUNÇÃO CADASTRAR 
// 4 - VERIFICAR O RETORNO FALSE OU TRUE 

if(isset($_POST['email'])) {

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    if (!empty($email) && !empty($senha)) {
        $u->conectar("projeto_login","localhost","root","");
        if ($u->msgErro == "") {
            if ($u->logar($email,$senha)) {
                header("location: areaprivada.php");
            }
            else {
                echo "Email e/ou senha estão incorretos!";
            }
        }
        else {
            echo "Erro:" .$u->msgErro;
        }
    }
    else {
        echo "Preencha todos os campos!";
    }
}

?>