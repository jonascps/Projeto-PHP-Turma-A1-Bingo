$(function() {
    $("#n_codigo").keypress(function() {
        //Recuperar o valor do campo
        var n_codigo = $(this).val();
        var id_jogo = $('#id_jogo').val();

        //Verificar se há algo digitado
        if ((n_codigo != '') &&
            (id_jogo != '')) {
            var dados = {
                n_codigo: n_codigo,
                id_jogo: id_jogo
            }

            $.post('adicionar_cartela.php', dados, function(retorna) {
                //Mostra dentro da ul os resultado obtidos 
                $(".resultado").html(retorna);
            });
        }
    });
});