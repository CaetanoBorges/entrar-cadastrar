function _iNomeJa() {
    var nome = _("#inome").value;
    var apelido = _("#iapelido").value;

    if (_isset(nome)) {
        _corBorda("#inome", "blue");
    } else {
        _erroInput("#cadastrar-nome", "O nome é necessário!", true);
        _corBorda("#inome", "red");
    }
    if (_isset(apelido)) {
        _corBorda("#iapelido", "blue");
    } else {
        _erroInput("#cadastrar-nome", "O apelido também é necessário!", true);
        _corBorda("#iapelido", "red");
    }


    if (!_isset(nome) && !_isset(apelido)) {
        _erroInput("#cadastrar-nome", "Nome e o apelido são necessários!", true);
        _corBorda("#iapelido", "red");
        _corBorda("#inome", "red");
    }
    if (_isset(nome) && _isset(apelido)) {
        cadastrar.nome = nome;
        cadastrar.apelido = apelido;
        _erroInput("#cadastrar-nome");
        _corBorda("#inome", "blue");
        _corBorda("#iapelido", "blue");
        _paraHash("#cadastrar-nascimento");
    }

}

function _iNascimentoJa() {
    var dia = _("#iDia").value;
    var mes = _("#iMes").value;
    var ano = _("#iAno").value;
    var genero = _("#iGenero").value;

    if (_isset(dia) && (dia != 0)) {
        _corBorda("#iDia", "blue");
    } else {
        _erroInput("#cadastrar-nascimento", "Adicione os dados corretamente.", true);
        _corBorda("#iDia", "red");
    }
    if (_isset(mes) && (mes != 0)) {
        _corBorda("#iMes", "blue");
    } else {
        _erroInput("#cadastrar-nascimento", "Adicione os dados corretamente.", true);
        _corBorda("#iMes", "red");
    }
    if (_isset(ano) && (ano != 0)) {
        _corBorda("#iAno", "blue");
    } else {
        _erroInput("#cadastrar-nascimento", "Adicione os dados corretamente.", true);
        _corBorda("#iAno", "red");
    }
    if (_isset(genero) && (genero != 0)) {
        _corBorda("#iGenero", "blue");
    } else {
        _erroInput("#cadastrar-nascimento", "Adicione os dados corretamente.", true);
        _corBorda("#iGenero", "red");
    }


    if (!_isset(dia) && (!_isset(mes)) && !_isset(ano) && !_isset(genero)) {
        _erroInput("#cadastrar-nascimento", "Adicione os dados corretamente.", true);
        _corBorda("#iDia", "red");
        _corBorda("#iAno", "red");
        _corBorda("#iMes", "red");
        _corBorda("#iGenero", "red");
    }
    if ((_isset(dia) && (dia != 0)) && (_isset(mes) && (mes != 0)) && (_isset(ano) && (ano != 0)) && (_isset(genero) && (genero != 0))) {
        cadastrar.dia = dia;
        cadastrar.mes = mes;
        cadastrar.ano = ano;
        cadastrar.genero = genero;
        _erroInput("#cadastrar-nascimento");
        _corBorda("#iDia", "blue");
        _corBorda("#iMes", "blue");
        _corBorda("#iAno", "blue");
        _corBorda("#iGenero", "blue");

        _paraHash("#cadastrar-email");
    }

}

function _iEmailJa() {
    var email = _("#iEmail").value;

    if (_isset(email)) {
        _corBorda("#iEmail", "blue");
        _erroInput("#cadastrar-email");
        _paraHash("#cadastrar-password");
        cadastrar.email = email;
    } else {
        _erroInput("#cadastrar-email", "O email é necessário! Insira corretamente", true);
        _corBorda("#iEmail", "red");
    }
}

function _iPassJa() {
    var pass = _("#iPass").value;

    if (_isset(pass) && (pass.length > 5)) {
        _corBorda("#iPass", "blue");
        _erroInput("#cadastrar-password");
        _paraHash("#cadastrar-telefone");
        cadastrar.palavra_passe = pass;
    } else {
        _erroInput("#cadastrar-password", "A palavra-passe é necessária e deve ter no mínimo 6 caractéres", true);
        _corBorda("#iPass", "red");
    }
}

function _iTelefoneJa() {
    var tel = _("#iTelefone").value;
    cadastrar.telefone = tel;
    _paraHash("#cadastrar-termos");
}


function _iTermosJa() {
    _loader(1);

    $.post(servidor + '/binga/conta-api/cadastrar.php', {
            json: JSON.stringify(cadastrar)
        })
        .done(function(response) {
            console.log(response)
            return;
            var obj = JSON.parse(response);
            if (obj.ok) {

            }
        })
        .always(function(error) {
            console.log(error);
            _loader();
        });
}


function _entra() {
    _loader(1);
    $.post(servidor + '/binga/conta-api/entrar.php', {
            json: JSON.stringify({ email: $("#email-entrar").val(), palavra_passe: $("#pass-entrar").val() })
        })
        .done(function(response) {
            var obj = JSON.parse(response);
            if (obj.ok) {
                console.log(obj.payload)
            } else {
                _corBorda(".erro", "red");
                _erroInput(".erro-entrar", obj.payload, 1);
                setInterval(() => {
                    _erroInput(".erro-entrar", obj.payload, 0);
                }, 5000);

            }
        })
        .always(function(error) {
            console.log(error);
            _loader();
        });
}