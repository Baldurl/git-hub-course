<?php
require_once __DIR__ . '/../src/dao/vagadao.php';
require_once __DIR__ . '/../src/dao/usuariodao.php';


$dao = new VagaDAO();
$vagas = $dao->getAll();
$quantidadeRegistros = count($vagas);

if (!count($vagas)) {

    return null;
}

foreach ($vagas

as $vaga) { ?>

    <?php

    $id = $vaga['usuario_id'];
    $dao1 = new UsuarioDAO();
    $usuario = $dao1->getById($id);
    ?>



    <article>
        <div class="icon"><i class="fa fa-3x fa-angellist"></i></div>
        <?php echo '<strong>Empresa: </strong>' . $usuario[1]  ?><br>
        <div class="content" title="<?= $vaga['descricao'] ?>">
            <?php echo '<strong>Vaga: </strong>' . $vaga['nome'] ?><br>
            <p><?php echo '<strong>Tipo: </strong> ' . $vaga['tipo'] ?><br>
                <?php echo '<strong>Salário: </strong> ' . $vaga['salario'] ?><br>
                <?php echo '<strong>Descrição: </strong> ' .
                    substr($vaga['descricao'], 0,
                        (strlen($vaga['descricao']) >= 50 ? 50 :
                            strlen($vaga['descricao']))) ?>
                <!-- <a href="https://monkeytype.com/" target="_blank" rel="external">Descrição</a> -->
            </p>
            <span class="btn-orange">
                                    <a href="../vaga/candidatar.php?id=<?= $vaga['id'] ?>"><button type="submit"
                                                                                                class="btn-primary btn-lg">Ver detalhes</button></a>
                                </span>
        </div>
    </article>
    <?php } ?>




