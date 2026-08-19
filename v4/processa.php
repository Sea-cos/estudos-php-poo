<?php

// require_once 'Calculadora.php';
require_once 'Soma.php';
require_once 'Subtrair.php';
require_once 'Multiplicar.php';
require_once 'Dividir.php';
require_once 'TrataeMostra.php';

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

    //instanciando novo objeto de calculadora
    // $calcoper = new Calculadora();

    if ($val1 === null || $val2 === null) {
        $error = 'Entrada inválida. Certifique-se de informar números válidos.';
    } else {
        switch ($operacao) {

            case 'somar':
                /*
                    nesse trecho, estamos atribuindo o resultado da função somar, 
                    que pertence a classe Calculadora, passando como parametros duas variaveis.
                */
                $soma = new Soma();
                $soma->setNum1($val1);
                $soma->setNum2($val2);
                $result = $soma->calculaSoma();
                break;

            case 'subtrair':
                $subtrair = new Subtrair();
                $subtrair->setNum1($val1);
                $subtrair->setNum2($val2);
                $result = $subtrair->calculaSubtrair();
                break;

            case 'multiplicar':
                $multiplicar = new Multiplicar();
                $multiplicar->setNum1($val1);
                $multiplicar->setNum2($val2);
                $result = $multiplicar->calculaMultiplicar();
                break;

            case 'dividir':
                $dividir = new Dividir();
                $dividir->setNum1($val1);
                $dividir->setNum2($val2);
                if ($dividir->getNum2() == 0) {
                    $error = 'Erro: divisão por zero.';
                } else {
                    $result = $dividir->calculaDividir();
                }

                break;

            default:
                $error = 'Operação desconhecida.';
                break;
        }
    }

    TrataeMostra::exibirResultado($error, $operacao, $val1, $val2, $result);
}
?>