<?php

$contactos = selectSQLUnico("SELECT * FROM contactos");
$redes = selectSQLUnico("SELECT * FROM redes");

$form = isset($_GET["texto_contactos"]) && isset($_GET["facebook"]) && isset($_GET["instagram"]);

if($form){
    $texto = $_GET["texto_contactos"];
    $facebook = $_GET["facebook"];
    $instagram = $_GET["instagram"];

    iduSQL("UPDATE contactos SET texto_contactos='$texto'");
    iduSQL("UPDATE redes SET facebook='$facebook', instagram='$instagram'");
    header("Location: contactos.php");
    exit();
}

ob_end_flush();
?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t4 mx-auto text-center mt-3">
            contactos
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto">
            <label for="texto_contactos" class="t5">texto da página de contactos</label>
            <br>
            <textarea name="texto_contactos" id="editor" autofocus rows="10"
                style="width: 100%;"><?= $contactos["texto_contactos"] ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
            </script>
            <br><br><br>
            <label for="facebook" class="t5">link do facebook</label>
            <br>
            <input type="text" name="facebook" required="required" style="width: 100%;"
                value="<?= $redes["facebook"] ?>">
            <br><br><br>
            <label for="instagram" class="t5">link do instagram</label>
            <br>
            <input type="text" name="instagram" required="required" style="width: 100%;"
                value="<?= $redes["instagram"] ?>">
            <input type="submit" value="EDITAR" class="close mb-3 mt-3">
        </form>
    </div>
</main>