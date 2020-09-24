<?php
include_once "app/model/Cliente.php";
include_once "app/controller/ClienteController.php";

if (isset($_GET['id'])){
    if (\controller\ClienteController::getInstance()->excluir($_GET['id'])){
        echo "<b>Cliente excluído com sucesso</b>";
    }
}

$listaClientes = \controller\ClienteController::getInstance()->retornaTodos();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="conteiner">
        <h2>Listagem de Clientes</h2>
        <p><a href="cadastro.php" class="btn btn-primary">Novo Cliente</a></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>-</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($listaClientes as $cliente){
                        echo "<tr>";
                        echo "<td>".$cliente->getId()."</td>";
                        echo "<td>".$cliente->getNome()."</td>";
                        echo "<td>".$cliente->getTelefone()."</td>";
                        echo "<td>".$cliente->getEmail()."</td>";
                        echo "<td><a href='clientes.php?id=".$cliente->getId()."' class='btn btn-danger'>Excluir</a>&nbsp;
                                <a href='cadastro.php?id=".$cliente->getId()."' class='btn btn-dark'>Editar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
