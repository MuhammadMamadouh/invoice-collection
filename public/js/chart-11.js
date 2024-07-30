var ctx = document.getElementById("myChart-11").getContext("2d");
var data = {
  labels: [
    "Promise to pay",
    "On going",
    "Dispute",
    "Litigation",
    "Dispute resolved",
  ],
  datasets: [
    {
      data: [503, 292, 132, 40, 33],
      backgroundColor: [
        "#3AB8FF", // Blue
        "#0078BB", // Yellow
        "#31F610", // Gold
        "#DCE01A", // Red
        "#73EB48", // Black
      ],
    },
  ],
};

var options = {
  responsive: true,
  maintainAspectRatio: false,
  cutout: "65%",
  plugins: {
    legend: {
      display: true,
      position: "bottom",
      labels: {
        usePointStyle: true,
        pointStyle: "circle",
        fontSize: 2,
        boxWidth: 10,
        pointStyleWidth: 15,
        template: {
          maxWidth: 1,
        },
      },
    },
    tooltip: {
      enabled: true,
    },
    datalabels: {
      display: false // Ensure this is set to false to hide data labels
  },
    outlabels: {
      text: "%l ",
      color: "black",
      stretch: 30,
      font: {
        resizable: true,
        minSize: 12,
        maxSize: 18,
      },
    },
},

};

Chart.register(ChartDataLabels);

var myChart = new Chart(ctx, {
  type: "doughnut",
  data: data,
  options: options,
});




