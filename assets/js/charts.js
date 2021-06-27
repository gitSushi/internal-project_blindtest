 //Premier Chart je récup les données cachées sur la page afin de les envoyer dans la fonction de creation des graphiques
    var tests = document.getElementsByClassName('name');
    var values = document.getElementsByClassName('value');
    var minVal = document.getElementsByClassName('minvalue');
    var maxVal = document.getElementsByClassName('maxvalue');
    const newChart = document.getElementById('newChart');

    //Récupération des infos des tests
    var arrTests = [];
    for (item of tests) {
        arrTests.push(item.innerHTML)
    }

    var arrValues = [];
    for (val of values) {
        nval = parseInt(val.innerHTML)
        arrValues.push(nval)
    }
   

    var arrMinVal = [];
    for (min of minVal) {
        nmin = parseInt(min.innerHTML)
        arrMinVal.push(nmin)
    }

    var arrMaxVal = [];
    for (max of maxVal) {
        nmax = parseInt(max.innerHTML)
        arrMaxVal.push(nmax)
    }

    // Chart global donut
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
        
        //Tableau de couleur pour chart.js permet d'uniformiser les différents graph
        var bgColor = [
                        'rgba(255, 99, 132, 0.2)', 
                        'rgba(54, 162, 235, 0.2)', 
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)', 
                        'rgba(153, 102, 255, 0.2)', 
                        'rgba(255, 159, 64, 0.2)'
                    ]

        //Creation d'objets avec les infos des tests necessaire à faire les charts
        for (let i = 0; i < arrTests.length; i++) {
            var objTest = {
                name: arrTests[i],
                min: arrMinVal[i],
                max: arrMaxVal[i],
                percent: arrValues[i],
                // val: arrMinVal[i] - (100 - arrMaxVal[i]) + arrValues[i], NOTE pour plus tard
                color: bgColor[i]
            }
            console.log(objTest);
            displayChart(objTest);
        }

        //Pour un chart par test dans le groupe
        function displayChart(objTest) {
            let div = document.createElement("div")
            div.classList.add("column", "is-half")

            let canvas = document.createElement("canvas");

            canvas.id = objTest.name;
            div.appendChild(canvas)
            newChart.appendChild(div);
            var ctx2 = document.getElementById(objTest.name).getContext("2d");
        
            let myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: [objTest.name], //x legend
                datasets: [{
                    label: objTest.name,
                    data: [objTest.percent],
                    backgroundColor: objTest.color,
                    borderColor:  objTest.color,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false,
                        min: Math.round(objTest.min),
                        max: Math.round(objTest.max)
                    }
                }

            }
            })}
