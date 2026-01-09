

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

$media = ($nota1 + $nota2) / 2;


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
echo "Media: $media <br>";
echo "Situação: $situacao <br>";
}

?>
