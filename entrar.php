<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cadastro</title>
    <link rel="stylesheet" href="entrar.css">
</head>
<style>

</style>
<body>
    <div class="corpo">
        <div class="navegacao">
            <ul>
                <li onclick='_paraHash("#entrar")'>ENTRAR</li>
                <li onclick='_paraHash("#inscrever")'>INSCREVER-SE</li>
            </ul>
        </div>
        <div style="width:70%;display:block;margin:10vh auto;height:50%;position:relative">
            <div class="duasDivs">
                <!-- -->
                <div id="inscrever">
                    <img src="voltar.png" class="voltar" onclick="history.back()">
                    <div id="cadastrar-nome">
                        <img src="logo.png">
                        <h2>Criar uma conta</h2>
                        <div class="div-centro">
                            <p>Introduza o seu nome</p>
                        </div>
                        <input type="text" placeholder="Nome próprio" class="input-entrar bckgrnd-input" id="inome">
                        <input type="text" placeholder="Apelido" class="input-entrar bckgrnd-input" id="iapelido">
                        <div class="div-centro">
                            <div class="erro">
                                <p class="sms-erro"></p><img src="erro.webp" class="icon-erro">
                            </div>
                        </div>
                        <button class="acao-cadastrar bckgrnd-button-c" onclick='_iNomeJa()'>Seguinte</button>
                    </div>
                    <div id="cadastrar-nascimento">
                        <img src="logo.png">
                        <h2>Informações básicas</h2>
                        <div class="div-centro">
                            <p>Introduzir a sua data<br>de nascimento e oseu género</p>
                            <input type="number" placeholder="Dia" class="dia-mes" id="iDia">
                            <select name="" class="mes outline-none" id="iMes">
                                <option value="0">Mês</option>
                                <option value="1">Janeiro</option>
                                <option value="2">Fevereiro</option>
                                <option value="3">Março</option>
                                <option value="4">Abril</option>
                                <option value="5">Maio</option>
                                <option value="6">Junho</option>
                                <option value="7">Julho</option>
                                <option value="8">Agosto</option>
                                <option value="9">Setembro</option>
                                <option value="10">Outubro</option>
                                <option value="11">Novembro</option>
                                <option value="12">Dezembro</option>
                            </select>
                            <input type="number" placeholder="Ano" class="dia-mes" id="iAno">
                            <br>
                            <select name="" class="genero outline-none" id="iGenero">
                                <option value="0">Género</option>
                                <option value="m">Masculino</option>
                                <option value="f">Feminino</option>
                            </select>
                        </div>
                        <div class="div-centro">
                            <div class="erro">
                                <p class="sms-erro"></p><img src="erro.webp" class="icon-erro">
                            </div>   
                        </div>
                        <button class="acao-cadastrar bckgrnd-button-c" onclick='_iNascimentoJa()'>Seguinte</button>
                    </div>
                    <div id="cadastrar-email">
                        <img src="logo.png">
                        <h2>Deve adicionar<br>o seu email à conta!</h2>
                        <input type="email" placeholder="Email" class="input-entrar bckgrnd-input">
                        <div class="div-centro">
                            <p>Essa ação não deixa o teu email público.<br>Servirá para fins de autenticação<br>e renovação da palavra-passe caso<br>se esqueça.
                            </p>
                        </div>
                        <button class="acao-cadastrar bckgrnd-button-c" onclick='_paraHash("#cadastrar-password")'>Seguinte</button>
                    </div>
                    <div id="cadastrar-password">
                        <img src="logo.png">
                        <h2>Criar uma<br>palavra-passe forte</h2>
                        <div class="div-centro">
                            <p>Crie uma plavra passe forte com uma mistura de letras, números e símbolos</p>
                        </div>
                        
                        <input type="text" placeholder="Palavra-passe" class="input-entrar bckgrnd-input">
                        <button class="acao-cadastrar bckgrnd-button-c" onclick='_paraHash("#cadastrar-telefone")'>Seguinte</button>
                    </div>
                    <div id="cadastrar-telefone">
                        <img src="logo.png">
                        <h2>Pretende adicionar<br>o número de telefone à conta?</h2>
                        <input type="text" placeholder="Número de telefone" class="input-entrar bckgrnd-input">
                        <div class="div-centro">
                            <p>Essa ação não torna o teu número público. E pode não adicionar.</p>
                        </div>
                        <button class="acao-cadastrar bckgrnd-button-c" onclick='_paraHash("#cadastrar-termos")'>Seguinte</button>
                    </div>
                    <div id="cadastrar-termos">
                        <img src="logo.png">
                        <h2>Leia atentamente</h2>
                        <p class="termo">1- Esta conta te dá acesso a todos serviços da nossa plataforma, sejam os de distribuição livre,
                        sejam os que precisa de um pacote de subscrição. Os serviços da plataforma são mobile, web, e desktop.</p>
                        <p class="termo">2- Presamos pela segurança e privacidade. Os teus dados são protegidos por lei, ética e moral, são apenas usados para 
                        o bom funcionamento da plataforma.</p>
                        <p class="termo">3- Poderá editar as informações de conta sempre que precisar.</p>
                        <p class="termo">4- Poderá encerrar a sua conta nas definições de conta se desejar.</p>
                        <button class="acao-cadastrar bckgrnd-button-c" onclick=''>Concluir</button>
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <div id="entrar">
                    <div id="entrar-principal">
                        <img src="logo.png" alt="">
                        <h2>Damos-lhe<br>as boas-vindas</h2>
                        <input type="email" class="input-entrar">
                        <input type="password" class="input-entrar">
                        <button class="input-entrar bckgrnd-button-e">Entrar</button>
                        <div class="div-centro">
                            <p class="esqueci-pass">Esqueci a palavra-passe!<br> <span onclick='_paraHash("#esqueci-pass")'>Renovar</span></p>
                        </div>
                    </div>
                    <div id="esqueci-pass">
                        <img src="voltar.png" class="voltar" onclick="history.back()">
                        <img src="logo.png" alt="">
                        <h2>Recuperação<br>de conta</h2>
                        <button class="renovar bckgrnd-button-c" onclick='_paraHash("#obter-codigo")'>Obter código para renovar a palavra-passe</button>
                        <button class="renovar bckgrnd-button-e" onclick='_paraHash("#tenho-codigo")'>Já tenho o código, quero renovar a palavra-passe</button>
                    </div>
                    <div id="obter-codigo">
                        <img src="voltar.png" class="voltar" onclick="history.back()">
                        <img src="logo.png" alt="">
                        <div class="div-centro">
                            <p class="esqueci-sms">Insira o seu e-mail e irá receber um código <br> que ajudará a renovar a palavra-passe.</p>
                        </div>
                        <input type="email" class="input-entrar bckgrnd-input" placeholder="Email">
                        <button class="input-entrar bckgrnd-button-c outline-none">Receber código</button>
                    </div>
                    <div id="tenho-codigo">
                        <img src="voltar.png" class="voltar" onclick="history.back()">
                        <img src="logo.png" alt="">
                        <div class="div-centro">
                            <p class="esqueci-sms">Insira o e-mail e código que recebeu no e-mail<br>Para renovar a palavra-passe.</p>
                        </div>
                        <input type="email" class="input-entrar bckgrnd-input" placeholder="Email">
                        <input type="text" class="input-entrar bckgrnd-input" placeholder="Código recebido">
                        <button class="input-entrar bckgrnd-button-e outline-none">Renovar Password</button>
                    </div>
                </div>
                <!-- -->
            </div>
        </div>  
    </div>
