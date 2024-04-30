<?php
require_once 'funcoes.php';
    session_start();
    if (!isset($_SESSION['historico'])) {
        $_SESSION['historico'] = array();
    }

    $result = '';
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operador'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operador = $_POST['operador'];

        $result = operacoes($num1, $num2, $operador);
        array_unshift($_SESSION['historico'], "$num1 $operador $num2 = $result");
    }

    $retorno = [];
    $funcao = $_GET['funcao'] ?? '';
    $operador = '';
    if(isset($_GET['funcao'])){
        $args = [
            'num1' => $_POST['num1'] ?? '',
            'num2' => $_POST['num2'] ?? '',
            'operador' => $_POST['operador'] ?? ''
        ];
        $retorno = funcoes($_GET['funcao'], $args);
        $operador = $retorno['operador'] ?? '';
    }
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="João Capoani e Luis Eduardo" />
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="shortcut icon"
          href="https://www.up.edu.br/wp-content/themes/cruzeiroportais2019/assets/imagens/marcas/marcaUpFavicon.svg" />
</head>
<body class="p-3 bg-dark">
    <div id="calculadora" class="container p-2 border border-light rounded">
        <header class="text-bg-light border rounded p-2 text-center text-md-start">
            <h1 class="m-0">Calculadora PHP</h1>
        </header>
        <main class="mt-2">
            <form method="post">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-5 mb-1 mb-md-0">
                        <div class="input-group">
                            <label class="input-group-text" for="num1">Número 1</label>
                            <input type="text" class="form-control" id="num1" name="num1" required
                                   value="<?= $funcao == 'pegar' ? ($retorno['num1'] ?? '') : '' ?>" />
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2 mb-1 mb-md-0">
                        <div class="input-group">
                            <select class="form-select" aria-label="Operador" name="operador" required>
                                <option value="" <?= $operador == '' ? 'selected' : '' ?>  disabled>Operador</option>
                                <option value="+" <?= $operador == '+' ? 'selected' : '' ?>>+</option>
                                <option value="-" <?= $operador == '-' ? 'selected' : '' ?>>-</option>
                                <option value="*" <?= $operador == '*' ? 'selected' : '' ?>>*</option>
                                <option value="/" <?= $operador == '/' ? 'selected' : '' ?>>/</option>
                                <option value="^" <?= $operador == '^' ? 'selected' : '' ?>>^</option>
                                <option value="!" <?= $operador == '!' ? 'selected' : '' ?>>!</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-5">
                        <div class="input-group">
                            <label class="input-group-text" for="num2">Número 2</label>
                            <input type="text" class="form-control" id="num2" name="num2" required
                                value="<?= $funcao == 'pegar' ? ($retorno['num2'] ?? '') : '' ?>" />
                        </div>
                    </div>
                </div>
                <div class="row text-center my-2">
                    <div class="d-grid gap-2 col-12 col-md-6 mx-auto">
                        <button type="submit" formaction="?funcao=" class="btn btn-success">Calcular</button>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <input class="form-control" type="text" aria-label="Resultado" placeholder="Resultado" value="<?= $result; ?>" readonly />
                </div>
                <div class="col-12 col-md-8 mx-auto d-flex flex-column flex-md-row justify-content-evenly">
                    <button type="submit" formaction="?funcao=salvar" class="btn btn-warning mb-1 mb-md-0">Salvar</button>
                    <a href="?funcao=pegar" class="btn btn-light mb-1 mb-md-0">Pegar valores</a>
                    <a href="?funcao=m" class="btn btn-info mb-1 mb-md-0">M</a>
                    <a href="?funcao=apagar" class="btn btn-info">Apagar histórico</a>
                </div>
            </form>
        </main>
        <footer class="mt-2 text-bg-light rounded p-2">
            <h2 class="m-0">Histórico</h2>
            <div class="row">
                <div class="col-12">
                    <ul class="list-group mt-2">
                        <?php
                            if (isset($_SESSION['historico'])) {
                                foreach ($_SESSION['historico'] as $historico) {
                                    echo "<li class='list-group-item'>$historico</li>";
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>