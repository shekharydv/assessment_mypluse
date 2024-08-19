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
   <center> <canvas style="width:640px;height:480px"  id="mychart"></canvas></center>
</body>
<script>
    const ctx = document.getElementById('mychart').getContext('2d');

    const data = {
        labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUNE'],
        datasets: [
            {
                label: 'Point 1',
                lineTension: 0.4,
                type: 'bar',
                data: [500, 500, 500, 500, 500, 500],
                backgroundColor: 'rgba(20, 122, 214, 0.1)',
                borderColor: 'rgba(20, 122, 214, 0.1)',
                borderWidth: 1,
                hoverBackgroundColor: 'rgba(124, 130, 138, 0.3)',  
                hoverBorderColor: 'rgba(20, 122, 214, 0.5)',      
                fill: true
            },
            {
                label: 'Point 2',
                type: 'line',
                lineTension: 0.4,
                data: [300, 250, 450, 350, 50, 250],
                borderColor: 'rgba(20, 122, 214, 1)',
                borderWidth: 2,
                fill: false
            }
        ]
    };

    const config = {
        type: 'bar',
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
                },
                tooltip: {
                    callbacks: {
                        title: (tooltipItems) => {
                            return tooltipItems[0].label;
                        },
                        label: (tooltipItem) => {
                            return `${tooltipItem.dataset.label}: ${tooltipItem.raw} (Additional Info)`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    beginAtZero: true,
                    grid: {
                        display: false
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        display: false
                    }
                }
            }
        }
    };

    new Chart(ctx, config);
</script>
</html>
