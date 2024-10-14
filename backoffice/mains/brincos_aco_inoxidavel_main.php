<?php

$brincosAI = getTodosBrincosAI();

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t4 mx-auto text-center mt-3">
            aço inoxidável
        </div>
    </div>

    <div class="row mt-3 mb-2 px-0 mx-0 text-center tabela">
        <form action="novo_brinco_aco_inoxidavel.php" class="mb-3">
            <button name="criar" value="" class="close2">adicionar novo</button>
        </form>
        <table>
            <tr>
                <th>id</th>
                <th>referência</th>
                <th>imagem</th>
                <th>editar</th>
                <th>apagar</th>
            </tr>
            <?php foreach($brincosAI as $b): ?>
            <tr>
                <td><?= $b["id"]; ?></td>
                <td><?= $b["referencia"]; ?></td>
                <td><img src="<?= getImagemBrincosAI($b["id"]); ?>" class="img-backoffice" alt="imagem_brinco" /></td>
                <td>
                    <form action="editar_brinco_aco_inoxidavel.php">
                        <button name="editar" value="<?= $b["id"]; ?>" class="editar">e</button>
                    </form>
                </td>
                <td>
                    <form action="apagar_brinco_aco_inoxidavel.php">
                        <button name="apagar" value="<?= $b["id"]; ?>" class="close">x</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</main>