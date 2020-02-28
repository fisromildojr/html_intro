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
<h1>Gere sua música</h1>
<h3>Informe o número de elefantes</h3>
<form action="elefante.php" method="post">
    <input type="text" name="numero" id="">
    <input class="btn btn-success" type="submit" value="Gerar" name="gerar">
</form>
<?php
    if (isset($_POST['gerar'])){
        $num_elefantes = $_POST['numero'];
        for($i = 1; $i <= $num_elefantes; $i++){
            if (($i%2) != 0){
                if ($i == 1){
                    echo $i . " elefante incomoda muita gente<br>\n";
                }else{
                    echo $i . " elefantes incomodam muita gente<br>\n";
                }
            }else{
                echo $i . " elefantes ";
                for ($j = 0; $j < $i; $j++){
                    echo "incomodam ";
                }
                echo "muito mais<br><br>\n";
            }
        }
    }
?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
