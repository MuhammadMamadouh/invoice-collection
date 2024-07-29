var ctx = document.getElementById("myChart-12").getContext("2d");

var data = {
  labels: ["","","01-22 -> 01-28","","01-22 -> 01-28","","01-22 ->01-28","","01-22 -> 01-28","","01-22 -> 01-28","","01-22 -> 01-28","","01-22->Today"],
  datasets: [
    {
      label: "Promise to pay",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 320, 490, 480],
      backgroundColor: "#3AB8FF",
      stack: "Stack 0",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
    },
    {
      label: "On going",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 100, 140, 200],
      backgroundColor: "#0078BB",
      stack: "Stack 0",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
    },
    {
      label: "Dispute",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 40, 40, 50],
      backgroundColor: "#DCE01A",
      stack: "Stack 0",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
    },
    {
        label: "Litigation",
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 40, 40, 50],
        backgroundColor: "#73EB48",
        stack: "Stack 0",
        barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
      },
      {
        label: "Dispute resolved",
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 200, 290, 100],
        backgroundColor: "#31F610",
        stack: "Stack 0",
        barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
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
    },
    y: {
      beginAtZero: true,
      min: 0,
      max: 1000,
      ticks: {
        stepSize: 250,
        callback: function (value, index, values) {
          return value + "k€";
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
