
<!--Modal de dethalhes dos Produtos-->
<?php

    //Inport de Classe
    require_once($_SERVER['DOCUMENT_ROOT'].'/controller/controllerProduto.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/controller/controllerLoja.php');

    $id;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $controllerProduto = new controllerProduto();
    $listProduto = $controllerProduto->buscarProduto($id);

?>

<div class="botao_fechar" onclick="closeModal();">&times;</div>

<section class="col-40">
    <article class="bloco">
        <article class="produto col-100">
            <img class="img animated" src="<?= $listProduto->getFoto1(); ?>" alt="Loja">
            <h5 class="subTitulo"><?= $listProduto->getNome(); ?></h5>
            <p class="txt"><?= $listProduto->getDescri(); ?></p>
            <h4 class="subTitulo"><?= "R$ ". str_replace(".",",",$listProduto->getValor()) ?></h4>
        </article>
    </article>
</section>
<section class="col-60">
    <article class="bloco col-50" style="width: 45%; margin-right: 6%; padding: 0px;">
        <img class="foto-jogo" src="<?= $listProduto->getFoto2(); ?>" alt="Loja">
    </article>
    <article class="bloco col-50" style="width: 45%; padding: 0px;">
        <img class="foto-jogo" src="<?= $listProduto->getFoto3(); ?>" alt="Loja">
    </article>
    <article class="bloco col-100">
        <p class="txt" style="margin-top: 5px;">Lojas</p>
        
        <?php
        
            $listLoja = new controllerLoja();
                
            $rsLoja = $listLoja->listarLoja($id);

            $cont = 0;

            while($cont < count($rsLoja)){
        ?>
        
        <img class="loja animated" src="<?= $rsLoja[$cont]->getFoto() ?>" alt="Loja" onclick="openModal('view/descricao-loja.php?id=<?= $rsLoja[$cont]->getIdLoja(); ?>', '70%', '600');">
        
        <?php
                $cont++;
            
            }
        
        ?>
    </article>
</section>
    
