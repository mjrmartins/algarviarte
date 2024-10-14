<?php

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-12 t2 mx-auto text-center mt-3">
            Bem-vindo(a) - <?= $_SESSION["usuario"]["nome"]; ?>
        </div>
        <div class="col-12 t2 mx-auto text-center mt-3 mb-3">
            Data do último acesso: <?= $_SESSION["usuario"]["ultimo_acesso"]; ?>
        </div>
    </div>
</main>