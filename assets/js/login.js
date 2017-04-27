//função para confirmar senhas iguais
function verificarSenha() {
    var campo1 = document.getElementById("senhaUsuario").value;
    var campo2 = document.getElementById("senhaUsuario2").value;
    if (campo1 == campo2) {
        document.getElementById("resultado").innerHTML = "&raquo; OK!";
        document.getElementById("resultado").style.color = "#008B45";
    } else {
        document.getElementById("resultado").innerHTML = "As senhas não correspondem!";
        document.getElementById("resultado").style.color = "#FF6347";
    }
}

$.getJSON("http://localhost:8090/cartola/TimesDoBrasileiro/lista_times", function (retorno) {
    var times = eval(retorno);
    for (var i = 0; i < times.length; i++) {
        $('#timeUsuario').append(                                
                '<option>' + times[i].nomeTime + '</option>' +
                '</select>');
    }
}); 