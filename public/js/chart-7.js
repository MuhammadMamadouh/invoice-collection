var ctx = document.getElementById("myChart").getContext("2d");
var data = {
  labels: ["Feb 2024", "Nov 2024", "Apr 2024"],
  datasets: [
    {
      type: "bar",
      label: "Dataset 1",
      data: [11000, 15000, 12000],
      backgroundColor: "#0080A9",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
      order:2,
    },
    {
      type: "bar",
      data: [3500, 3500, 4900],
      backgroundColor: "#FFA819",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
      order:2,
    },
    {
      type: "line",
      label: "Line Dataset",
      data: [5900, 4000, 7000],
      borderColor: "#B20000",
      borderWidth: 2,
      fill: false,
      order:1,
      pointRadius: 0,
      pointHoverRadius: 0 
    },
  ],
};
var options = {
  responsive: true,
  maintainAspectRatio: false,
  plugins: {
    legend: {
      display: true,
      position: "top",
    },
  },
  scales: {
    y: {
      beginAtZero: true,
      ticks: {
        min: 0,
        max: 15000,
        stepSize: 5000,
        callback: function (value) {
          return (value / 1000).toFixed(3) + "k";
        },
      },
    },
    x: {
      grid: {
        display: false,
      },
    },
  },
};
var myChart = new Chart(ctx, {
  type: "bar",
  data: data,
  options: options,
});