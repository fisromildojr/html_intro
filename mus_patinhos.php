<?php
/*$cliente = "Renato";
if ($cliente == "Abreu"){

}
while($cliente == "Romildo"){

}
for($i = 0; $i <= 10; $i++){

}
echo "Sr. " . $cliente . " Oliveira";*/

$n_patinhos = $_POST['numero'];

for ($i = $n_patinhos; $i > 0;$i--){
    if ($i > 1){
        $trecho1 = " patinhos foram";
        $trecho2 = " patinhos voltaram";
    }else{
        $trecho1 = " patinho foi";
    }
    echo $i . $trecho1 . " passear<br>\n";
    echo "Além das montanhas para brincar<br>\n";
    echo "A mamãe patinha fez cuá cuá cuá<br>\n";

    if ($i > 2){
        echo "Mas só ".($i-1). $trecho2 . " de lá<br>\n";
    }else if ($i == 2){
        echo "Mas só ".($i-1). " patinho voltou de lá<br>\n";
    }else{
        echo "Mas nenhum patinho voltou de lá<br>\n";
    }
    echo "<br>";
}
?>
