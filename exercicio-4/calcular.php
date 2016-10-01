CALCULANDO
<pre>
<?php
require '../bootstrap.php';

$operadores = post('operador');
$valores_1 = post('valor-1');
$valores_2 = post('valor-2');

foreach ($operadores as $index => $operador) {
  # code...

  $valor_1 = null;
  $valor_2 = null;
  $resultado = null;


  if (isset ($valores_1[$index])) {
    # code...
    $valor_1=$valores_1[$index];

  }

  if (isset ($valores_2[$index])) {
    # code...
    $valor_2=$valores_2[$index];

  }

  if (isset ($valor_1) && isset($valor_2)){

    resultado = calcular($valor_1, $valor_2, $operador);

  }
  //var_dump([$index, $operador]);

  function calcular($valor_1, $valor_2, $operador){
    $resultado = 0;

    switch ($operador) {
      case '+':
        $resultado = $valor_1+$valor_2;
        break;
      case '-':
          $resultado = $valor_1-$valor_2;
        break;
      case '/':
          $resultado = $valor_1/$valor_2;
        break;
      case '*':
          $resultado = $valor_1*$valor_2;
        break;

      default:
        echo "Algo de errado não esta certo! :)";
        break;
    }

  }
}
