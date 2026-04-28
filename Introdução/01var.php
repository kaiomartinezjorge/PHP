<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = "Jorge";
    $idade = 19;
    $telefone = 199989989;

    echo "<Strong> Seu nome é: </Strong> $nome</br> 
    <Strong> Idade: </Strong> $idade</br>
    <Strong> Telefone: </Strong> $telefone</br>
    Casado: ($estadoCivil ? 'Sim' : 'Não')";

?>
</body>
</html>