$("#senhaUsuario2").keyup(function(){
    var campo1 = $("#senhaUsuario").val();
    var campo2 = $("#senhaUsuario2").val();
    if (campo1 == campo2) {
        $("#resultado").html("&raquo; OK!").css("color", "#008B45");
    } else {
        $("#resultado").html("As senhas não correspondem!").css("color", "red");
    }
});

$("#timeUsuario").change(function(){
    
    var dig = $("#timeUsuario").val();
    var url = 'https://api.cartolafc.globo.com/times?q=' + dig;

    $.getJSON(url, function (retorno) {
        var resultado = eval(retorno);
        $('#timesBuscados').html('');        
        for (var i = 0; i < resultado.length; i++) {
            //nome é o nome do time que o cara montou no CartolaFC
            $('#timesBuscados').append('<option>' + resultado[i].nome + '</option>');
            //console.log(resultado[i].nome);
        }
    });
});

$("#timesBuscados").change(function(){
    
    var digtec = $("#timesBuscados").val();    
    var urlTec = 'https://api.cartolafc.globo.com/times?q=' + digtec;
    $.getJSON(urlTec, function (retorno) {
        var resultado = eval(retorno);
        for (var i = 0; i < resultado.length; i++) {
            $("#tecnico").val(resultado[i].nome_cartola);
        }
    });
});

$("#busqueTime").click(function(){    
    var digtec = $("#timesBuscados").val();    
    var urlTec = 'https://api.cartolafc.globo.com/times?q=' + digtec;
    $.getJSON(urlTec, function (retorno) {
        var resultado = eval(retorno);
        for (var i = 0; i < resultado.length; i++) {
            $("#tecnico").val(resultado[i].nome_cartola);
        }
    });
});