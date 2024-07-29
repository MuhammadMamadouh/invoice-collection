var ctx = document.getElementById("myChart").getContext("2d");

var data = {
  labels: ["Jan 2024", "Feb 2024", "Mar 2024"],
  datasets: [
    {
      label: "Overdue%",
      data: [30, 13, 8],
      backgroundColor: ["#C9C9C9"],
      barPercentage: window.innerWidth < 600 ? 0.2 : 1.1,
      categoryPercentage: 0.6, // Controls the space between bars
      order: 2,
    },
    {
      type: "line",
      label: "DSO",
      data: [55, 51, 51],
      backgroundColor: "#030083",
      borderColor: "#030083", // blue
      borderWidth: 2,
      fill: false,
      order: 1,
      pointRadius: 0, // Remove points
      pointHoverRadius: 0, // Remove hover effect on points
    },
    {
      type: "line",
      label: "Overdue DSO",
      data: [29, 41, 43],
      backgroundColor: "#FF2D11",
      borderColor: "#FF2D11",
      borderWidth: 2,
      fill: false,
      order: 1,
      pointRadius: 0, // Remove points
      pointHoverRadius: 0, // Remove hover effect on points
    },
    {
      type: "line",
      label: "current DSO",
      data: [29, 10, 7],
      backgroundColor: "#27ADC6",
      borderColor: "#27ADC6", // Red
      borderWidth: 2,
      fill: false,
      order: 1,
      pointRadius: 0, // Remove points
      pointHoverRadius: 0, // Remove hover effect on points
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
  },
  scales: {
    y: {
      beginAtZero: true,
      min: 0,
      max: 60,
      ticks: {
        stepSize: 10,
        callback: function (value) {
          return value + "D";
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