</body>
<script src="router.js"></script>
<script>
var cadastrar = {};
function _isset(value){
    if(value.length > 0){
        return true;
    }
    return false;
}

function _erroInput(el, sms = false, opt = false){
    _(el+" .sms-erro").textContent = " ";
    _(el+" .sms-erro").textContent = sms;
    if(opt){
        _(el+" .erro").style.display = "block";
    }else{
        _(el+" .erro").style.display = "none";
    }
    
}

function _corBorda(el, cor){
        _(el).style.border = "1px inset "+cor;
}

function _iNomeJa(){
    var nome = _("#inome").value;
    var apelido = _("#iapelido").value;

    if(_isset(nome)){
        _corBorda("#inome", "blue");
    }else{
        _erroInput("#cadastrar-nome", "O nome é necessário!", true);
        _corBorda("#inome", "red");
    }
    if(_isset(apelido)){
        _corBorda("#iapelido", "blue");
    }else{
        _erroInput("#cadastrar-nome", "O apelido também é necessário!", true);
        _corBorda("#iapelido", "red");
    }
    
    
    if(!_isset(nome) && !_isset(apelido)){
        _erroInput("#cadastrar-nome", "Nome e o apelido são necessários!", true);
        _corBorda("#iapelido", "red");
        _corBorda("#inome", "red");
    }
    if(_isset(nome) && _isset(apelido)){
        cadastrar.nome = nome;
        cadastrar.apelido = apelido;
        _erroInput("#cadastrar-nome");
        _corBorda("#inome", "blue");
        _corBorda("#iapelido", "blue");
        _paraHash("#cadastrar-nascimento");
    }
    
}

function _iNascimentoJa(){
    var dia = _("#iDia").value;
    var mes = _("#iMes").value;
    var ano = _("#iAno").value;
    var genero = _("#iGenero").value;

    if(_isset(dia) && (dia != 0)){
        _corBorda("#iDia", "blue");
    }else{
        _erroInput("#cadastrar-nascimento", "Adicione os dados corretamente.", true);
        _corBorda("#iDia", "red");
    }
    if(_isset(mes) && (mes != 0)){
        _corBorda("#iMes", "blue");
    }else{
        _erroInput("#cadastrar-nascimento", "Adicione os dados corretamente.", true);
        _corBorda("#iMes", "red");
    }
    if(_isset(ano) && (ano != 0)){
        _corBorda("#iAno", "blue");
    }else{
        _erroInput("#cadastrar-nascimento", "Adicione os dados corretamente.", true);
        _corBorda("#iAno", "red");
    }
    if(_isset(genero) && (genero != 0)){
        _corBorda("#iGenero", "blue");
    }else{
        _erroInput("#cadastrar-nascimento", "Adicione os dados corretamente.", true);
        _corBorda("#iGenero", "red");
    }
    
    
    if(!_isset(dia) && (!_isset(mes)) && !_isset(ano) && !_isset(genero)){
        _erroInput("#cadastrar-nascimento", "Adicione os dados corretamente.", true);
        _corBorda("#iDia", "red");
        _corBorda("#iAno", "red");
        _corBorda("#iMes", "red");
        _corBorda("#iGenero", "red");
    }
    if((_isset(dia) && (dia != 0)) && (_isset(mes) && (mes != 0)) && (_isset(ano) && (ano != 0)) && (_isset(genero) && (genero != 0))){
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
</script>
</html>