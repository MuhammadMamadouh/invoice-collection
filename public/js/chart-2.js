var ctx = document.getElementById("myChart-2").getContext("2d");
var data = {
  labels: ["Nov2023", "Dec2023", "Jan2023", "Feb2023", "Mar2023", "Apr2024"],
  datasets: [
    {
      label: "",
      data: [100, 2200, 4400, 4100, 8000, 8000],
      backgroundColor: "#00B38A",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
    },
  ],
};
var options = {
  responsive:true,
  maintainAspectRatio: false,
  plugins: {
    legend: {
      display: false,
      position:"bottom"
    },
  },
  scales: {
    y: {
      beginAtZero: true,
      min: 0,
      max: 8000,
      ticks: {
        stepSize: 2000,
        callback: function (value, index, values) {
          return (value / 1000).toFixed(3) + "k€";
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
