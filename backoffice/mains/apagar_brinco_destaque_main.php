<?php

$form = isset($_GET["apagar"]);

if($form){
    $id = $_GET["apagar"];
}
else{
    header("Location: brincos_destaques.php");
    exit();
}

$form2 = isset($_GET["sim"]);

if($form2){
    iduSQL("DELETE FROM brincos_destaques WHERE id='$id'");
    header("Location: brincos_destaques.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t4 mx-auto text-center mt-3">
            apagar brinco em destaque
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto">
            <input type="hidden" name="apagar" value="<?= $id; ?>">
            <label for="home_title" class="t5">deseja mesmo apagar o brinco?</label>
            <br><br>
            <img src="<?= getImagemBrincosDestaques($id); ?>" class="img-backoffice" alt="imagem_brinco" />
            <br><br>
            <p class="t5">Ref: <?= getRefBrincosDestaques($id); ?></p>
            <input type="submit" name="sim" value="apagar" class="close mb-3 mt-3">
        </form>
        <a href="brincos_destaques.php"><button class="close2">voltar</button></a>
    </div>
</main>