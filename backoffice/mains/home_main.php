<?php

$home = selectSQLUnico("SELECT * FROM home");

$form = isset($_GET["home_title"]) && isset($_GET["primary_text"]);

if($form){
    $titulo = $_GET["home_title"];
    $texto = $_GET["primary_text"];

    iduSQL("UPDATE home SET home_title='$titulo', primary_text='$texto'");
    header("Location: home.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t4 mx-auto text-center mt-3">
            home
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto">
            <label for="home_title" class="t5">título da home page</label>
            <br>
            <input type="text" name="home_title" required="required" autofocus style="width: 100%;"
                value="<?= $home["home_title"] ?>">
            <br>
            <br><br>
            <label for="primary_text" class="t5">texto da home page</label>
            <br>
            <textarea name="primary_text" id="editor" rows="10"
                style="width: 100%;"><?= $home["primary_text"] ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
            </script>

            <input type="submit" value="EDITAR" class="close mb-3 mt-3">
        </form>
    </div>
</main>