<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentista</title>
    <link rel="shortcut icon" href="img/dente.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php require_once('conteudo/header.php') ?>
    <?php require_once('conteudo/banner.php') ?>

    <main>
        <?php require_once('conteudo/sobre.php') ?>
        <?php require_once('conteudo/servico-conteudo.php') ?>
        <?php require_once('conteudo/planos-conteudo.php') ?>
        <?php require_once('conteudo/dentistas-conteudo.php') ?>
        <?php require_once('conteudo/localizacao.php') ?>
        <?php require_once('conteudo/dentistas.php') ?>
    </main>

</body>

<div class="whatsapp">
    <a onclick="linkWhats()" href="#"><img src="img/icon-whatsapp.png" alt="Icone Whatsapp"></a>
</div>


<script src="js/script.js"></script>
</body>

</html>