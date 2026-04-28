<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <header>
        <h1>XPOT</h1>
    </header>
    <?php 
    $fundacao = 1894;
    $anoAtual = 2026;

    $tempoEmpresa = $anoAtual - $fundacao;

    $funcionarios = 500;

    if ($tempoEmpresa > 100) {
        $tempoEmpresa = "uma empresa com mais de um seculo no mercado";
    }
    else{
        $tempoEmpresa = $tempoEmpresa;
    }

    $faturamentoAnual = 100000000;
    $gastoAnual = 1000000;

    $lucro = $faturamentoAnual - $gastoAnual;

    echo "Bem vindo, somos a XPOT " . $tempoEmpresa . " Atualmente contamos com " . $funcionarios . " Funcionarios e um lucro de R$: ". $lucro;
    ?>
</body>
</html>