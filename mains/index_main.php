<?php

$brincos = getTodosBrincos();
$imagensAI = getImagensBrincosAI();
$imagensCurtos = getImagensBrincosCurtos();
$imagensPendentes = getImagensBrincosPendentes();

?>

<main class="container-fluid px-0 mx-0 bg-light row px-0 mx-0">

    <!-- COOKIES -->
    <div class="col-12 mx-0 px-0" id="modalCookies">
        <div class="col-8 mx-auto px-0 pt-4">
            <h1 class="tcookies">cookies</h1>
            <p class="texto1">Esta página utiliza apenas cookies essenciais</p>
            <button class="mt-2 mb-5 close" onclick="fecharCookies()">concordar e fechar</button>
        </div>
    </div>

    <div class="col-8 mx-auto">
        <div class="row px-0 mx-0">
            <div class="col-10 mx-auto text-center t1 mt-5 pt-4 hometitle">
                <?= getTituloHome(); ?>
            </div>
        </div>

        <div class="row px-0 mx-0 mt-4 mb-4">
            <div class="texto1">
                <?= getTextHome(); ?>
            </div>
        </div>
    </div>

    <!-- CARDS -->
    <div class="row mx-0 px-0 mt-3 mb-3">
        <div class="col-10 d-flex justify-content-center gap-4 flex-wrap px-0 mx-auto">
            <!-- AÇO -->
            <div class="card" style="width: 18rem">
                <img src="<?= $imagensAI[0]["imagem"]; ?>" class="card-img-top" alt="brinco1" />
                <div class="card-body d-flex flex-wrap">
                    <h5 class="card-title"><?=getTituloBrincos("3"); ?></h5>
                    <p class="card-text">
                        <?= getTextoAbreviadoBrincos("3"); ?>
                    </p>
                    <a href="brincos_aco_inoxidavel.php" class="mx-auto">
                        <button class="btn">ver mais</button>
                    </a>
                </div>
            </div>

            <!-- CURTOS -->
            <div class="card" style="width: 18rem">
                <img src="<?= $imagensCurtos[0]["imagem"]; ?>" class="card-img-top" alt="brinco1" />
                <div class="card-body d-flex flex-wrap">
                    <h5 class="card-title"><?=getTituloBrincos("2"); ?></h5>
                    <p class="card-text">
                        <?= getTextoAbreviadoBrincos("2"); ?>
                    </p>
                    <a href="brincos_curtos.php" class="mx-auto">
                        <button class="btn">ver mais</button>
                    </a>
                </div>
            </div>

            <!-- PENDENTES -->
            <div class="card" style="width: 18rem">
                <img src="<?= $imagensPendentes[0]["imagem"]; ?>" class="card-img-top" alt="brinco1" />
                <div class="card-body d-flex flex-wrap">
                    <h5 class="card-title"><?=getTituloBrincos("1"); ?></h5>
                    <p class="card-text">
                        <?= getTextoAbreviadoBrincos("1"); ?>
                    </p>
                    <a href="brincos_pendentes.php" class="mx-auto">
                        <button class="btn">ver mais</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>