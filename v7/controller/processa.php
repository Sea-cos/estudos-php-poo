<?php

require_once '../model/Operacoes.php';
require_once '../model/Soma.php';
require_once '../model/Subtrair.php';
require_once '../model/Multiplicar.php';
require_once '../model/Dividir.php';
require_once '../view/TrataeMostra.php';

//Recepção dos dados
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    //recebe os valores e operação
    $valor1 = $_POST['valor1'] ?? '';
    $valor2 = $_POST['valor2'] ?? '';
    $operacao = $_POST['operacao'] ?? '';

    $val1 = TrataeMostra::parse_num($valor1);
    $val2 = TrataeMostra::parse_num($valor2);

    $result = null;
    $error = null;

    $oper = null;

    if ($val1 === null || $val2 === null) {
        $error = 'Entrada inválida. Certifique-se de informar números válidos.';
    } else {
        switch ($operacao) {

            case 'somar':
                /*
                    nesse trecho, estamos atribuindo o resultado da função somar, 
                    que pertence a classe Calculadora, passando como parametros duas variaveis.
                */
                $oper = new Soma();
                break;

            case 'subtrair':
                $oper = new Subtrair();
                break;

            case 'multiplicar':
                $oper = new Multiplicar();
                break;

            case 'dividir':
                $oper = new Dividir();
                // if ($dividir->getNum2() == 0) {
                //     $error = 'Erro: divisão por zero.';
                // } else {
                //     $result = $dividir->calcula();
                // }

                break;

            default:
                $error = 'Operação desconhecida.';
                break;
        }
        $oper->setNum1($val1);
        $oper->setNum2($val2);
        $result = $oper->calcula();
    }

    TrataeMostra::exibirResultado($error, $operacao, $val1, $val2, $result);
}
?>