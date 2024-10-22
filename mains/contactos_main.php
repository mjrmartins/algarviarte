<main class="container-fluid px-0 mx-0 bg-light row px-0 mx-0">
    <div class="col-8 px-0 mx-auto">
        <div class="row px-0 mx-0">
            <div class="col-10 mx-auto text-center t1 mt-5 pt-4 hometitle principal">
                Contactos
            </div>
        </div>
    </div>

    <!-- CONTACTOS -->
    <div class="row px-0 mx-0">
        <div class="col-10 px-0 mx-auto text-center t2 mt-5">
            contacta-nos através das nossas redes sociais
        </div>

        <!-- REDES SOCIAIS -->
        <div class="col-12 d-flex flex-wrap px-0 mx-0 mt-5">
            <div class="col-12 d-flex gap-4 justify-content-center align-items-start">
                <a href="<?= getInstagram(); ?>" target="_blank" class="redes2 insta icone"></a>
                <a href="<?= getFacebook(); ?>" target="_blank" class="redes2 face icone"></a>
            </div>
        </div>

        <div class="row px-0 mx-0 mt-5 mb-4">
            <div class="col-8 px-0 mx-auto text-justify mt-3 texto1">
                <?= getTextoContactos(); ?>
            </div>
        </div>
    </div>
</main>