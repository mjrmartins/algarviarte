<?php

$brincosPendentes = getTodosBrincosPendentes();

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t4 mx-auto text-center mt-3">
            pendentes
        </div>
    </div>

    <div class="row mt-3 mb-2 px-0 mx-0 text-center tabela">
        <form action="novo_brinco_pendente.php" class="mb-3">
            <button name="criar" value="" class="close2">adicionar novo</button>
        </form>

        <form action="editar_texto_brincos.php" class="mb-3">
            <button name="editarTexto" value="pendentes.php" class="close2">editar textos</button>
        </form>

        <table>
            <tr>
                <th>id</th>
                <th>referência</th>
                <th>imagem</th>
                <th>editar</th>
                <th>apagar</th>
            </tr>
            <?php foreach($brincosPendentes as $b): ?>
            <tr>
                <td><?= $b["id"]; ?></td>
                <td><?= $b["referencia"]; ?></td>
                <td><img src="<?= getImagemBrincosPendentes($b["id"]); ?>" class="img-backoffice" alt="imagem_brinco" /></td>
                <td>
                    <form action="editar_brinco_pendente.php">
                        <button name="editar" value="<?= $b["id"]; ?>" class="editar">e</button>
                    </form>
                </td>
                <td>
                    <form action="apagar_brinco_pendente.php">
                        <button name="apagar" value="<?= $b["id"]; ?>" class="close">x</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</main>