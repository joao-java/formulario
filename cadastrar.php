<?php
    require_once 'usuarios.php';
    $u = new Usuario;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="1estilo.css">
    <title>Formulario</title>
</head>
<body>
    <section>
    
    <h1>Cadastrar</h1>
    
    <form method="POST">
    <input type="text" placeholder="Nome Completo" maxlength="30" name="nome">
    <input type="text" placeholder="Telefone" maxlength="15" name="telefone">
    <input type="email" placeholder="Usuario" maxlength="40" name="email">
    <input type="password" placeholder="Senha" maxlength="30" name="senha">
    <input type="password" placeholder="Confirmar Senha" name="confirmarSenha">
    <input type="submit" value="Cadastrar">
    </form>
    
    </section>

    <aside class="aside">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="formulario.php">Login</a></li>
            <li><a href="cadastrar.php">cadastrar</a></li>
    </aside>

<?php
//verificar se clicou no botao 
if(isset($_POST['nome'])) {
    $nome = addslashes($_POST['nome']); //addslashes impede qualquer ação maliciosa 
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confirmarSenha']);
    //verificar se esta preenchido
    if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
        $u->conectar("projeto_login","localhost","root","");
        if ($u->msgErro == "") { //esta tudo ok
            if ($senha == $confirmarSenha) {
                if($u->cadastrar($nome,$telefone,$email,$senha)) {
                    ?>
                    <div class="msg-sucesso">
                        Cadastrado com sucesso ! acesse para entrar!
                    </div>
                    <?php
                }
                else {
                    ?>
                    <div class="msg-erro">
                         Email ja cadastrado ! 
                    </div>
                    <?php
                }
            }
            else {
                ?>
                <div class="msg-erro">
                    Senha e confirmar senha não correspondem
                </div>
                <?php
            }
        }
        else {
            ?>
            <div class="msg-erro">
            <?php echo "Erro: ".$u->msgErro; ?>
            </div>
            <?php
        }
    }
    else {
        ?>
        <div class="msg-erro">
            Preencha todos os campos!!
        </div>
        <?php
    }
}

?>

</body>
</html>