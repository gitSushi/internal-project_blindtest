<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <title>Menu</title>
</head>

<body>
    <main class="m-4">
        <?php
        $navTitle = "MENU";
        include("views/nav.php");
        ?>
    
            <div class="columns is-multiline">
                <div class="column is-half has-text-centered py-8 px-6">
                    <div class="border">
                        <a href="/history">
                            <span class="icon is-size-1">
                                <i class="fas fa-sort-alpha-down-alt"></i>
                            </span>
                            <p class="subtitle is-4">HISTORIQUE DE TESTS</p>
                        </a>
                    </div>
                </div>
                <div class="column is-half has-text-centered py-8 px-6">
                    <div class="border">
                        <a href="/product">
                            <span class="icon is-size-1">
                                <i class="fas fa-sort-alpha-down"></i>
                            </span>
                            <p class="subtitle is-4">LISTE DES PRODUITS</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="columns is-multiline">
                <div class="column is-half has-text-centered py-8 px-6">
                        <div class="border">
                            <a href="/testgroup/form/"> 
                                <span class="icon is-size-1">
                                    <i class="fas fa-edit"></i>
                                </span>
                                <p class="subtitle is-4">CRÉATION DE TESTS</p>
                            </a>
                        </div>
                    </div>

                    <div class="column is-half has-text-centered py-8 px-6">
                        <div class="border">
                            <a href="/logout">    
                                <span class="icon is-size-1">
                                    <i class="fas fa-sign-out-alt"></i>
                                </span>
                                <p class="subtitle is-4">DÉCONNEXION</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>