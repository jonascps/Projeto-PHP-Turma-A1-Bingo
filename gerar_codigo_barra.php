<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lendo Código de Barra</title>
</head>

<body>
<div style='text-align: center;'>
    <?php
    // verifica se algum valor chegou a página
    if (isset($_POST['codigo']) != null) {
        $valor = $_POST['codigo'];
    ?>
        <p>Receber código de barra </p>
      

            <img alt='Barcode Generator TEC-IT' src='https://barcode.tec-it.com/barcode.ashx?data=<?php echo $valor ?>%0A&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=0&hidehrt=False' />
       
        <form actin="" method="POST">
            <button value="https://barcode.tec-it.com/barcode.ashx?data=<?php echo $valor ?>%0A&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=0&hidehrt=False" name="btn_cadastro">Cadastrar </button>
        </form>
    <?php
    } else if (isset($_POST['btn_cadastro']) != null) {
        // link do Código de Barra
        echo $_POST['btn_cadastro'];
    } else {
    ?>
        <form action="" method="POST">
            <p>Gerar Código de Barra </p>
            <input type="text" name="codigo" placeholder="Adcione o valor para gerar código de barra" style="width:350px; height:50px">
            <button type="submit" style="width:200px; height:50px"> Gerar </button>
        </form>
    <?php
    }

    ?>

    <br />
    </div>
</body>

</html>