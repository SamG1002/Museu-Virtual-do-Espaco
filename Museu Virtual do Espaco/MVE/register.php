<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <title>Registre-se | MVE</title>
    </head>
    <body id="bodyRegister">
        <div id="backgroundRegister">
            <div id="formReg">
                <div id="detail"></div>
                <div id="iconLogin">
                    <img  src="icons/icon3Color.png">
                </div>
                <h3 class="titleFormReg">Crie sua conta</h3>
                <form>
                    <input maxlength="30" class="inputs" id="nameRegister" type="text" placeholder="Nome" autocomplete="off" name="txtNameAc"><br>
                    <input maxlength="30" class="inputs" id="email" type="text" placeholder="Email" autocomplete="off" name="txtEmailAc"><br>
                    <input class="inputs" id="pswd" type="password" placeholder="Senha" autocomplete="off" name="txtPasswordAc"><br>
                    <input onclick="troll()" class="inputs botaozao" id="btnForm" type="submit" value="Criar">
                </form>
                <h3 class="txtForm"><a href="index.php">Voltar</a></h3>
            </div>
        </div>
        <script>
            function troll(){
                alert("Ainda não dá ;-;")
            }
        </script>
    </body>
</html>