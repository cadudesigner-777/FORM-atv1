<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" class="form-nome">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" placeholder= "Didite seu nome" >
        <br>
        <label for="nome">Idade:</label><br>
        <input type="text" id="idade" name="idade" placeholder= "Didite sua idade" >
        <br>
        <label for="nome">Nota final:</label><br>
        <input type="number" id="nota" name="nota" placeholder= "Didite sua nota" min="0" max="10" >
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>


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

echo "<h3>Resultado</h3> <br>";

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Nota: $nota <br>";
echo "Situação: $situacao <br>";

}

?>
