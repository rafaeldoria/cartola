

function buscarTimes(timeDigitado) {
    //console.log("teste");
    var url = 'https://api.cartolafc.globo.com/times?q=' + timeDigitado;

    $.getJSON(url, function (retorno) {
        var resultado = eval(retorno);
        for (var i = 0; i < /*resultado.length*/ 5; i++) {
            alert(resultado[i].nome);
        }
    });

    /* $.ajax({
     method: 'GET',
     url: url,
     headers: {
     'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
     }
     }).then(function successCallback(response) {
     alert('BUG');
     console.log(response.data);
     });*/
}


$('#dadosUsuario').append('<li><span class="hidden-tablet">Dicas</span></li>');