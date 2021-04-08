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
#inscrever{width:100%;height:100%;background:green;display:none;}

/* TELA ENTRAR */
.input-entrar{width:200px;height:30px;display:block;margin:2px auto;box-shadow: none;border: none;text-align: center;clear: both;}
.input-entrar:focus{border: none;border-radius: 0;outline: none;box-shadow:none;}

.esqueci-pass{margin-top: 5px;}
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
                <div id="inscrever">
                rbtyrty
                </div>
                <div id="entrar">
                    <div>
                        <input type="email" class="input-entrar">
                        <input type="password" class="input-entrar">
                        <button class="input-entrar">Entrar</button>
                        <p class="esqueci-pass">Esqueci a palavra passe!<br>Renovar</p>
                    </div>
                </div>
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
        console.log(1);
        routerPrincipal(["flex","none"])
    }else{
        console.log(2);
        routerPrincipal(["none","block"])
    }

})

_paraHash("#entrar");

// FUNCAO ROUTER
function routerPrincipal(a,b) {
   _("#entrar").style.display = a[0];
   _("#inscrever").style.display = a[1];
console.log(a);

}
</script>
</html>