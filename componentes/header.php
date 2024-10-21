<?php

$brincos = getDropBrincos();

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Algarviarte</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.jpg" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- JAVASCRIPT -->
    <script src="https://algarviarte.great-site.net/javascript/function.js"></script>
</head>

<body class="w-100 mx-auto" onload="cookies(), scroll()">
    <header class="container-fluid w-100 px-0 mx-0">
        <div>
            <div class="title1 fundo"></div>

            <div class="d-flex justify-content-center">
                <img src="img/logo_sem_fundo.png" alt="logo" class="logo" />
            </div>
        </div>

        <!-- NAVBAR -->
        <div class="row px-0 mx-0 navbg">
            <div class="col-11 col-md-8 offset-1 offset-md-2 px-0">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-md-flex justify-content-center" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "index" ? "active" : ""); ?>"
                                    href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?= ($pagina_atual == "brincos" ? "active" : ""); ?>"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Brincos
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach($brincos as $b): ?>
                                    <li><a class="dropdown-item"
                                            href="<?= $b["pagina"]; ?>.php"><?= $b["titulo"]; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "informacao" ? "active" : ""); ?>"
                                    href="https://algarviarte.great-site.net/informacao.php">Informação</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "contactos" ? "active" : ""); ?>"
                                    href="https://algarviarte.great-site.net/contactos.php">Contactos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <!-- REDES SOCIAIS -->
            <div class="d-none col-md-2 px-0 mx-0 d-md-flex align-items-center justify-content-center">
                <div class="row px-0 mx-0">
                    <div class="col-10 mx-auto d-flex gap-4">
                        <a href="<?= getInstagram(); ?>" target="_blank" class="redes insta icone"></a>
                        <a href="<?= getFacebook(); ?>" target="_blank" class="redes face icone"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>