<main class="container mt-4">
    <?php
    $navTitle = "Ajout de tests";
    include("views/nav.php");
    ?>

    <nav class="panel">
        <p class="panel-heading">
            <?= $testGroup["name"] ?>
            <!-- LIGNE SUIVANTE PAS IDÉAL -->
            <input hidden id="testGroupId" value="<?= $testGroup["id"] ?>" />
        </p>
        <div class="panel-block">
            <div class="field is-flex-grow-5">
                <label class="label">Nom du tests *</label>
                <div class="control has-icons-left has-icons-right">
                    <input id="testName" class="input is-success is-fullwidth" type="text" placeholder="Nom du test" required>
                </div>
            </div>
        </div>
        <div class="panel-block">
            <div class="field is-flex-grow-5">
                <label class="label">Description *</label>
                <div class="control">
                    <textarea id="description" class="textarea is-medium" rows="2" placeholder="Description" required></textarea>
                </div>
            </div>
        </div>
        <div class="panel-block is-justify-content-center">
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">Valeur minimum *</label>
                        <div class="control has-icons-left has-icons-right">
                            <input id="minVal" class="input is-success is-fullwidth" type="text" placeholder="Valeur minimum" required>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Valeur maximum *</label>
                        <div class="control has-icons-left has-icons-right">
                            <input id="maxVal" class="input is-success is-fullwidth" type="text" placeholder="Valeur maximum" required>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Résultat *</label>
                        <div class="control has-icons-left has-icons-right">
                            <input id="testResult" class="input is-success is-fullwidth" type="text" placeholder="Résultat" required>
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
                        <button id="btnAddTest" class="button is-link">Ajout du test</button>
                    </div>
                </div>
                </p>
            </div>
        </nav>
    </nav>

    <div id="tests"></div>
</main>

<script src="../assets/js/addTest.js"></script>
</body>

</html>