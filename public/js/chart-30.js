var ctx = document.getElementById('myChart-30').getContext('2d');
var data = {
    labels:[["Today ","-> 04-21"],[""],["04-29","-> 05-05"],[""],["05-13","-> 05-19"],[""],["05-27","-> 06-02"],[""],["06-10","-> 06-16"],[""],["06-24","-> 06-30"],[""],["07-08","-> 07-14"],[""],[""]],
    datasets: [
        {
            label: "Including promise to pay",
            data: [50, 100, 00, 00, 0,00, 0,0,0,0,0,0,0,0],
            backgroundColor: "#8E9109",
            barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
        },
        {
            label: "Payment behavior forecast",
            data: [1800, 2200, 1700, 1400, 1450, 700, 250,300,150,800,400,0,0,0],
            backgroundColor: "rgb(150, 195, 52)",
            barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
        },
    ]
};

var options = {
    responsive:true,
    maintainAspectRatio: false,
    plugins: {
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                usePointStyle: true,
                pointStyle: "rect",
                fontSize: 2,
                boxWidth: 10,
                pointStyleWidth: 12,
                template: {
                  maxWidth: 1,
                },
              },
        },
        tooltip: {
            enabled: true
        },
        datalabels: {
            display: false // Ensure this is set to false to hide data labels
        }
    },
    scales: {
        y: {
            beginAtZero: true,
            ticks: {
                font: {
                    size: 9 // Font size for x-axis labels
                  },
                max: 2000,
                stepSize: 500,
                callback: function(value) {
                    return (value / 1000).toFixed(3) + "k€";
                },
            },
        },
        x: {
            stacked: true,
            grid: {
                display: false,
            },
            ticks: {
                font: {
                    style: 'normal',
                    size:9
                },
                autoSkip: false,
                maxWidth: 100,
                maxRotation: 0,
            }
        }
    },
};

var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});
