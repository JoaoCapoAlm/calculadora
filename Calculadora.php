<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="João Pedro Capoani e Luis Eduardo" />
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="https://www.up.edu.br/wp-content/themes/cruzeiroportais2019/assets/imagens/marcas/marcaUpFavicon.svg" />
</head>
<body class="p-3 bg-dark">
    <div id="calculadora" class="container p-2 border border-light rounded">
        <header class="text-bg-light border rounded p-2 text-center text-md-start">
            <h1 class="m-0">Calculadora PHP</h1>
        </header>
        <main class="mt-2">
            <form method="get">
                <div class="row">
                    <div class="col-12 col-md-5 mb-1 mb-md-0">
                        <div class="input-group">
                            <label class="input-group-text" for="num1">Número 1</label>
                            <input type="text" class="form-control" id="num1" />
                        </div>
                    </div>
                    <div class="col-12 col-md-2 mb-1 mb-md-0">
                        <div class="input-group">
                            <select class="form-select" aria-label="Operador">
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
                    <div class="col-12 col-md-5">
                        <div class="input-group">
                            <label class="input-group-text" for="num2">Número 2</label>
                            <input type="text" class="form-control" id="num2" />
                        </div>
                    </div>
                </div>
                <div class="row text-center my-2">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-success">Calcular</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <input class="form-control" type="text" aria-label="Resultado" placeholder="Resultado" />
                </div>
                <div class="col-12 mt-2">
                    <button type="button" class="btn btn-warning">Salvar</button>
                    <button type="button" class="btn btn-light">Pegar valores</button>
                    <button type="button" class="btn btn-info">M</button>
                    <button type="button" class="btn btn-info">Apagar histórico</button>
                </div>
            </div>
        </main>
        <footer class="my-2 text-bg-light rounded p-2">
            <h2 class="m-0">Histórico</h2>
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </footer>
    </div>
</body>
</html>