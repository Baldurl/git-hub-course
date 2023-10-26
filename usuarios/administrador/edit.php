<?php
require_once __DIR__ . '/../../src/dao/usuariodao.php';
require_once __DIR__ . "/../../src/dao/perfildao.php";

$perfilDAO = new PerfilDAO();
$perfis = $perfilDAO->getAll();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? 0;
$dao = new UsuarioDAO();
$usuario = $dao->getById($id);

if (!$usuario) {
    header('location: index.php?error=Usuário não encontrado!');
    exit;
}
?>
<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="../../auth/home.php">TechJobs</a>
        </div>


        <nav class="menu">


            <ul>
                <li class="item-menu">
                    <a href="../../auth/home.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-columns"></i></span>
                        <span class="txt-link">Dashboard</span>
                    </a>
                </li>

                <!--Colocar condição de acesso à configuração.
                 Se for um candidato, ele pode alterar dados sendo um perfil candidato.
                 Se for um empresa, ele pode alterar dados sendo um perfil empresa. -->

                <li class="item-menu">
                    <a href="index.php ">
                        <span class="icon"><i class="bi bi-person"></i></span>
                        <span class="txt-link">Perfil</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../../auth/logoff.php">
                        <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                        <span class="txt-link">Logoff</span>
                    </a>
                </li>
            </ul>
        </nav>
    </nav>
</header>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="../../assets/css/button.css" rel="stylesheet">
<link href="../../assets/css/style.css" rel="stylesheet">
<link href="../../assets/css/usuario.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<main class="main-information">

    <?php if (isset($_GET['msg']) && $_GET['msg'] == 'erro') { ?>

    <div class="update-confirmation-error">

        <div class="update-confirmation-header">
            <h2>Erro ao alterar dados!</h2>
        </div>


        <?php } ?>
    </div>
    <div class="card-information">
        <div class="container">
            <div class="row text ">
                <div class="col-md-12">
                    <div class="card-body font-weight-bold card-information-main">
                        <div class="card-information-box">
                            <span class="card-information-header"><h1>Alterar usuário</h1></span>
                            <form action="update.php" method="POST">
                                <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

                                <label>E-mail</label><br>
                                <input type="email" name="email" placeholder="Informe seu e-mail." size="80" required
                                       autofocus
                                       value="<?= htmlspecialchars($usuario['email']) ?>"><br>

                                <label>Senha</label><br>
                                <input type="password" name="senha" placeholder="****" size="80" required
                                       autofocus
                                       value="<?= htmlspecialchars($usuario['senha']) ?>"><br>


                                <label>Nome</label><br>
                                <input type="text" name="nome" placeholder="Informe seu nome." size="80" required
                                       value="<?= htmlspecialchars($usuario['nome']) ?>"><br>


                                <label>Perfil</label><br>
                                <select name="perfil">
                                    <?php foreach ($perfis as $perfil) : ?>
                                        <option value="<?= $perfil['id'] ?>"><?= $perfil['nome'] ?></option>
                                    <?php endforeach ?>
                                </select><br>
                                <br>
                                <button class="btn" type="submit">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
