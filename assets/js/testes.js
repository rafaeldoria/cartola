$.getJSON("http://localhost:8090/cartola/Usuario/lista_dados", function (retorno) {
    var user = eval(retorno);
    for (var i = 0; i < user.length; i++) {

        $('#tabelaUsuario').append('<tr>' +
                '<td><h2>' + user[i].Nome + '</h2></td>' +
                '<td><h2>' + user[i].NomeTime + '</h2></td>' +
                '<td><h2>' + user[i].Saldo + '</h2></td>' +
                '<td><h3><button id="adicionarSaldo' + i + '" class="btn btn-warning btn-lg" value="">Adiocionar Saldo</button> ' +
                '<button id="participarRodada' + i + '" class="btn btn-warning btn-lg" value="">Participar de uma Rodada</button> </h3>' +
                '</tr>');
    }
});