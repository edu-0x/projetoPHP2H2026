<?php

$i = 1;

$totalAprovados = 0;
$totalExame = 0;
$totalReprovados = 0;

$somaClasse = 0;

while ($i <= 6) {

    // Notas fixas (você pode mudar aqui)
    if ($i == 1) { $nota1 = 5; $nota2 = 7; }
    else if ($i == 2) { $nota1 = 2; $nota2 = 3; }
    else if ($i == 3) { $nota1 = 8; $nota2 = 9; }
    else if ($i == 4) { $nota1 = 6; $nota2 = 6; }
    else if ($i == 5) { $nota1 = 1; $nota2 = 2; }
    else { $nota1 = 7; $nota2 = 8; }

    $media = ($nota1 + $nota2) / 2;

    echo "Aluno $i <br>";
    echo "Média: $media <br>";

    if ($media < 3) {
        echo "Reprovado <br><br>";
        $totalReprovados++;
    } 
    else if ($media <= 7) {
        echo "Exame <br><br>";
        $totalExame++;
    } 
    else {
        echo "Aprovado <br><br>";
        $totalAprovados++;
    }

    $somaClasse += $media;

    $i++;
}

$mediaClasse = $somaClasse / 6;

echo "<br>Total Aprovados: $totalAprovados <br>";
echo "Total Exame: $totalExame <br>";
echo "Total Reprovados: $totalReprovados <br>";
echo "Média da Classe: $mediaClasse <br>";

?>