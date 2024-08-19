<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <p align="center">15 April to 21 April</p>
    <center><canvas style="width:640px;height:480px" id="mychart"></canvas></center>
</body>
<script>
    const ctx = document.getElementById('mychart').getContext('2d');

    const data = {
        labels: ['15 April', '16 April', '18 April', '19 April', '20 April','21 April'],
        datasets: [
            {
                label: 'Point 1',
                data: [400, 500, 450, 200, 300, 400],
                backgroundColor: 'rgba(236, 102, 102, 0.2)', 
                borderColor: 'rgba(236, 102, 102, 1)', 
                borderWidth: 2,
                fill: true,
                pointRadius: 5
            },
            {
                label: 'Point 2',
                data: [250, 300, 250, 150, 250, 350],
                backgroundColor: 'rgba(20, 122, 214, 0.2)', 
                borderColor: 'rgba(20, 122, 214, 1)', 
                borderWidth: 2,
                fill: true,
                pointRadius: 5
            }
        ]
    };

    const config = {
        type: 'line',
        data: data,
        options: {
            responsive: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    onClick: (e, legendItem, legend) => {
                        const index = legendItem.datasetIndex;
                        const meta = legend.chart.getDatasetMeta(index);
                        meta.hidden = meta.hidden === null ? !legend.chart.data.datasets[index].hidden : null;
                        legend.chart.update();
                    }
                }
            },
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    new Chart(ctx, config);
</script>
</html>
