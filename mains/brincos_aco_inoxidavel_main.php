<?php

$imagensAI = getImagensBrincosAI();

$ref = getRefsBrincosAI();

$tamanho = count($imagensAI);

?>

<main class="container-fluid px-0 mx-0 bg-light row px-0 mx-0">
    <div class="col-8 mx-auto">
        <div class="row px-0 mx-0">
            <div class="col-10 mx-auto text-center t1 mt-5 pt-4 hometitle principal">
                brincos <?= getTituloBrincos("3"); ?>
            </div>
        </div>

        <div class="row px-0 mx-0 mt-4 mb-4">
            <div class="texto1">
                <?= getTextoBrincos("3"); ?>
            </div>
        </div>
    </div>

    <!-- CARDS -->
    <div class="row mx-0 px-0 mt-3 mb-3">
        <div class="col-10 d-flex justify-content-center gap-4 flex-wrap px-0 mx-auto">

            <?php for($i = 0; $i<$tamanho; $i++): $imagem = $imagensAI[$i]["imagem"]; $referencia = $ref[$i]["referencia"]?>
            <div class="card" style="width: 14rem">
                <img src="<?= $imagem; ?>" class="card-img-top img-card" id="imagemAI" alt="imagem_brinco"
                    data-index="<?= $imagem; ?>" onclick="abrirModal()" />
                <div class="card-body d-flex flex-wrap">
                    <h5 class="card-title">ref: <?= $referencia; ?></h5>
                    <a href="https://algarviarte.great-site.net/informacao.php" class="btn mt-3 mx-auto">como encomendar</a>
                </div>
            </div>
            <?php endfor; ?>

            <!-- MODAL -->
            <div class="col-12 mx-0 px-0 d-flex justify-content-center align-items-center">
                <div class="janela-modal col-12 mx-0 px-0" id="janela-modal">
                    <img src="" alt="imagem modal" class="mt-3 img-modal" id="imagem-modal">
                    <button class="mt-3 mb-2 close-modal" onclick="closeButton()">CLOSE</button>
                </div>
            </div>
        </div>
</main>