<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Test Group View</title>
</head>

<body>
    <main class="container mt-4">

        <?php
        $navTitle = "Création d'un groupe de tests";
        include("views/nav.php");
        ?>

        <nav class="panel pb-4">
            <p class="panel-heading">
                Création d'un groupe de tests
            </p>
            <div class="panel-block">
                <div class="field is-flex-grow-5">
                    <p class="control has-icons-left">
                        <label class="label" for="ice-cream-choice">Choisissez un produit</label>
                        <input class="input select" list="products" id="product-choice" name="ice-cream-choice" placeholder="Search" required />
                        <!-- <span class="icon is-left">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </span> -->

                        <datalist id="products">
                            <?php
                            foreach ($products as $product) {
                            ?>
                                <option value="<?= $product["name"] ?>">
                                <?php
                            }
                                ?>
                        </datalist>
                    </p>
                    <p class="help is-warning">Champs requis</p>
                </div>
            </div>
            <div class="panel-block">
                <div class="field is-flex-grow-5">
                    <label class="label">Nom du groupe de tests</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-success is-fullwidth" type="text" placeholder="Nom du groupe de tests" required>
                    </div>
                    <p class="help is-warning">Champs requis</p>
                </div>
            </div>
            <div class="panel-block">
                <div class="field is-flex-grow-5">
                    <label class="label">Description</label>
                    <div class="control">
                        <textarea class="textarea is-medium" placeholder="Description" required></textarea>
                    </div>
                    <p class="help is-warning">Champs requis</p>
                </div>
            </div>
            <div class="field is-grouped is-grouped-right mt-4 mr-4">
                <div class="control">
                    <button class="button is-link">Sauvegarder</button>
                </div>
            </div>
        </nav>
    </main>
</body>

</html>