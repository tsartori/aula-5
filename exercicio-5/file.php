
<h2>Exercício 5</h2>
<p>Criar funções para realizar as operações matemáticas disponíveis</p>
<?php
//function
require '../vendor/autoload.php';

use Fagoc\Calculadora;

$action = get('action');

switch ($action) {
  case 'calcular':
    $valor1 = post('valor-1');
    $valor2 = post('valor-2');
    $operador = post('operador');

    if($valor1 && $valor2 &&$operador){
      //require __APP_ROOT__ . '/src/model/Calculadora.php';
      $calculadora = new Calculadora("Sartori");
      $resultado = 0;
      $calculadora->calcular($valor1[0],$valor2[0],$operador[0]);

      $calculadora->modo = "Científica";

      echo "<h3>RESULTADO</h3>";
      echo "<table border=1>" .
              "<tr>" .
                "<th>DONO</th>" .
                "<th>MODO</th>" .
                "<th>SAÍDA</th>" .
              "<tr>" .
              "<tr>" .
                "<td>{$calculadora->dono}</td>" .
                "<td>{$calculadora->modo}</td>" .
                "<td>{$resultado}</td>" .
              "<tr>" .
            "</table>";

      //echo "o resultado é {$resultado}";
      echo '<br>';
      echo '<a href="file.php?action=novo"> De novo! </a>';

    }
    break;

  default:
    echo '<form method="POST" action="file.php?action=calcular">';
    require_once __APP_ROOT__ . '/src/view/formulario-operacao.php';

    echo '<br>';
    echo '<input type="submit" value="Calcular"/>';
    echo '</form>';
    break;
}
