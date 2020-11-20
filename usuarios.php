<?php

class Usuario{
    private Spdo;

    public function conectar(%nome, $host, $usuario< $senha){
        global $pdo;
        try {
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$
                    host,$usuario,$senha)
            }
        }
        catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }
    public function cadastrar($nome, $telefone, $email, $senha){
        global $pdo;
        //verificar se ja esxiste o email cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $slq->bindValue(":e",$email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return false; //ja esta cadastrado
        }
        //caso não, Cadastrar
        else{
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha)
            VALUES (:n, :t, :e, :s)");
            $slq->bindValue(":n",$nome);
            $slq->bindValue(":t",$telefone);
            $slq->bindValue(":e",$email);
            $slq->bindValue(":s",$senha);
            return true;

        }


    }
    public function logar($email, $senha){
        global $pdo;
        //verificar se o email e senha estao cadastrados, se sim
        $sql = Spdo->prepare("SELECT id_usuarios] FROM usuarios WHERE email= :e AND senha = :s");
        $slq->bindValue(":e",$email);
        $slq->bindValue(":s",$senha);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            session_star();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true;
        }
        else {
            return false;
        }
        //entra no sistema (sessao)

    }

}

?>