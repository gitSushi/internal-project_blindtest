<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <main class="container mt-4">
        <?php
        $navTitle = "Ajout de tests";
        include("views/nav.php");
        ?>

        <nav class="panel">
            <p class="panel-heading">
                <?= $testGroup["name"] ?>
            </p>
            <div class="panel-block">
                <div class="field is-flex-grow-5">
                    <label class="label">Nom du tests *</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-success is-fullwidth" type="text" placeholder="Nom du test" required>
                    </div>
                </div>
            </div>
            <div class="panel-block">
                <div class="field is-flex-grow-5">
                    <label class="label">Description *</label>
                    <div class="control">
                        <textarea class="textarea is-medium" rows="2" placeholder="Description" required></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-block is-justify-content-center">
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label">Valeur minimum *</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input is-success is-fullwidth" type="text" placeholder="Valeur minimum" required>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label">Valeur maximum *</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input is-success is-fullwidth" type="text" placeholder="Valeur maximum" required>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label">Résultat *</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input is-success is-fullwidth" type="text" placeholder="Résultat" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="level">
                <!-- Left side -->
                <div class="level-left">
                    <div class="level-item">
                        <p class="help is-danger ml-4">* Champs requis</p>
                    </div>
                </div>

                <!-- Right side -->
                <div class="level-right">
                    <p class="level-item">
                    <div class="field is-grouped is-grouped-right mt-4 mr-4">
                        <div class="control">
                            <button class="button is-link">Ajout du test</button>
                        </div>
                    </div>
                    </p>
                </div>
            </nav>
        </nav>
    </main>
</body>

</html>