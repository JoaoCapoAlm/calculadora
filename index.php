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
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
    <div id="calculadora" class="container">
        <header>
            <h1>Calculadora PHP</h1>
        </header>
        <main>
            <div class="row mb-2">
                <div class="col-12 col-md-5 mb-1 mb-md-0">
                    <div class="input-group">
                        <label class="input-group-text" for="num1">Número 1</label>
                        <input type="text" class="form-control" id="num1" />
                    </div>
                </div>
                <div class="col-12 col-md-2 mb-1 mb-md-0">
                    <div class="input-group">
                        <select class="form-select" aria-label="Operador">
                            <option value="+" selected>+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
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
            <div class="row text-center">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-success">Calcular</button>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>