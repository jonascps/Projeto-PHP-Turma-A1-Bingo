<?php
// include once é para conseguirmos mostrar erro critical que normalmente não aparece sem o _once. (Erro crítico caso estiver com erros incomum banco de dados)
include_once 'conexao.php';
// :nome é uma referencia que usamos como um apelido
$codigo = $_POST['n_codigo'] ;
$id_jogo= $_POST['id_jogo'] ;

$consulta = $conn->query("SELECT * FROM cartela WHERE n_codigo_barra LIKE '" . $codigo  . "' ; ");
$lista = $consulta->fetch(PDO::FETCH_ASSOC);

if ($lista['id_cartela'] > 0) {
    $cadastro = $conn->prepare('INSERT INTO `jogo_cartela` (`cartela_id_cartela`, `jogo_id_jogo`) VALUES (:cartela_id_cartela, :jogo_id_jogo);');
    $cadastro->execute(array(
        // referenciamos o apelido e depois adicionamos o valor
        ':cartela_id_cartela' => $lista['id_cartela'],
        ':jogo_id_jogo' => $id_jogo
    ));
    echo "<br/>  <div class='alert alert-success' role='alert'>   Adicionado com Sucesso!  </div>";
}


//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$lista = $conn->query("SELECT * FROM jogo_cartela WHERE jogo_id_jogo = " . $id_jogo);
$numero = 1;
if (($lista) and ($lista->rowCount() != 0)) {
    while ($linha = $lista->fetch(PDO::FETCH_ASSOC)) {
        echo "<li> $numero º Cartela Adicionado </li>";
        $numero++;
    }
} else {
    echo "<br/> <div class='alert alert-warning' role='alert'>Não encontramos, preencha corretamente </div>";
}
