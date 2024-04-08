<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo!</title>
    <!-- Arquivo para css feito a mão-->
    <link rel="stylesheet" type="text/css" href="./bootstrap-5.1.3-dist/css/estilo_customizado.css">
    <!-- Arquivo para css -->
    <link rel="stylesheet" type="text/css" href="./bootstrap-5.1.3-dist/css/bootstrap.css">
    <!-- arquivo de javascript funções de ações -->
    <script type="text/javascript" src="./bootstrap-5.1.3-dist/js/bootstrap.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema Bingo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="cadastro_jogo.php" method="POST" id="formulario-abertura-jogo" accept-charset="utf-8">
        <div class="mb-3">
            <label for="QtdCartela" class="form-label">Qtd. Cartelas </label>
            <input type="number" class="form-control" name="qtd_cartela_jogo" id="QtdCartela" aria-describedby="emailHelp" required>
            <div id="QtdCartelaHlep" class="form-text">Ex: Adicione se será 3 Cartelas por 10 reais</div>
        </div>
        <div class="mb-3">
            <label for="ValorCartela" class="form-label">Valor Conj. Cartela.</label>
            <input type="number" step="0.01" name="valor_cartela_jogo" class="form-control" id="ValorCartela" required>
            <div id="QtdCartelaHlep" class="form-text">Ex: 10 reais por 3 cartelas</div>
        </div>
        <div class="mb-3">
            <label for="ValorCartela" class="form-label">Porcentagem da Casa %</label>
            <input type="number" step="0.01" name="porcentagem_casa" class="form-control" id="ValorCartela" required>
            <div id="QtdCartelaHlep"  class="form-text">Ex: 10 para 10%, 15 para 15%..</div>
        </div>

        <input type="submit" id="EnviarDados" name="btn_cadastro" value="Abrir Jogo" class="btn btn-success">
    </form>
</body>

</html>