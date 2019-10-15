<?php
    
    //Import de Classe
    require_once($_SERVER['DOCUMENT_ROOT'].'/controller/controllerLoja.php');

    $id;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $controllerLoja = new controllerLoja();
    $listLoja = $controllerLoja->buscarLoja($id);

?>
<link href="css/style.css" rel="stylesheet" type="text/css">

<div class="botao_fechar" onclick="closeModal();">&times;</div>

<section class="col-40">
    <article class="bloco">
        <article class="produto col-100">
            <img class="img animated" src="<?= $listLoja->getFoto(); ?>" alt="Loja">
            <h5 class="subTitulo"><?= $listLoja->getNome(); ?></h5>
            <p class="txt"><?= $listLoja->getDescri(); ?></p>
            <h4 class="subTitulo">Funcionamento: <?= substr($listLoja->getAbertura(),0,-3)."h as ".substr($listLoja->getFechamento(),0,-3)."h" ?></h4>
        </article>
    </article>
</section>
<section class="col-60">
    <article class="bloco col-100" id="mapa" style="padding: 0px; height: 450px;">
        <!-- Carregar arquivo dentra da div -->
        <script>syncTela("view/telas/mapsAPI.php?id=<?= $listLoja->getIdLoja(); ?>","#mapa");</script>
    </article>
</section>
    
