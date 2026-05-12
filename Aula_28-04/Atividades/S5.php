<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
</head>

<body style="text-align: center;">
    <h1>Empresa tãnãnã</h1>

    <?php
    $funcionarios = 1500;
    // Verificação do porte da empresa utilizando if/elseif/else
    if ($funcionarios <= 100) {
        $porte = "Empresa de pequeno porte";
    } elseif ($funcionarios > 100 && $funcionarios <= 500) {
        $porte = "Empresa de medio porte";
    } elseif ($funcionarios > 500 && $funcionarios <= 1000) {
        $porte = "Empresa de grande porte";
    } else {
        $porte = "Multinacional";
    }


    $atuacao = "automotiva";

    switch ($atuacao) {
        case 'automotiva':
            "Empresa no ramo automotivo";
            break;

        case 'agricultura':
            "Empresa no ramo de plantação";
            break;

        default:
            "Grupo de atuação não identificado";
            break;
    }

    $horario = new DateTime();
    $horaAtual = (int) $horario->format('H');

    if ($horaAtual > 18 || $horaAtual < 7) {
        $atendimento = "Fechados";
    } else {
        $atendimento = "Abertos para atendimento";
    }

    echo "Porte da empresa: " . $porte;
    echo "<hr>";
    echo "Ramo da empresa: " . $atuacao;
    echo "<hr>";
    echo "Atendimento: ". $atendimento;
    echo "<hr>";


    ?>
</body>

</html>