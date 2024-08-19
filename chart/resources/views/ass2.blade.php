<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <style>
        .chart-container {
            position: relative;
            width: 200px;
            height: 200px;
            align-item: center;
        }
        #percentage {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
        }
        button{
            background-color: #000; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>



<swiper-container>
  <swiper-slide style="width: 1241px; height: 500px;">
    <div class="chart-container">
       <center> <canvas style="width:640px;height:480px"  id="myDoughnutChart1"></canvas></center>
        <div id="percentage1"  style="position: absolute; top: 125%; left: 155%; transform: translate(-50%, -50%); font-size: 54px;">76%</div>
    </div>
  </swiper-slide>
  <swiper-slide style="width: 1241px; height: 500px;">
    <div class="chart-container">
    <center> <canvas style="width:640px;height:480px"  id="myDoughnutChart2"></canvas></center>
        <div id="percentage2"  style="position: absolute; top: 125%; left: 155%; transform: translate(-50%, -50%); font-size: 54px;">36%</div>
    </div>
  </swiper-slide>
  <swiper-slide style="width: 1241px; height: 500px;">
    <div class="chart-container">
    <center> <canvas style="width:640px;height:480px"  id="myDoughnutChart3"></canvas></center>
        <div id="percentage3"  style="position: absolute; top: 125%; left: 155%; transform: translate(-50%, -50%); font-size: 54px;">66%</div>
    </div>
  </swiper-slide>
</swiper-container>

<script>
    function createDoughnutChart(canvasId, percentage) {
        const ctx = document.getElementById(canvasId).getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Filled', 'Empty'],
                datasets: [{
                    label: 'Percentage Fill',
                    data: [percentage, 100 - percentage],
                    backgroundColor: ['#36A2EB', '#F2f2f2'],
                    borderColor: ['#36A2EB', '#F2f2f2'],
                    borderWidth: [1, 1],
                    hoverOffset: 4,
                    borderRadius: [30, 0],
                }]
            },
            options: {
                responsive: false,
                circumference: '360',
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed) {
                                    label += `${context.parsed}%`;
                                }
                                return label;
                            }
                        }
                    }
                },
                cutout: '70%'
            }
        });
    }

    // Create charts with unique IDs and percentages
    createDoughnutChart('myDoughnutChart1', 76);
    createDoughnutChart('myDoughnutChart2', 36);
    createDoughnutChart('myDoughnutChart3', 66);
</script>


<button>Slide Next</button>

<script>
  const swiperEl = document.querySelector('swiper-container');
  const buttonEl = document.querySelector('button');

  buttonEl.addEventListener('click', () => {
    swiperEl.swiper.slideNext();
  });
</script>

</body>
</html>
