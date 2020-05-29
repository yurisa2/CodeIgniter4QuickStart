<?php
echo '<pre>';

$variavel = "Isto é uma string";
var_dump($variavel);


$var2 = 2 . "texto";
var_dump((int)$var2); // O nome disso é casting, usado para GARANTIR O TIPO DE VARIAVEL


$incremento = 0;
$incremento++;// Isso chama Incremento
$incremento++;
$incremento++;
$incremento++;
$incremento--; // Isso chama Decremento
var_dump($incremento);

for ($i=0; $i < 10; $i++) {
  echo "valor de i = " . $i;
  echo "<br>";
}

// ARRAYS ARRAYS ARRAYS

$arr = array(); // $arr = [];
var_dump($arr);

for ($i=0; $i < 10; $i++) {
  // $arr[] = $i; // Nova Posição (próxima)
  // $arr[$i] = $i; // POSICAO ESPECIFICA
  // $arr[$i-22] = $i; // PODE SER NEGATIVA
  $arr[$i^2] = $i;   // Pode conter GAPS
}
var_dump($arr);

$par = array();
$impar = array();

for ($i=0; $i < 6; $i++) {
$par[] = $i;
$impar[] = $i + 1;

$i++; // Informal
}
var_dump($par);
var_dump($impar);

$numeros = array();

$numeros[] = $par;
$numeros[] = $impar;

echo "Array Numeros <br>";
var_dump($numeros);
echo "
<table>
  <tr>
    <th>Coluna 1</th>
    <th>Coluna 2 </th>
    <th>Coluna 3</th>
  </tr>
  <tr>
    <td>".$numeros[0][0]."</td>
    <td>".$numeros[0][1]."</td>
    <td>".$numeros[0][2]."</td>
  </tr>
  <tr>
    <td>".$numeros[1][0]."</td>
    <td>".$numeros[1][1]."</td>
    <td>".$numeros[1][2]."</td>
  </tr>
</table>

";
// https://slideplayer.com.br/slide/1765915/7/images/3/Array+multidimensional.jpg

// $numeros[0][0] $numeros[0][1] $numeros[0][2]
// $numeros[1][0] $numeros[1][1] $numeros[1][2]

echo $numeros[1][1];
echo '<br>';
$numeros[1][1] = 33;
echo $numeros[1][1];
echo '<br>';

var_dump($numeros[1]);

for ($i=0; $i < 3; $i++) { // Maquininha de escovar arrays
  $numeros[1][$i] = $numeros[1][$i] * 2;
}

var_dump($numeros[1]);

for ($i=0; $i < count($numeros[1]); $i++) { // Maquininha de escovar arrays
  $numeros[1][$i] = $numeros[1][$i] * 2;
}

var_dump($numeros[1]);

echo '<br>';
echo 'ARRAYS ASSOCIATIVOS';
echo '<br>';

$assoc = array();
var_dump($assoc);

$assoc['pares'] = $par;
$assoc['impares'] = $impar;
var_dump($assoc);
var_dump($assoc['pares']);

foreach ($assoc as $key => $value) {
  echo "CHAVE: " . $key . "<br>";
  var_dump($value);
}

echo "<br> EXERCICIO RELAMPAGO DENOVO <br>";

$html = "<table>";
foreach ($assoc as $key => $linha) {
  $html .= "<tr>";
  foreach ($linha as $key2 => $value2) {
    $html .= "<td>" . $value2 . "</td>";
  }
  $html .= "</tr>";
}

$html .= "</table>"; // $html = $html."</table>";

echo $html;

 ?>
