var ctx = document.getElementById("myChart-60").getContext("2d");

var data = {
  labels: [
    "22-1 -> 28-1",
    "",
    "05-2 -> 11-2",
    "",
    "19-02 -> 25-02",
    "",
    "04-03 -> 24-03",
    "",
    "18-03 -> 24-03",
    "",
    "01-0 -> -7-04",
    "",
    "15-04 -> Today",
   ""
  ],
  datasets: [
    {
      label: "Total Receivable",
      data: [
        8000,7000,8500,7000,9000,12000,18000,18000,17000,20000,18200,17000,13500,12000
      ],
      backgroundColor: "#0080A9",
      barThickness: 10,
      borderWidth:1,
      barPercentage:1.10,
      order:2,
    },
    {
      label: "Overdue",
      data: [2500, 3500, 3500, 2500, 2500,3500,4000,2000,2000,3500,2500,3500, 5000, 5000,],
      backgroundColor: "#FFA819",
      barThickness: 10,
      borderWidth:1,
      barPercentage:.30,
      categoryPercentage: 0.9, 
      order:2,
    },
     { 
    label: "Overdue%",
    data: [12000, 12000, 9000, 12000, 12000,10000,11000,10000,11000,10000,11000,10000, 11000, 10000,],
    borderColor:"#B20000",
    pointRadius: 0, // Remove points
    pointHoverRadius: 0 ,// Remove hover effect on points
    fill: false,
    type: "line",
    order:1,
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
    datalabels: {
      display: false // Ensure this is set to false to hide data labels
  }
  },
  scales: {
    y: {
      beginAtZero: true,
      ticks: {
        min: 0,
        max: 20000,
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
      ticks: {
        barPercentage: 0.8,
        categoryPercentage: 0.5, 
      },
      
       },
  },
};

var myChart = new Chart(ctx, {
  type: "bar",
  data: data,
  options: options,
});