<main class="container-fluid px-0 mx-0 bg-light row px-0 mx-0">
    <div class="col-8 px-0 mx-auto">
        <div class="row px-0 mx-0">
            <div class="col-10 mx-auto text-center t1 mt-5 pt-4 hometitle principal">
                informação
            </div>
        </div>

        <div class="row px-0 mx-0 mt-4 mb-4">
            <div class="texto1 px-0 mx-auto text-justify">
                <?= getTexto1Info(); ?>
            </div>
        </div>
    </div>

    <!-- INFORMAÇÃO -->
    <!-- ENCOMENDAR -->
    <div class="row px-0 mx-0">
        <div class="col-10 px-0 mx-auto text-center t2 mt-5">
            <?= getEncomendar(); ?>
        </div>
        <div class="col-8 px-0 mx-auto text-justify mt-3 texto1">
            <ul>
                <?= getTextoEncomendar(); ?>
            </ul>
        </div>
    </div>

    <!-- PAGAMENTO -->
    <div class="row px-0 mx-0">
        <div class="col-10 px-0 mx-auto text-center t2 mt-5">
            <?= getPagamento(); ?>
        </div>
        <div class="col-8 px-0 mx-auto text-justify mt-3 texto1">
            <ul>
                <?= getTextoPagamento(); ?>
            </ul>
        </div>
    </div>

    <!-- ENVIO -->
    <div class="row px-0 mx-0">
        <div class="col-10 px-0 mx-auto text-center t2 mt-5">
            <?= getEnvio(); ?>
        </div>
        <div class="col-8 px-0 mx-auto text-justify mt-3 texto1">
            <ul>
                <?= getTextoEnvio(); ?>
            </ul>
        </div>
    </div>

    <!-- DEVOLUÇÃO -->
    <div class="row px-0 mx-0">
        <div class="col-10 px-0 mx-auto text-center t2 mt-5">
            <?= getDevolver(); ?>
        </div>
        <div class="col-8 px-0 mx-auto text-justify mt-3 texto1">
            <ul>
                <?= getTextoDevolver() ?>
            </ul>
        </div>
    </div>
</main>