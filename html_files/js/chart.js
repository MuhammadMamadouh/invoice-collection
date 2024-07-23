var ctx = document.getElementById("myChart-1").getContext("2d");
var data = {
  labels: [
    ["Apr"," 2023"],
    ["Jun"," 2023"],
    ["Aug"," 2023"],
    ["Oct"," 2023"],
    ["Dec"," 2023"],
    ["Feb"," 2024"],
    ["Apr"," 2024"],
    ["Jun"," 2024"],
    ["Aug"," 2024"],
  ],
  datasets: [
    {
      label: "Total Cashed in (€)",
      data: [0, 0, 100, 2200, 4900, 5000, 7000, 5000, 300],
      backgroundColor: "#008049",
      stack: "Stack 0",
      barPercentage: window.innerWidth < 600 ? 0.5 : .9,
      order:2,
    },

    {
      label: "Total invoiced",
      data: [0, 0, 100, 2200, 4900, 5000, 7000, 5000, 300],
      stack: "Stack 0",
      backgroundColor: "orange",
      barPercentage: window.innerWidth < 600 ? 1.1 : .9,
      order:2,
    },
    {
      label: "Total Cashed in (%)",
      data: [0, 12400, 9800, 12400, 11500, 5100, 5000, 12000, 13000],
      backgroundColor: "#00B38A",
      borderColor: "#00B38A",
      borderWidth: 1,
      tension: 0.4,
      type: "line",
      order: 1,
    },
  ],
};

var myChart = new Chart(ctx, {
  type: "bar",
  data: data,
  options: {
    responsive: true,
    maintainAspectRatio: false,
    gridLines: {
      display: false,
    },
    plugins: {
      legend: {
        display: true,
        position: "bottom",
      },
    },
    scales: {
      y: {
        beginAtZero: true,
        min: 0,
        max: 15000,
        ticks: {
          font: {
            size:9
          },
          stepSize: 2500,
          callback: function (value, index, values) {
            return (value / 1000).toFixed(3) + "k€";
          },
        },
      },
      y1: {
        type: "linear",
        position: "right",
        beginAtZero: true,
        min: 0,
        max: 100,
        ticks: {
          font: {
            size:9
          },
          stepSize: 25,
          callback: function (value) {
            return value + "%";
          },
        },
        grid: {
          drawOnChartArea: false, // Only draw grid lines for primary y-axis
        },
      },
      x: {
        grid: {
          display: false,
        },
        ticks:{
          font: {
            size:9
          },
        }
      },
    },
  },
});
