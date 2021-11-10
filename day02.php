<html>
<h3>Day 02 | PHP </h3>
<h3>100 DAYS OF CODE </h3>

</html>
<?php

//Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". 
$val = 20;
$resultado = "";

if ($val > 0) {
  $resultado = "Valor Positivo";
} elseif ($val < 0) {
  $val = "Valor Negativo";
} else {
}
$val = "Igual a Zero";

echo $resultado;
echo "<br>";
echo "<br>";

?>

<?php

/*Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40. */

$valor = 5;

for ($i = 0; $i < 11; $i++) {
  echo $valor . " * " . $i . " = " . $valor * $i . "<br>";
}

echo "<br>";
echo "<br>";


$descubra = 5;
// Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. 
if ($descubra % 2 == 0) {
  echo "Número par";
} else {
  echo "Numero impar";
}
echo "<br>";
echo "<br>";

// Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".

$letraA = 5;
$letraB = 6;
$resultado1 = "";

if ($letraA == 5 & $letraB == 6) {
  echo $letraA . "&nbsp;" . $letraB;
}

echo "<br>";
echo "<br>";


//Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.

$varA = 10;
$varB = 25;

if ($varA > $varB) {
  echo "A maior que B";
} else {
  echo "B maior que A";
}
echo "<br>";
echo "<br>";

/*Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado] */

$notas = [10, 10, 8];
$somaTotal = 0;

for ($i = 0; $i < count($notas); $i++) {
  $somaTotal += $notas[$i];
}
$resultado = number_format($somaTotal / count($notas));

if ($resultado >= 6) {
  echo "Aluno aprovado! Média do semestre: {$resultado}";
} else {
  echo "Aluno reprovado! Média do semestre: {$resultado}";
}
echo "<br>";
echo "<br>";

//Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.

$idade = 15;
$nome = 'Bruna';

if ($idade >= 18) {
  echo "{$nome} é maior de idade e tem {$idade}";
} else {
  echo "{$nome} é menor de idade e tem {$idade}";
}
echo "<br>";
echo "<br>";
//Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.

$mes = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
$numMes = 10;

if ($numMes >= 1 & $numMes <= 12) {
  echo $mes[$numMes - 1];
} else {
  echo "Mês Inválido";
}
