<?php
$navTitle = "Détail du test";
include("views/nav.php");
?>

<div class="panel columns is-vcentered">
    <div class="column is-flex is-flex-direction-column is-align-items-center">
        <p><strong>Nom du groupe de test:</strong> <?= $tests[0]['name'] ?></p>
        <p><strong>Dernier passage:</strong> <?= $tests[0]['last_date_tested'] ?></p>
        <p><strong>Testeur:</strong> <?= $tests[0]['reference_employee'] ?></p>
    </div>
    <div class="column">
        <canvas id="myChart" style="width: 10em;"></canvas>
    </div>

</div>
<div id="newChart" class="columns is-multiline"></div>


<!--Valeurs à récupérer en javascript-->
<div>
    <?php foreach ($tests as $test) : ?>
        <p hidden class="name"><?= $test['testname'] ?></p>
        <p hidden class="value"><?= $test['percentage'] ?></p>
        <p hidden class="minvalue"><?= $test['minimum_value'] ?></p>
        <p hidden class="maxvalue"><?= $test['maximum_value'] ?></p>
    <?php endforeach ?>
</div>

<script src="../assets/js/charts.js"></script>

</main>