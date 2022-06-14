function _paraHash(hash) {
    location.hash = hash;
}

function estilizaBotaoEntrar(como = false) {
    if (como) {
        $(".menu-class-entrar").css({ fontWeight: "bold" });
        return;
    }
    $(".menu-class-entrar").css({ fontWeight: "normal" });

}

function estilizaBotaoInscreverse(como = false) {
    if (como) {
        $(".menu-class-cadastrar").css({ fontWeight: "bold" });
        return;
    }
    $(".menu-class-cadastrar").css({ fontWeight: "normal" });

}


window.addEventListener("hashchange", function(e) {

    if (location.hash == "#entrar") {
        estilizaBotaoEntrar(true);
        estilizaBotaoInscreverse();
        routerPrincipal(["flex", "none"])
    } else if (location.hash == "#inscrever") {
        estilizaBotaoInscreverse(true);
        estilizaBotaoEntrar();
        routerPrincipal(["none", "flex"])
    } else if (location.hash == "#esqueci-pass") {
        estilizaBotaoInscreverse();
        estilizaBotaoEntrar();
        routerEntrar(["none", "block", "none", "none", "none"])
    } else if (location.hash == "#obter-codigo") {
        routerEntrar(["none", "none", "block", "none", "none"])
    } else if (location.hash == "#tenho-codigo") {
        routerEntrar(["none", "none", "none", "block", "none"])
    } else if (location.hash == "#nova-palavra-passe") {
        routerEntrar(["none", "none", "none", "none", "block"])
    } else if (location.hash == "#cadastrar-nascimento") {
        routerCadastrar(["none", "block", "none", "none", "none", "none"])
    } else if (location.hash == "#cadastrar-email") {
        routerCadastrar(["none", "none", "block", "none", "none", "none"])
    } else if (location.hash == "#cadastrar-password") {
        routerCadastrar(["none", "none", "none", "block", "none", "none"])
    } else if (location.hash == "#cadastrar-telefone") {
        routerCadastrar(["none", "none", "none", "none", "block", "none"])
    } else if (location.hash == "#cadastrar-termos") {
        routerCadastrar(["none", "none", "none", "none", "none", "block"])
    }

})

_paraHash("#entrar");
estilizaBotaoEntrar(true);
// FUNCAO ROUTER PRINCIPAL
function routerPrincipal(a) {
    if (a[0] == "flex") {
        _("#entrar").style.display = a[0];
        _("#entrar-principal").style.display = "block";


        _("#inscrever").style.display = a[1];
        _("#esqueci-pass").style.display = a[1];
        _("#obter-codigo").style.display = a[1];
        _("#tenho-codigo").style.display = a[1];
        _("#nova-palavra-passe").style.display = a[1];
        return
    }

    if (a[1] == "flex") {
        _("#inscrever").style.display = a[1];
        _("#cadastrar-nome").style.display = "block";


        _("#entrar").style.display = a[0];

        _("#cadastrar-nascimento").style.display = a[0];
        _("#cadastrar-email").style.display = a[0];
        _("#cadastrar-password").style.display = a[0];
        _("#cadastrar-telefone").style.display = a[0];
        _("#cadastrar-termos").style.display = a[0];
        _("#nova-palavra-passe").style.display = a[0];
        return
    }

}
// FUNCAO ROUTER ENTRAR
function routerEntrar(a) {
    _("#entrar-principal").style.display = a[0];
    _("#esqueci-pass").style.display = a[1];
    _("#obter-codigo").style.display = a[2];
    _("#tenho-codigo").style.display = a[3];
    _("#nova-palavra-passe").style.display = a[4];
}
// FUNCAO ROUTER CADASTRAR
function routerCadastrar(a) {
    _("#cadastrar-nome").style.display = a[0];
    _("#cadastrar-nascimento").style.display = a[1];
    _("#cadastrar-email").style.display = a[2];
    _("#cadastrar-password").style.display = a[3];
    _("#cadastrar-telefone").style.display = a[4];
    _("#cadastrar-termos").style.display = a[5];
}