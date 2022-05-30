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
            <style>
                .load{position: absolute; top: 1px; left:1px; width:100%; height: 100%;background: #fff;display: none;}
                .load img {width: 30%; position: absolute; top: 40%; left:35%;}
            </style>
            <div class="load">
                <img src="logo.gif" alt="">
            </div>
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
                        <input type="email" placeholder="Email" class="input-entrar bckgrnd-input" id="iEmail">
                        <div class="div-centro">
                            <p>Essa ação não deixa o teu email público. Servirá para fins de autenticação e renovação da palavra-passe caso se esqueça.
                            </p>
                        </div>
                        <div class="div-centro">
                            <div class="erro">
                                <p class="sms-erro"></p><img src="erro.webp" class="icon-erro">
                            </div>   
                        </div>
                        <button class="acao-cadastrar bckgrnd-button-c" onclick='_iEmailJa()'>Seguinte</button>
                    </div>
                    <div id="cadastrar-password">
                        <img src="logo.png">
                        <h2>Criar uma<br>palavra-passe forte</h2>
                        <div class="div-centro">
                            <p>Crie uma plavra passe forte com uma mistura de letras, números e símbolos</p>
                        </div>
                        
                        <input type="password" placeholder="Palavra-passe" class="input-entrar bckgrnd-input" id="iPass">
                        <div class="div-centro">
                            <div class="erro">
                                <p class="sms-erro"></p><img src="erro.webp" class="icon-erro">
                            </div>   
                        </div>
                        <button class="acao-cadastrar bckgrnd-button-c" onclick='_iPassJa()'>Seguinte</button>
                    </div>
                    <div id="cadastrar-telefone">
                        <img src="logo.png">
                        <h2>Pretende adicionar<br>o número de telefone à conta?</h2>
                        <input type="number" placeholder="Número de telefone" class="input-entrar bckgrnd-input" id="iTelefone">
                        <div class="div-centro">
                            <p>Essa ação não torna o teu número público. E não é obrigatória.</p>
                        </div>
                        <button class="acao-cadastrar bckgrnd-button-c" onclick='_iTelefoneJa()'>Seguinte</button>
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
                        <button class="acao-cadastrar bckgrnd-button-c" onclick='_iTermosJa()'>Concluir</button>
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <div id="entrar">
                    <div id="entrar-principal">
                        <img src="logo.png" alt="">
                        <h2>Damos-lhe<br>as boas-vindas</h2>
                        <input type="email" class="input-entrar" id="email-entrar">
                        <input type="password" class="input-entrar"  id="pass-entrar">
                        <button class="input-entrar bckgrnd-button-e" onclick="_entra()">Entrar</button>
                        <div class="erro-entrar">
                            <div class="erro">
                                <div class="sms-erro"></div>
                            </div>
                        </div>
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
<script src="funcoesGenericas.js"></script>
<script src="router.js"></script>
<script src="jquery.js" ></script>
<?php
$servidor = "http://127.0.0.1";
$urlDaRequisicao = $_SERVER['REQUEST_URI'];
$protocoloHttp = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://";
//echo $urlDaRequisicao;


?>
<script>
var cadastrar = {};
const servidor = "<?php echo $servidor; ?>";
const variavel = "<?php echo hash("sha512","codigo") ?>"

</script>
<script src="preenchimentoFormInscrever.js"></script>

</html>