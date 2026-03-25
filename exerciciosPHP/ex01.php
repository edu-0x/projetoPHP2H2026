<?php 
$alunos = [
    ["nome" => "Ana", "idade" => 16, "nota1" => 8.5, "nota2" => 10],
    ["nome" => "Bruno", "idade" => 17, "nota1" => 7.0, "nota2" => 10],
    ["nome" => "Carlos", "idade" => 16, "nota1" => 6.5, "nota2" => 10],
    ["nome" => "Daniela", "idade" => 15, "nota1" => 9.0, "nota2" => 10],
    ["nome" => "Eduardo", "idade" => 17, "nota1" => 5.5, "nota2" => 10],
    ["nome" => "Fernanda", "idade" => 16, "nota1" => 8.0, "nota2" => 10],
];
	
	$aprovado = 0;
	$reprovado = 0;
	$exames = 0;

	foreach ($alunos as $aluno) {

		$notaFinal = ($aluno['nota1'] + $aluno['nota2']) / 2;

		if ($notaFinal < 7 && $notaFinal > 3) {
			$situacao = "Exame";
			$exames++;

		} elseif ($notaFinal <= 3) {
			$situacao = "Reprovado";
			$reprovado++;

		} else {
				$situacao = "Aprovado";
				$aprovado++;

			}
		
			echo "O aluno(a) {$aluno['nome']} tem a média de $notaFinal, <br> 
			Situação: $situacao.<br><br>";
	}

	$mediaClasse += $mediaClasse + $notaFinal;


	echo "<br>Resumo da turma:<br>";
	echo "Aprovados: $aprovado<br>";
	echo "Em exame: $exames<br>";
	echo "Reprovados: $reprovado<br>";
	echo "Média da classe: $mediaClasse";
 ?>