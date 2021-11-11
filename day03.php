<html>
<h3>Day 03 | PHP </h3>
<h3>100 DAYS OF CODE </h3>

</html>

<?php

// Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.

$nome = 'Angêla';
$idade = 30;
$sexo = 'masculino';

if ($sexo == 'feminino' & $idade <= 25) {
  echo "{$nome}" . '&nbsp' . 'ACEITA';
} else {
  echo "{$nome}" . '&nbsp' . 'NÃO ACEITA';
}

// Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar.

$array = array(2, 4, 6, 8, 7, 9, 11);
$par = array();
$impar = array();

foreach ($array as $item) {
  if ($item % 2 == 0) {
    echo "o numero $item é par <br>";
  } else {
    echo "o numero $item é impar <br>";
  }
}

//Ler nome, endereço e telefone e imprimi-los.

$nome1 = 'Amanda';
$endereco = 'Av. Joaquim da Costa Lima';
$tel = '(21) 97014-1306';

echo "A $nome1 mora em $endereco e o telefone dela é: $tel";

//Entrar com um número no formato CDU e imprimir invertido: UDC. (Exemplo: 123, sairá 321).

$array1 = array(1, 2, 3);
$array1 = array_reverse($array1, false); //com o 'false' é aplicado a ordem inversa do array

for ($i = 0; $i < count($array1); $i++) {
  echo $array1[$i] . "<br>";
}

$array2 = array(4, 5, 6);
for ($i = 0; $i < count($array2); $i++) {
  echo $array2[$i] . "<br>";
}

//Imprimir um número que contenha seu antecessor e sucessor
$numero1 = 10;
$antecessor = $numero1 - 1;
$sucessor = $numero1 + 1;

echo "O sucessor é $sucessor e o antecessor é $antecessor";

?>