<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
    <title>Menu</title>
</head>

<body>
    <main class="container mt-4">
        <?php
        $navTitle = "HISTORIQUE DE TESTS";
        include("views/nav.php");
        ?>
    
        <nav class="panel-block is-justify-content-center">
            <button class="button is-large">    
                <span class="icon is-medium">
                    <i class="fas fa-sort-alpha-down-alt"></i>
                </span>
                <span>HISTORIQUE DE TESTS</span>
            </button>

            <button href="#" class="button is-large">    
                <span class="icon is-medium">
                    <i class="fas fa-sort-alpha-down"></i>
                </span>
                <span>LISTE DESPRODUITS</span>
            </button>
        </nav>

        <nav class="panel-block is-justify-content-center">
            <button href="#" class="button is-large">    
                <span class="icon is-medium">
                    <i class="fas fa-edit"></i>
                </span>
                <span>CRÉATION DE TESTS</span>
            </button>

            <button href="#" class="button is-large">    
                <span class="icon is-medium">
                    <i class="fas fa-sign-out-alt"></i>
                </span>
                <span>DÉCONNEXION</span>
            </button>
        </nav>
    </main>
</body>

</html>