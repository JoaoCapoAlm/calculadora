<?php
function operacoes(int $num1, int $num2, string $operator){
        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 == 0)
                    return "Erro: divisão por zero!";
                else
                    return $num1 / $num2;
            case '^':
                return pow($num1, $num2);
            case '!':
                $result = 1;
                for ($i = 1; $i <= $num1; $i++) {
                    $result *= $i;
                }
                return $result;
            default:
                return "Operador inválido!";
        }
}

function funcoes(string $operacao): void
{
    if(empty($operacao))
        return;

    switch ($operacao){
        case 'apagar':
            session_unset();
            session_destroy();
            break;
        default:
            break;
    }
}