 $(function () {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
         });
$('#form-login').submit(function(e) {
    e.preventDefault();
    const team = $('input[id="team"]').val();
    const anoLan = $('input[id="anoLan"]').val();
    const inputStar = $('input[id="inputStar"]').val();
    const inputGame = $('input[id="inputGame"]').val();
    const inputNumber = $('input[id="inputNumber"]').val();
    const inputPhoto = $('input[id="inputPhoto"]').val();
    $.ajax({
        url: 'catalogo.php', // caminho para o script que vai processar os dados
        type: 'GET',
        data: {team: team, anoLan: anoLan, inputStar: inputStar, inputGame: inputGame, inputNumber: inputNumber, inputPhoto: inputPhoto},
        success: function(response) {
            $('#resp').html(response);
        },
        error: function(xhr, status, error) {
            alert(xhr.responseText);
        }
    });
    return false;
    
});

function abrePopup() {
    $("#getCode").html(data);
    jQuery("#modal-mensagem").modal('show');

}
