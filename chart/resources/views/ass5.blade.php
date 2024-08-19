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
    <center><canvas style="width:640px;height:480px"  id="mychart"></canvas></center>
</body>
<script>
    const ctx = document.getElementById('mychart').getContext('2d');

    const data = {
        labels: ['15 April', '16 April', '18 April', '19 April', '20 April','21 April'],
        datasets: [
            {
                label: 'Point 1',
                lineTension: 0.4,
                data: [500, 300, 500, 400, 300, 500],
                backgroundColor: 'rgba(121, 210, 222, 0.6)', 
                borderColor: 'rgba(121, 210, 222, 1)', 
                borderWidth: 1,
                fill: true,
                pointRadius: 0, 
            },
            {
                label: 'Point 2',
                lineTension: 0.4,
                data: [250, 20, 100, 150, 250, 150],
                backgroundColor: 'rgba(20, 122, 214, 1)', 
                borderColor: 'rgba(20, 122, 214, 1)', 
                borderWidth: 1,
                fill: true,
                pointRadius: 0, 
            }
        ]
    };

    const config = {
        type: 'line',
        data: data,
        options: {
            responsive: false,
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
