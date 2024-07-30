var ctx = document.getElementById("myChart-13").getContext("2d");

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
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 65, 50, 80, 65],
      stack: "Stack 0",
      backgroundColor: "#4A2828",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
    },
    {
      label: "Litige materiel manguant",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 25, 30, 30],
      backgroundColor: "#503636",
      stack: "Stack 0",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
    },
    {
      label: "Price dispute",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 45, 60, 50],
      backgroundColor: "#DCE01A",
      stack: "Stack 0",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
    },
    {
      label: "Litige prix",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 30, 40, 40],
      backgroundColor: "#73EB48",
      stack: "Stack 0",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
    },
    {
      label: "Litige administrative",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 20, 30, 30],
      backgroundColor: "#0078BB",
      stack: "Stack 0",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
    },
    {
      label: "Litige Livrasion",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10],
      backgroundColor: "#3AB8FF",
      stack: "Stack 0",
      barPercentage: window.innerWidth < 600 ? 0.5 : 0.8,
    },
    {
      label: "Litige qualite",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 30, 50, 30],
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
      // coustm labels circel or mor3bat //
      labels: {
        usePointStyle: true,
        pointStyle: "circle",
        fontSize: 2,
        boxWidth: 5,
        pointStyleWidth: 10,
        template: {
          maxWidth: 10,
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
        maxWidth: 200,
        // تحديد أقصى زاوية دوران للتسمية
        maxRotation: 360,
        // تحديد أدنى زاوية دوران للتسمية
        minRotation: 0,
        font: {
          size: 12, // حجم الخط
          family: "Arial", // نوع الخط
          weight: "bold", // وزن الخط
          style: "normal", // نمط الخط
          lineHeight: 0.8, // ارتفاع السطر
        },
      },
    },
    y: {
      beginAtZero: true,
      min: 0,
      max: 300,
      ticks: {
        stepSize: 100,
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
