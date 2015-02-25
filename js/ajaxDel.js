//usar a magia do jquery
$(document).ready(function() {
    $('button[name=removerregistro]').click(function() {
        var valor = $(this).parent().parent().children()[0].innerHTML;
        var id = $('input[name=idregistro]')[0];
        id.value = valor;
    });
//    adicionar a ação de click para o botao com o id remove
    $('#remove').click(function() {
//        recuperar o valor do input que contem o name=id
        var id = $('input[name=idregistro]')[0].value;
        var control = $('#remove')[0].name;
//        faz uma requisição ao servidor
        $.ajax({
//            utiliza o method post
            method: 'POST',
//            caminho do arquivo a ser acessado no servido
            url: '../../control/common/removeAction.php',
//            dados enviado pro servido
            data: 'id=' + id + '&controler=' + control
        }).done(function() {
            alert('registro excluido com sucesso');
            location.href = '';
        });

    });

});