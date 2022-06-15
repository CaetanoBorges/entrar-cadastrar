function _(elemento) {
    return document.querySelector(elemento);
}

function _isset(value) {
    if (value.length > 0) {
        return true;
    }
    return false;
}

function ValidarEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputText.match(mailformat)) {
        return true;
    } else {
        return false;
    }
}

function _erroInput(el, sms = false, opt = false) {
    _(el + " .sms-erro").textContent = " ";
    _(el + " .sms-erro").textContent = sms;
    if (opt) {
        _(el + " .erro").style.display = "block";
    } else {
        _(el + " .erro").style.display = "none";
    }

}

function _corBorda(el, cor) {
    _(el).style.border = "1px inset " + cor;
}

function _loader(binario = false) {
    if (binario) {
        _(".load").style.display = "block";
    } else {
        _(".load").style.display = "none";
    }

}