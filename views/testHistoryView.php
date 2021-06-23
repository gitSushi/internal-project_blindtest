<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
    <title>Historique des tests</title>
</head>

<body>
    <main class="container mt-4">
        <?php
        $navTitle = "HISTORIQUE DE TESTS";
        include("views/nav.php");
        ?>
<nav class="panel">
    <div class="panel-block is-justify-content-center">

    <?php
    $t = "trouloulou";
    foreach ($datas as $data){
    ?>
            <div class="column">
                <div class="field">
                    <!-- condition ? vrai : faux; -->
                    <div class="box <?= $data['condition'] ? "is-success" : "is-danger" ?>">
                        <label class="label"><?= $data['nom du groupe'] ?></label><br>
                            <div class="box">
                                <?= $data['reference employee'] ?>
                                <?= $data['nom du produit'] ?>
                            </div>
                    </div>
                </div>
            </div>
    <?php
    }
    ?>       
    </div>
</nav>
</body>

</html>
