var ctx = document.getElementById("myChart-15").getContext("2d");
var data = {
  labels: [
    "Missing PO",
    "Litige materiel manguant",
    "Price dispute",
    "Litige prix",
    "Litige administrative",
    "Litige Livrasion",
    "Litige qualite",
  ],
  datasets: [
    {
      data: [415, 148, 138, 125, 107,60,7],
      backgroundColor: [
        "#0078BB", 
        "#3AB8FF", 
        "#31F610", 
        "#73EB48", 
        "#DCE01A", 
        "#4A2828", 
        "#503636", 
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




