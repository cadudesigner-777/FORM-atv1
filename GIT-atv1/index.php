



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
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>


<?php if(isset($_POST['nome']) && trim($_POST['nome']) !== ''){
    $nome = trim($_POST['nome']);
    echo "Seja bem-vindo, $nome!";
} else{
    echo "Por favor, insira seu nome!";
}
?>
