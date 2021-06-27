<main class="container mt-4">

    <?php
    $navTitle = "Création d'un groupe de tests";
    include("views/nav.php");
    ?>

    <form action="http://localhost:1597/testgroup/create" method="POST">
        <nav class="panel pb-4">
            <p class="panel-heading">
                Création d'un groupe de tests
            </p>
            <div class="panel-block">
                <div class="field is-flex-grow-5">
                    <p class="control has-icons-left">
                        <label class="label" for="html-product-choice">Choisissez un produit *</label>
                        <input class="input select" list="products" id="html-product-choice" name="product-choice" placeholder="Search" required />

                        <datalist id="products">
                            <?php
                            foreach ($products as $product) {
                            ?>
                                <option value="<?= $product->getId() . "-" . $product->getName() ?>">
                                <?php
                            }
                                ?>
                        </datalist>
                    </p>
                </div>
            </div>
            <div class="panel-block">
                <div class="field is-flex-grow-5">
                    <label class="label">Nom du groupe de tests *</label>
                    <div class="control has-icons-left has-icons-right">
                        <input name="test-group-name" class="input is-success is-fullwidth" type="text" placeholder="Nom du groupe de tests" required>
                    </div>
                </div>
            </div>
            <div class="panel-block">
                <div class="field is-flex-grow-5">
                    <label class="label">Description *</label>
                    <div class="control">
                        <textarea name="description" class="textarea" placeholder="Description" required></textarea>
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
                            <button id="submit" type="submit" class="button is-link">Sauvegarder</button>
                        </div>
                    </div>
                    </p>
                </div>
            </nav>
        </nav>
    </form>
</main>
</body>

</html>