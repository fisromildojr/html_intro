<?php

include_once "app/model/Cliente.php";
include_once "app/controller/ClienteController.php";

$cliente = new \model\Cliente();

if (isset($_GET['id'])){
   $cliente = \controller\ClienteController::getInstance()->buscarCliente($_GET['id']);
}

if (isset($_POST['gravar'])){
    $cliente->setId("0".$_POST['id']);
    $cliente->setNome($_POST['nome']);
    $cliente->setTelefone($_POST['telefone']);
    $cliente->setEmail($_POST['email']);

    if (\controller\ClienteController::getInstance()->gravar($cliente)){
        header('Location: clientes.php');
    }
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
            <input type="hidden" name="id" value="<?php echo $cliente->getId();?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="" class="form-control" value="<?php echo $cliente->getNome();?>">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="" class="form-control" value="<?php echo $cliente->getTelefone();?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="form-control" value="<?php echo $cliente->getEmail();?>">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="gravar">Gravar</button>
                <a href="clientes.php" class="btn btn-danger">Cancelar</a>
            </div>

        </form>

</div>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
