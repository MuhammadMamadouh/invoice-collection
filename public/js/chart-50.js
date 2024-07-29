document.addEventListener("DOMContentLoaded", function () {
  var data = {
    labels: [
      "Current",
      "0-15 days",
      "16-30 days",
      "31-60 days",
      "61-120 days",
      "+120 days",
    ],
    datasets: [
      {
        label: "Current",
        data: [8000, 0, 0, 0, 0, 0],
        backgroundColor: "#0080A9",
        barThickness: "flex",
        barPercentage: window.innerWidth < 600 ? 0.5 : 6,
      },
      {
        label: "0-15 days",
        data: [0, 2200, 0, 0, 0, 0],
        backgroundColor: "#FFFF19",
        barThickness: "flex",
        barPercentage: window.innerWidth < 600 ? 0.5 : 6,
      },
      {
        label: "16-30 days",
        data: [0,0, 600, 0, 0,0],
        backgroundColor: "#FFA819",
        barThickness: "flex",
        barPercentage: window.innerWidth < 600 ? 0.5 : 6,
      },
      {
        label: "31-60 days",
        data: [0, 0, 0, 300, 0,0],
        backgroundColor: "#E88EFF",
        barThickness: "flex",
        barPercentage: window.innerWidth < 600 ? 0.5 : 6,
      },
      {
        label: "61-120 days",
        data: [0, 0, 0, 0, 500,0],
        backgroundColor: "#FF0066",
        barThickness: "flex",
        barPercentage: window.innerWidth < 600 ? 0.5 : 6,
      },
      {
        label: "+120 days",
        data: [0, 0, 0, 0,0,150],
        backgroundColor: "#B20000",
        barThickness: "flex",
        barPercentage: window.innerWidth < 600 ? 0.5 : 6,
      },
    ],
  };

  // Chart options
  var options = {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          font: {
            size: 9, // Font size for y-axis labels
          },
          max: 8000,
          stepSize: 2000,
          callback: function (value, index, values) {
            return (value / 1000).toFixed(3) + "k";
          },
        },
      },
      x: {
        grid: {
          display: false,
        },
        ticks: {
          font: {
            size: 9, // Font size for x-axis labels
          },
        },
      },
    },
    plugins: {
      legend: {
        display: true,
        position: "bottom",
        labels: {
          usePointStyle: true,
          pointStyle: "rect",
          fontSize: 2,
          boxWidth: 10,
          pointStyleWidth: 10,
        },
      },
      datalabels: {
        display: false, // Ensure this is set to false to hide data labels
      },
      tooltip: {
        callbacks: {
          label: function (context) {
            return context.dataset.label + ": " + context.formattedValue + " €";
          },
        },
      },
    },
  };

  // Create the chart
  var ctx = document.getElementById("myChart-50").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: data,
    options: options,
  });
});
