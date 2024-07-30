var ctx = document.getElementById("myChart-80").getContext("2d");

var data = {
  labels: [
    "Feb 2024", "", "", "", "", "", "Mar 2024", "", "", "", "", "", "Apr 2024", ""
  ],
  datasets: [
    {
      label: "Overdue%",
      data: [
        58, 42, 42, 37, 22, 
        22, 24, 17, 14.5, 14.5, 
        18, 14.5, 18.5, 33,
      ],
      backgroundColor: [
        "#C9C9C9"
      ],
      barPercentage: window.innerWidth < 600 ? 0.2 : 1.1,
      categoryPercentage: 0.6, // Controls the space between bars
      order:2,
    },
      {
        type: 'line',
        label: "DSO",
        data: [  77, 73,60, 50, 58, 44,50,58, 56,59, 63, 53, 54, 55],
        borderColor: "#030083", // blue
        backgroundColor:"#030083",
        borderWidth: 2,
        fill: false,
        order: 1,
        pointRadius: 0, // Remove points
        pointHoverRadius: 0 // Remove hover effect on points
      },
      {
        type: 'line',
        label: "Overdue DSO",
        data: [57, 42, 30, 28, 17,18, 19, 12, 8, 10,12, 10, 16, 19],
        borderColor: "#FF2D11", // Red
        backgroundColor:"#FF2D11",
        borderWidth: 2,
        fill: false,
        order: 1,
        pointRadius: 0, // Remove points
        pointHoverRadius: 0 // Remove hover effect on points
      },
      {
        type: 'line',
        label: "Current DSO",
        data: [22, 38, 23, 32, 31,37, 40, 43, 45, 48,50, 40, 35, 30],
        borderColor: "#27ADC6", // skyblue
        backgroundColor:"#27ADC6",
        borderWidth: 2,
        fill: false,
        order: 1,
        pointRadius: 0, // Remove points
        pointHoverRadius: 0 // Remove hover effect on points
      },
  ]
};

var options = {
  responsive: true,
  maintainAspectRatio: false,
  plugins: {
    legend: {
      display: true,
      position:"bottom"
    },
    datalabels: {
      display: false // Ensure this is set to false to hide data labels
  }
  },
  scales: {
    y: {
      beginAtZero: true,
      min: 0,
      max: 80,
      ticks: {
        stepSize: 20,
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