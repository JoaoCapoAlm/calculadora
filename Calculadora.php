<?php
require_once 'funcoes.php';
    session_start();
    if (!isset($_SESSION['historico'])) {
        $_SESSION['historico'] = array();
    }

    $result = '';
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operator'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operator = $_GET['operator'];

        $result = operacoes($num1, $num2, $operator);
        array_unshift($_SESSION['historico'], "$num1 $operator $num2 = $result");
    }

    if(isset($_GET['funcao'])){
        funcoes($_GET['funcao']);
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
            <form method="get">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-5 mb-1 mb-md-0">
                        <div class="input-group">
                            <label class="input-group-text" for="num1">Número 1</label>
                            <input type="text" class="form-control" id="num1" name="num1" required />
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2 mb-1 mb-md-0">
                        <div class="input-group">
                            <select class="form-select" aria-label="Operador" name="operator" required>
                                <option value="" selected disabled>Operador</option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                                <option value="^">^</option>
                                <option value="!">!</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-5">
                        <div class="input-group">
                            <label class="input-group-text" for="num2">Número 2</label>
                            <input type="text" class="form-control" id="num2" name="num2" required />
                        </div>
                    </div>
                </div>
                <div class="row text-center my-2">
                    <div class="d-grid gap-2 col-12 col-md-6 mx-auto">
                        <button type="submit" class="btn btn-success">Calcular</button>
                    </div>
                </div>
            </form>
        </main>
        <section class="row">
            <div class="col-12 mb-2">
                <input class="form-control" type="text" aria-label="Resultado" placeholder="Resultado" value="<?= $result; ?>" readonly />
            </div>
            <div class="col-12 col-md-8 mx-auto d-flex flex-column flex-md-row justify-content-evenly">
                <button type="button" class="btn btn-warning mb-1 mb-md-0">Salvar</button>
                <button type="button" class="btn btn-light mb-1 mb-md-0">Pegar valores</button>
                <button type="button" class="btn btn-info mb-1 mb-md-0">M</button>
                <a href="?funcao=apagar" class="btn btn-info">Apagar histórico</a>
            </div>
        </section>
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