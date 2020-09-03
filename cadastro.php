<?php

if (isset($_POST['gravar'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    echo "Os dados informados foram: <br>";
    echo "Nome: <b>$nome</b> <br>";
    echo "Telefone: <b>$telefone</b> <br>";
    echo "Email: <b>$email</b> <br>";

    $sql = "INSERT INTO cliente (nome, telefone, email) VALUES 
                ('$nome', '$telefone', '$email')";
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
