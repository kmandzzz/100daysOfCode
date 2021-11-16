<html>
<h3>DAY 04 | PHP</h3>

<h3>100 Days of Code with PHP</h3>
<?php

//Constantes: como o proprio nome já diz: é um valor fixo, imutável. Podemos definir uma constante em PHP assim:
define('MEU_NOME', 'Amanda'); //o define() define a constante e utilizamos LETRAS MAIÚSCULAS pq identifica facilmente que é uma contante
echo MEU_NOME; //quando se trata de constantes podemos imprimir o valor sem a necessidade das aspas simples

echo '<br>';

//um array pode ser declarado de duas formas:

$array = array('eu', 'tu', 'ele', 'nós', 'vós'); //primeira maneira 

$arrayUm = ["mãe', 'pai', 'irmão', 'cachorro"]; //segunda maneira


/*não conseguimos utilizar o comando 'echo' para imprimir o array pois não será possível converter o mesmo em string
aí tu pensa: e como vou imprimir um array??? :/ 

para isso a gente utiliza o print_r -> printar um array :D 

bora ver na prática
*/

print_r($arrayUm); //aí vai sair o resultado bonitinho do array ;)
echo '<br>';
print_r($array);

echo '<br>';

//Array associativo -> contém um CHAVE e um VALOR

$nomes = array(
  'cliente1' => 'amanda', //cliente1 sendo a CHAVE e 'amanda' sendo o VALOR
  'cliente2' => 'luciana'
); //cliente2 sendo a CHAVE e 'luciana' sendo o VALOR
print_r($nomes);
echo '<br>';
//outra maneira de um array associativo

$sobrenomes = [
  'amanda' => 'dias',
  'pedro' => 'gomes'
];
print_r($sobrenomes);
echo '<br>';

//podemos criar arrays associativos com o comando compact(); 
/* o compact(); cria um array contendo uma variável e seus valores.
ele vai percorrer a variável com o nome definido no parametro e vai adicionar no array de saída o valor daquela variável 

*/

$conteudo = 'amanda';
$semIdeia = 'dias';

$resultado = compact('conteudo', 'semIdeia');
print_r($resultado);

echo '<br>';

//Criação de um array em que a ordem seja reversa
$carro = ['palio', 'corsa', 'siena', 'onix'];
$carro = array_reverse($carro, false); //o array_reverse cria esse array reverso

//aqui exibe o nosso array em ordem reversa, mostrando cada valor dentro da várial $carro
//o $car, no singular, é pq a cada interação do array nós temos um $carro (ou seja, um palio, um corsa...)
foreach ($carro as $car) {
  echo "Os carros são: $car <br>";
}

$salarios = [
  'Amanda' => 2500,
  'Suelen' => 1000
];

echo "O salário da Amanda é: " . $salarios['Amanda'];
echo '<br>';
echo "O salário da Suelen é: " . $salarios['Suelen'];

echo '<br>';

$salarios['Amanda'] = "Alto";
$salarios['Suelen'] = "Baixo";

echo "O salário da Amanda é " . $salarios['Amanda'];
echo '<br>';
echo "O salário da Suelen é " . $salarios['Suelen'];
echo '<br>';

//ARRAY MULTIDIMENSIONAL 

$qualificacao = array(
  'Amanda' => array(
    0 => 'PHP',
    1 => 'HTML',
    2 => 'CSS'
  ),
  'Suelen' => array(
    0 => 'Psicologia',
    1 => 'Atendimento ao cliente',
    2 => 'Suporte'
  ),
  'Angélica' => array(
    0 => 'Cozinheira',
    1 => 'Cuidadora de idosos',
    2 => 'Faxineira'
  )
);
echo "As competencias da Suelen são: ";
foreach ($qualificacao['Angélica'] as $qualificado) {
  echo $qualificado . ';' . '<br>';
}
echo '<br>';
