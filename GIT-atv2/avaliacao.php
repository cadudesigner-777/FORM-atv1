

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$nota = $_POST['nota'];


if($nota  > 7){
    $situacao = "Você foi aprovado!";
} elseif($nota >= 5){
    $situacao = "Você está de recuperação";
} else{
    $situacao = "Reprovado";
}

echo "<h3>Resultado da avaliação</h3> <br>";

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Nota: $nota <br>";
echo "Situação: $situacao <br>";

}

?>
