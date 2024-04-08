<?php
// try faz o teste de conexao caso não consiga ele irá cath que armazena o erro
try {
    $usuario = "root";
    $senha = "";
    $conn = new PDO('mysql:host=localhost;dbname=bingo', $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // normalmente não apresentamos o erro neste caso queremos saber do erro, casos normais apenas trocas a linha 10 por outra informação
} catch (PDOException $e) {
    echo "<div class='alert alert-danger' role='alert'>   Houve um problema, tente novamente  </div>";
    // pode ser trocado pela mensagem de baixo para não expor nenhuma informação do banco de dados
    // echo "Ocorreu um problemas, estamos resolvendo";
}
