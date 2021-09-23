<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <title>Museu Virtual do Espaço</title>
    </head>
    <body id="bodyLogin">
        <div id="backgroundLogin">
            <div id="imgBg">
                <h1 class="title">Museu Virtual do<br>Espaço</h1>
                <p class="txt">Aqui, você poderá ter uma experiência única,
                 aproveitando para conhecer peças únicas que compõem a trajetória do homem pisando 
                 na lua pela primeira vez, além das outras fantásticas histórias das conquistas dos
                 seres humanos descobrindo os mistérios do espaço.
                </p>
                <button class="btn">Sobre o museu</button>
            </div>
            <div id="formBg">
                <div id="iconLogin">
                    <img  src="icons/icon3Color.png">
                </div>
                <h3 class="titleForm">Entre em sua conta</h3>
                <form action="loginVerify.php" method='POST'>
                    <input maxlength="30" class="inputs" id="email" type="text" placeholder="Email" autocomplete="off" name="txtUser" ><br>
                    <input class="inputs" id="pswd" type="password" placeholder="Senha" autocomplete="off" name="txtPassword"><br>
                    <input class="inputs botaozao" id="btnForm" type="submit" value="Acessar">
                </form>
                <h3 class="txtForm">Ou</h3>
                <h3 class="txtForm"><a href="register.php"><span>Registre-se</span></a> para conhecer este universo</h3>
            </div>
        </div>
    </body>
</html>