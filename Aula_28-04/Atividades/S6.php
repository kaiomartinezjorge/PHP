<?php
// Lista de funcionarios
$funcionarios = [
    ["nome" => "Carlos", "cargo" => "Gerente", "ativo" => true],
    ["nome" => "Ana", "cargo" => "Designer", "ativo" => true],
    ["nome" => "João", "cargo" => "Programador", "ativo" => false],
    ["nome" => "Mariana", "cargo" => "RH", "ativo" => true]
];

echo "<h2>Lista de Funcionários</h2>";
echo "<ul>";

// Loop para percorrer a lista
for ($i = 0; $i < count($funcionarios); $i++) {

    echo "<li>";

    // Exibe nome e cargo
    echo $funcionarios[$i]["nome"] . " - " . $funcionarios[$i]["cargo"];

    // Lógica condicional (if)
    if ($funcionarios[$i]["ativo"]) {
        echo "(Ativo)";
    } else {
        echo "(Inativo)";
    }

    echo "</li>";
}

echo "</ul>";
?>