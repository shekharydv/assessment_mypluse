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
    <center> <canvas style="width:640px;height:480px"  id="mychart"></canvas> </center>
</body>
<script>
    const ctx = document.getElementById('mychart').getContext('2d');

    const data = {
        labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
        datasets: [
            {
                label: 'Point 1',
                lineTension: 0.4,
                data: [250, 400, 50, 200,  202, 102,40],
                backgroundColor: 'rgba(236, 102, 102, 0.3)', 
                borderColor: 'rgba(236, 102, 102, 1)', 
                borderWidth: 2,
                fill: true 
            },
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
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            
                            let label = context.dataset.label || '';
                            let value = context.raw || 0;

                           
                            let additionalText = 'Additional Info: ';

                            
                            return `${label}: ${additionalText}${value}`;
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
