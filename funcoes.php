<?php
function operacoes(int $num1, int $num2, string $operador){
        switch ($operador) {
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

function funcoes(string $operacao, array $args): array
{
    if(empty($operacao))
        return [];

    switch ($operacao){
        case 'apagar':
            session_unset();
            session_destroy();
            break;
        case 'salvar':
            if(session_status() != PHP_SESSION_ACTIVE){
                session_start();
            }
            $_SESSION['num1'] = $args['num1'] ?? '';
            $_SESSION['num2'] = $args['num2'] ?? '';
            $_SESSION['operador'] = $args['operador'] ?? '';
            break;
        case 'pegar':
            return [
                'num1' => $_SESSION['num1'] ?? '',
                'num2' => $_SESSION['num2'] ?? '',
                'operador' => $_SESSION['operador'] ?? ''
            ];
        default:
            break;
    }

    return [];
}