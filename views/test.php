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
<div id="newChart"></div>


<!--Caché-->
<div>
    <?php foreach ($tests as $test) : ?>
        <p hidden class="name"><?= $test['testname'] ?></p>
        <p hidden class="value"><?= $test['percentage'] ?></p>
        <p hidden class="minvalue"><?= $test['minimum_value'] ?></p>
        <p hidden class="maxvalue"><?= $test['maximum_value'] ?></p>
    <?php endforeach ?>
</div>


<script>
    //Premier Chart je récup les données cachées sur la page afin de les envoyer dans la fonction de creation des graphiques
    var tests = document.getElementsByClassName('name');
    var values = document.getElementsByClassName('value');
    var minVal = document.getElementsByClassName('minvalue');
    var maxVal = document.getElementsByClassName('maxvalue');
    const newChart = document.getElementById('newChart');


    var arrTests = [];
    for (item of tests) {
        arrTests.push(item.innerHTML)
    }

    var arrValues = [];
    for (val of values) {
        arrValues.push(val.innerHTML)
    }

    var arrMinVal = [];
    for (min of arrMinVal) {
        arrMinVal.push(min.innerHTML)
    }
    console.log(arrMinVal);

    var arrMaxVal = [];
    for (max of arrMaxVal) {
        arrMaxVal.push(max.innerHTML)
    }

    console.log(arrMaxVal);

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: arrTests,
            datasets: [{
                label: 'Réussite des tests',
                data: arrValues,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        }
    });

    //Pour les graphs détaillé je les génére à la volée en me basant sur le nombre de test passé sur ce groupe

    backgroundColor = ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'
    ]


    for (let i = 0; i < arrTests.length; i++) {
        //Préparation des élements
        let canvas = document.createElement("canvas");
        canvas.setAttribute("id", i);
        newChart.appendChild(canvas);
        //Charts
        var ctx2 = document.getElementById(i).getContext("2d");
        let myChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: "test",
                datasets: [{
                    label: arrTests,
                    data: arrValues,
                    backgroundColor: backgroundColor[i],
                    borderColor: backgroundColor[i],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                }
            }

        })
    }
</script>