$.getJSON("http://localhost:8090/cartola/Usuario/lista_dados", function (retorno) {
    var user = eval(retorno);    
        $('#tabelaUsuario').append('<tr>' +
                '<td id="nomeUsuarioLogado"><h2>' + user[0].Nome + '</h2></td>' +
                '<td id=""><h2>' + user[0].NomeTime + '</h2></td>' +
                '<td><h2>' + user[0].Saldo + '</h2></td>' +
                '<td><h3><button id="adicionarSaldo" class="btn btn-warning btn-lg">Adiocionar Saldo</button> ' +
                '<button id="participarRodada" class="btn btn-warning btn-lg">Participar de uma Rodada</button> </h3>' +
                '</tr>');   
        
        //ação botão adicionar saldo
        $('#adicionarSaldo').click(function(){
            alert("CU");
        });
});

$('#teste').click(function () { 
    $.getJSON("http://localhost:8090/cartola/Usuario/lista_dados", function (retorno) {
        var resultado = eval(retorno);
        $("#modalLabelEditar").text("Editar dados "+ resultado[0].Nome);
        $("#nomeUsuario").val(resultado[0].Nome);
        $("#emailUsuario").val(resultado[0].Email);
        $("#celularUsuario").val(resultado[0].Celular);
        $('#modal_edita_cadastro').modal('show');
    });
});

