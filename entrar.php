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
*{margin:0;padding:0;scroll-behavior:smooth}
.corpo{width:700px;height:100vh;display:block;margin:0 auto;position:relative;overflow:hidden;}

/* MENU */
.navegacao{position:absolute;top:0;left:0;padding:10px;border-bottom:1px solid #eaeaea;width:100%;}
.navegacao ul{list-style:none;}
.navegacao ul li{display:inline-block;padding:10px;cursor:pointer;}

/* TELAS DE LOGIN E CADASTRO */
.duasDivs{width:100%;height:100%;display:block;}
#entrar{width:100%;height:100%;background:red;align-items: center;display: flex;justify-content: center;}
#inscrever{width:100%;height:100%;align-items: center;justify-content: center;display:none;}

/* TELA ENTRAR */
.input-entrar{width:200px;height:30px;display:block;margin:2px auto;box-shadow: none;border: none;text-align: center;clear: both;}
.input-entrar:focus{border: none;border-radius: 0;outline: none;box-shadow:none;}

.esqueci-pass{margin-top: 5px;}

#esqueci-pass{display: none;}
#obter-codigo{display: none;}
#tenho-codigo{display: none;}

.renovar{padding:10px;display: block;width: 60%;margin: 10px auto;}

/*CADASTRAR `*/

#cadastrar-nascimento{display: none;}
#cadastrar-email{display: none;}
#cadastrar-password{display: none;}
#cadastrar-telefone{display: none;}
#cadastrar-termos{display: none;}


.acao-cadastrar{width:150px;height:30px;display:block;margin:2px auto;box-shadow: none;border: none;text-align: center;position: absolute;right:5px;bottom:5px;}
.acao-cadastrar:focus{border: none;border-radius: 0;outline: none;box-shadow:none;}

span{cursor: pointer;font-weight: bold;}
button{cursor: pointer;}

.dia-mes{width: 50px;height:30px;text-align:center;}
.dia-mes:focus{outline: none;}

.outline-none:focus{outline: none;}
.genero{width:216px;height: 34px;text-align:center;margin-top:5px;}
.mes{width:100px;height: 34px;text-align:center}

#inscrever img{width:20%;position:absolute;top:-14px; left:40%; margin: 10px auto;}
#inscrever h2{text-align: center;margin-bottom: 10px;}
#cadastrar-termos p{margin: 5px 20px;}
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
                    
                    <div id="cadastrar-nome">
                        <img src="logo.png">
                        <h2>Criar uma conta</h2>
                        <p>Introduza o seu nome</p>
                        <input type="text" placeholder="Nome próprio" class="input-entrar">
                        <input type="text" placeholder="Apelido" class="input-entrar">
                        <button class="acao-cadastrar" onclick='_paraHash("#cadastrar-nascimento")'>Seguinte</button>
                    </div>
                    <div id="cadastrar-nascimento">
                        <img src="logo.png">
                        <h2>Informações básicas</h2>
                        <p>Introduzir a sua data de nascimento e o<br>seu género</p>
                        <input type="number" placeholder="Dia" class="dia-mes">
                        <select name="" id="" class="mes outline-none">
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
                        <input type="number" placeholder="Ano" class="dia-mes">
                        <br>
                        <select name="" id="" class="genero outline-none">
                            <option value="g">Género</option>
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                        </select>
                        <button class="acao-cadastrar" onclick='_paraHash("#cadastrar-email")'>Seguinte</button>
                    </div>
                    <div id="cadastrar-email">
                        <img src="logo.png">
                        <h2>Deve adicionar<br>o seu email à conta!</h2>
                        <input type="email" placeholder="Email" class="input-entrar">
                        <p>Essa ação não deixa o teu email público.<br>Servirá para fins de autenticação<br>e renovação da palavra-passe caso<br>se esqueça.
                        </p>
                        <button class="acao-cadastrar" onclick='_paraHash("#cadastrar-password")'>Seguinte</button>
                    </div>
                    <div id="cadastrar-password">
                        <img src="logo.png">
                        <h2>Criar uma palavra-passe<br>forte</h2>
                        <p>Crie uma plavra passe forte com uma mistura de letras, números e símbolos</p>
                        <input type="text" placeholder="Palavra-passe" class="input-entrar">
                        <button class="acao-cadastrar" onclick='_paraHash("#cadastrar-telefone")'>Seguinte</button>
                    </div>
                    <div id="cadastrar-telefone">
                        <img src="logo.png">
                        <h2>Pretende adicionar<br>o número de telefone à conta?</h2>
                        <input type="text" placeholder="Número de telefone" class="input-entrar">
                        <p>Essa ação não torna o teu número público.</p>
                        <button class="acao-cadastrar" onclick='_paraHash("#cadastrar-termos")'>Seguinte</button>
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
                        <button class="acao-cadastrar" onclick=''>Concluir</button>
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <div id="entrar">
                    <div id="entrar-principal">
                        <input type="email" class="input-entrar">
                        <input type="password" class="input-entrar">
                        <button class="input-entrar">Entrar</button>
                        <p class="esqueci-pass">Esqueci a palavra-passe!<br> <span onclick='_paraHash("#esqueci-pass")'>Renovar</span></p>
                    </div>
                    <div id="esqueci-pass">
                        <button class="renovar" onclick='_paraHash("#obter-codigo")'>Obter código para renovar a palavra-passe</button>
                        <button class="renovar" onclick='_paraHash("#tenho-codigo")'>Já tenho o código, quero renovar a palavra-passe</button>
                    </div>
                    <div id="obter-codigo">
                        <p class="esqueci-sms">Insira o seu e-mail e irá receber um código <br> que ajudará a renovar a palavra-passe.</p>
                        <input type="email" class="input-entrar" placeholder="Email">
                        <button class="input-entrar">Receber código</button>
                    </div>
                    <div id="tenho-codigo">
                        <p class="esqueci-sms">Insira o e-mail e código que recebeu no e-mail<br>Para renovar a palavra-passe.</p>
                        <input type="email" class="input-entrar" placeholder="Email">
                        <input type="text" class="input-entrar" placeholder="Código recebido">
                        <button class="input-entrar">Renovar Password</button>
                    </div>
                </div>
                <!-- -->
            </div>
        </div>  
    </div>
</body>
<script>

function _(elemento){
    return document.querySelector(elemento);
}

function _paraHash(hash){
    location.hash = hash;
}

window.addEventListener("hashchange", function(e){
    
    if(location.hash == "#entrar"){
        routerPrincipal(["flex","none"])
    }else if(location.hash == "#inscrever"){
        routerPrincipal(["none","flex"])
    }
    
    else if(location.hash == "#esqueci-pass"){
        routerEntrar(["none","block","none","none"])
    }else if(location.hash == "#obter-codigo"){
        routerEntrar(["none","none","block","none"])
    }else if(location.hash == "#tenho-codigo"){
        routerEntrar(["none","none","none","block"])
    }

    else if(location.hash == "#cadastrar-nascimento"){
        routerCadastrar(["none","block","none","none","none","none"])
    }else if(location.hash == "#cadastrar-email"){
        routerCadastrar(["none","none","block","none","none","none"])
    }else if(location.hash == "#cadastrar-password"){
        routerCadastrar(["none","none","none","block","none","none"])
    }else if(location.hash == "#cadastrar-telefone"){
        routerCadastrar(["none","none","none","none","block","none"])
    }else if(location.hash == "#cadastrar-termos"){
        routerCadastrar(["none","none","none","none","none","block"])
    }

})

_paraHash("#entrar");

// FUNCAO ROUTER PRINCIPAL
function routerPrincipal(a) {
    if(a[0] == "flex"){
        _("#entrar").style.display = a[0];
        _("#entrar-principal").style.display = "block";

        
        _("#inscrever").style.display = a[1];
        _("#esqueci-pass").style.display = a[1];
        _("#obter-codigo").style.display = a[1];
        _("#tenho-codigo").style.display = a[1];
        return
    }
    
    if(a[1] == "flex"){
        _("#inscrever").style.display = a[1];
        _("#cadastrar-nome").style.display = "block";

        
        _("#entrar").style.display = a[0];
        
        _("#cadastrar-nascimento").style.display = a[0];
        _("#cadastrar-email").style.display = a[0];
        _("#cadastrar-password").style.display = a[0];
        _("#cadastrar-telefone").style.display = a[0];
        _("#cadastrar-termos").style.display = a[0];
        return
    }
    
}
// FUNCAO ROUTER ENTRAR
function routerEntrar(a) {
   _("#entrar-principal").style.display = a[0];
   _("#esqueci-pass").style.display = a[1];
   _("#obter-codigo").style.display = a[2];
   _("#tenho-codigo").style.display = a[3];
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
</script>
</html>