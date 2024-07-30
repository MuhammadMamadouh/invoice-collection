var ctx = document.getElementById("myChart-14").getContext("2d");

var data = {
  labels: [
    "",
    "",
    "01-22 -> 01-28",
    "",
    "01-22 -> 01-28",
    "",
    "01-22 ->01-28",
    "",
    "01-22 -> 01-28",
    "",
    "01-22 -> 01-28",
    "",
    "01-22 -> 01-28",
    "",
    "01-22->Today",
  ],
  datasets: [
    {
      label: "Missing PO",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, 0.1, 0.5, 0, 1],
      stack: "Stack 0",
      backgroundColor: "#4A2828",
      barPercentage: window.innerWidth < 600 ? 0.2 : 1.1,
    },
    {
      label: "Litige materiel manguant",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2, 0.1, 0.5, 0, 1],
      backgroundColor: "#503636",
      stack: "Stack 0",
      barPercentage: window.innerWidth < 600 ? 0.2 : 1.1,
    },
    {
      label: "Price dispute",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 1.5, 0.1, 0.5, 0, 1],
      backgroundColor: "#DCE01A",
      stack: "Stack 0",
       barPercentage: window.innerWidth < 600 ? 0.2 : 1.1,
    },
    {
      label: "Litige prix",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0.9, 0.1, 0.5, 0, 1],
      backgroundColor: "#73EB48",
      stack: "Stack 0",
       barPercentage: window.innerWidth < 600 ? 0.2 : 1.1,
    },
    {
      label: "Litige administrative",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0.5, 0.8, 0.1, 0.5, 0, 1],
      backgroundColor: "#0078BB",
      stack: "Stack 0",
       barPercentage: window.innerWidth < 600 ? 0.2 : 1.1,
    },
    {
      label: "Litige Livrasion",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0.6, 1, 0.1, 0.5, 0, 1],
      backgroundColor: "#3AB8FF",
      stack: "Stack 0",
       barPercentage: window.innerWidth < 600 ? 0.2 : 1.1,
    },
    {
      label: "Litige qualite",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0.3, 0.1, 0.5, 0, 1],
      backgroundColor: "#31F610",
      stack: "Stack 0",
       barPercentage: window.innerWidth < 600 ? 0.2 : 1.1,
    },
  ],
};

var options = {
  responsive: true,
  maintainAspectRatio: false,
  plugins: {
    legend: {
      display: true,
      position: "bottom",
      // coustm labels circel or mor3bat //
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
      // coustm labels circel or mor3bat //
    },

    tooltip: {
      mode: "index",
      intersect: false,
    },
  },
  scales: {
    x: {
      stacked: true,
      grid: {
        display: false,
      },
      ticks: {
        // maxRotation: 0, // Maximum rotation for labels
        // minRotation: 0, // Minimum rotation for labels
        // font: {
        //   size: 12, // Control the font size
        //   weight: "bold",
        // },
      },
    },
    y: {
      beginAtZero: true,
      min: 0,
      max: 30,
      ticks: {
        stepSize: 10,
        callback: function (value, index, values) {
          return value + " k€";
        },
      },
    },
  },
};

var myChart = new Chart(ctx, {
  type: "bar",
  data: data,
  options: options,
});
// window.addEventListener('resize', function () {
//     myChart.options.scales.x.ticks.font.size = window.innerWidth < 600 ? 2 : 1;
//     myChart.update();
// });
