var ctx = document.getElementById("myChart-4").getContext("2d");
var data = {
  labels: [
    "Tres bon payer / very good payer",
    "Bon payer / good payer",
    "Payer correct / average payer",
    "Mauvais payer / bad payer",
    "Tres mauvais payeur / very bad payer",
    "Undetermined",
  ],
  datasets: [
    {
      data: [500, 500, 460, 20, 20, 500],
      backgroundColor: [
        "#006BFF", // Blue
        "#8E9109", // Yellow
        "#E5B12C", // Gold
        "#FF2D11", // Red
        "#000000", // Black
        "#D9D9D9", // Grey
      ],
    },
  ],
};

var options = {
  responsive: true,
  maintainAspectRatio: false,
  cutout: "60%",
  rotation: 45,
  plugins: {
    legend: {
      display: true,
      position: "botom",
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




