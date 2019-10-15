<?php

    // Includes
    require_once($_SERVER['DOCUMENT_ROOT'].'/controller/controllerCategoria.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/controller/controllerProduto.php');

    require_once($_SERVER['DOCUMENT_ROOT'].'/model/categoriaClass.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/model/produtoClass.php');
    

    $arrayUsuario = $_SESSION['user'];


    if($_SESSION['user'] == null){
        header('location:view/login.php');    
    }

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
<link href="view/css/style.css" rel="stylesheet" type="text/css">
<link href="view/css/animations.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/animations.css" rel="stylesheet" type="text/css">
<script src="view/js/jquery.js" type="text/javascript"></script>
<script src="view/js/functions.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
</head>
    
<body>
    <!--Modal-->
    <div class="container_modal">
       <div class="modal"></div>
   </div>
    
    <section id="main">
        <div class="col-20 animated fadeInLeft" id="menu">
            <div>
                <img src="view/img/logo/smart-games-logo.png" id="logo-home" alt="Logo">
            </div>
            <ul>
            <?php
                
                $listCategoria = new controllerCategoria();
                
                $rsCategoria = $listCategoria->listarCategoria();
                
                $cont = 0;
                
                while($cont < count($rsCategoria)){
                    
                
            ?>
                
                <li><a href=""><?=$rsCategoria[$cont]->getNome();?></a><div class="line"></div></li>
                
            <?php
                    
                    $cont++;
                }
                
            ?>
            </ul>
        </div>
        <div class="col-80" id="conteudo">
            <nav class="animated fadeInDown">
                <div class="row">
                    <div class="col-80 col-80-pesquisa">
                        <input type="text" name="txtPesquisa" placeholder="Pesquisar">
                    </div>
                    <div class="col-20 col-nUser"><?= $arrayUsuario['nome'] ?></div>
                </div>
            </nav>
            <div class="bloco animated fadeIn" style="margin-top: 100px;">
                <h3 class="titulo">Destaques</h3>
                
                <?php
                
                    $listProduto = new controllerProduto();
                
                    $rsProduto = $listProduto->listarProdutoLmt(4);

                    $cont = 0;
                    
                    shuffle($rsProduto);

                    while($cont < count($rsProduto)){    
    
                ?>
                
                <article class="produto col-25" onclick="openModal('view/descricao-produto.php?id=<?= $rsProduto[$cont]->getIdProduto() ?>', '70%', '600');">
                    <img class="img animated" src="<?= $rsProduto[$cont]->getFoto1(); ?>" alt="Loja">
                    <p class="txt"><?= $rsProduto[$cont]->getNome(); ?></p>
                    <h4 class="subTitulo"><?= 'R$ '. str_replace(".",",",$rsProduto[$cont]->getValor()); ?></h4>
                </article>
                
                <?php
                        $cont++;
                    }
                
                ?>
            </div>
            
            <div class="bloco animated fadeIn">
                <h3 class="titulo">Todos os Jogos</h3>
                
                <?php
                
                    $listProduto = new controllerProduto();
                
                    $rsProduto = $listProduto->listarProduto();

                    $cont = 0;

                    while($cont < count($rsProduto)){    
    
                ?>
                
                <article class="produto col-25" onclick="openModal('view/descricao-produto.php?id=<?= $rsProduto[$cont]->getIdProduto() ?>', '70%', '600');">
                    <img class="img animated" src="<?= $rsProduto[$cont]->getFoto1(); ?>" alt="Loja">
                    <p class="txt"><?= $rsProduto[$cont]->getNome(); ?></p>
                    <h4 class="subTitulo"><?= 'R$ '.str_replace(".",",",$rsProduto[$cont]->getValor()); ?></h4>
                </article>
                
                <?php
                        $cont++;
                    }
                
                ?>
                
            </div>
            <footer>
                <h4 class="subTitulo" style="color: white; margin: 0px;"> Smart Games Ltd. </h4>
            </footer>
        </div>
    </section>
</body>
</html>
