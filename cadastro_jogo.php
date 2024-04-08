<?php
// include once é para conseguirmos mostrar erro critical que normalmente não aparece sem o _once. (Erro crítico caso estiver com erros incomum banco de dados)
include_once 'conexao.php';

// :nome é uma referencia que usamos como um apelido
$cadastro = $conn->prepare('INSERT INTO `jogo` (`qtd_cartela_jogo`, `valor_cartela_jogo`, `porcentagem_casa`) VALUES (:qtd_cartela_jogo, :valor_cartela_jogo , :porcentagem_casa );');
$cadastro->execute(array(
    // referenciamos o apelido e depois adicionamos o valor
    ':qtd_cartela_jogo' => $_POST['qtd_cartela_jogo'],
    ':valor_cartela_jogo' => $_POST['valor_cartela_jogo'],
    ':porcentagem_casa' => $_POST['porcentagem_casa']
));

?>
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
    <!-- ICONES USADO NO ALERT -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
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
    <?php
    // Pegar id para ser cadastrado 
    $id = $conn->lastInsertId();

    if ($id > 0) {
    ?>
        <div class="alert alert-success d-flex alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                Jogo Aberto com Sucesso
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    } else {
        header('index.php');
    }

    ?>
    <div  id="formulario-abertura-jogo" accept-charset="utf-8">
        <div class="mb-3">
            <label for="Ncodigo" class="form-label">Código da Cartela</label>
            <input type="text" onmouseover="this.focus();" class="form-control" name="n_codigo" id="n_codigo" aria-describedby="emailHelp" required>
            <div id="NcodigoHelep" class="form-text">Ex: Adicione o código de Barra usando scanner</div>
        </div>
        <input type="hidden" id="id_jogo" name="id_jogo" value="<?php echo  $id ?>">

    </form>
    <button type="submit" id="EnviarDados" name="EnviarDados" value="<?php echo  $id ?>" class="btn btn-success">Iniciar Jogo</button>
    <ul class="resultado">

    </ul>
    <!-- versão ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js -->
    <script type="text/javascript" src="./jquery/jquery.min.js"></script>
    <script type="text/javascript" src="personalizado.js"></script>
</body>

</html>