<?php

    if(isset($_POST['btnEntrar'])){
        
        require_once($_SERVER['DOCUMENT_ROOT'].'/controller/controllerUsuario.php');
        
        $ctlUsuario = new controllerUsuario();
        $ctlUsuario->logar();
        
    }


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body id="login">
    <!--Inicio Container Login-->
    <div class="container_login">
        <!--Inicio Logo da empresa-->
        <img class="logo-login" src="img/logo/smart-games-logo.png" alt="Logo">
        <!--Inicio Formulario de login-->
        <form name="frmLogin" method="POST" action="login.php"> 
            <div class="row"> 
                <div class="col-100"> 
                    <input type="email" name="txtEmail" placeholder="Digite seu email...">
                </div> 
            </div>
            <div class="row"> 
                <div class="col-100"> 
                    <input type="password" name="txtSenha" placeholder="Digite sua senha..."> 
                </div> 
            </div>
            <div class="row">
                <div class="col-100">
                    <input type="submit" name="btnEntrar" value="Entrar">
                </div>
            </div>
        </form>
        <!--Fim Formulario de login-->
    </div>
    <!--Fim Container Login-->
</body>
</html>
