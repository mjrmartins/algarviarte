<?php
ob_start();

if(!verificarLogin()){
    header("Location: index.php");
    exit();
}

$brincos = getDropBrincos();

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Algarviarte - backoffice</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.jpg" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../backoffice/css/style_backoffice.css" />
</head>

<body class="w-100 mx-auto bg-light">
    <header class="container-fluid w-100 px-0 mx-0">

        <div class="row px-0 mx-0">
            <div class="col-10 mx-auto text-center t1 mt-5 pt-4 pb-4 hometitle">
                Algarviarte - backoffice
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
                                <a class="nav-link <?= ($pagina_atual == "inicio" ? "active" : ""); ?>"
                                    href="inicio.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "home" ? "active" : ""); ?>"
                                    href="home.php">Home</a>
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
                                    href="informacao.php">Informação</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "contactos" ? "active" : ""); ?>"
                                    href="contactos.php">Contactos</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>