<?php

include_once "app/model/Cliente.php";
include_once "app/controller/Conexao.php";

if (isset($_POST['gravar'])){
    $cliente = new \model\Cliente();
    $cliente->setNome($_POST['nome']);
    $cliente->setTelefone($_POST['telefone']);
    $cliente->setEmail($_POST['email']);

    echo "Os dados informados foram: <br>";
    echo "Nome: <b>".$cliente->getNome()."</b> <br>";
    echo "Telefone: <b>".$cliente->getTelefone()."</b> <br>";
    echo "Email: <b>".$cliente->getEmail()."</b> <br>";

    $sql = "INSERT INTO cliente (nome, telefone, email) VALUES 
                (:nome, :telefone, :email)";

    $p_sql = \controller\Conexao::getInstance()->prepare($sql);
    $p_sql->bindValue(":nome", $cliente->getNome());
    $p_sql->bindValue(":telefone", $cliente->getTelefone());
    $p_sql->bindValue(":email", $cliente->getEmail());

    $p_sql->execute();

    echo $sql;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Cadastro genérico</h2>

        <form action="#" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="gravar">Gravar</button>
            </div>

        </form>

</div>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
