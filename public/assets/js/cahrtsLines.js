var ctx = document.getElementById("charts-lines").getContext("2d");

var data = {
  labels: [
    "",
    "01-29 → 02-04",
    "",
    "02-26 → 03-03",
    "",
    "04-22 → 04-28",
    "",
    "05-20 → 05-26",
    "",
    "06-17 → 06-23",
    "",
    "07-15 → Today",
    "",
    
  ],
  datasets: [
    {
      type: "line",
      label: "Très bon payeur / Very good payer",
      data: [
        10, 60, 110, 160, 210, 260, 310, 360, 410, 460, 510, 560, 610, 660, 710,
        760,
      ],
      borderColor: "#20c997", // green
      backgroundColor: "#20c997",
      borderWidth: 2,
      fill: false,
      order: 1,
      pointRadius: 0, // Remove points
      pointHoverRadius: 0, // Remove hover effect on points
    },
    {
      type: "line",
      label: "Bon payeur / Good payer",
      data: [
        40, 90, 140, 190, 240, 290, 340, 390, 440, 490, 540, 590, 640, 690, 740,
        790,
      ],
      borderColor: "#198754", // open green color
      backgroundColor: "#198754",
      borderWidth: 2,
      fill: false,
      order: 1,
      pointRadius: 0, // Remove points
      pointHoverRadius: 0, // Remove hover effect on points
    },
    {
      type: "line",
      label: "Payeur correct / Average payer",
      data: [
        70, 120, 170, 220, 270, 320, 370, 420, 470, 520, 570, 620, 670, 720,
        760, 820,
      ],
      borderColor: "#ffc107", // gold color
      backgroundColor: "#ffc107",
      borderWidth: 2,
      fill: false,
      order: 1,
      pointRadius: 0, // Remove points
      pointHoverRadius: 0, // Remove hover effect on points
    },
    {
      type: "line",
      label: "Mauvais payeur / Bad payer",
      data: [
        100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750,
        800, 850, 0,
      ],
      borderColor: "#ffc107", // Orange color
      backgroundColor: "#ffc107",
      borderWidth: 2,
      fill: false,
      order: 1,
      pointRadius: 0, // Remove points
      pointHoverRadius: 0, // Remove hover effect on points
    },
    {
      type: "line",
      label: "Très mauvais payeur / Very bad payer",
      data: [
        130, 180, 230, 280, 330, 380, 430, 480, 530, 580, 630, 680, 730, 780,
        830, 880,
      ],
      borderColor: "#dc3545", // skyblue
      backgroundColor: "#dc3545",
      borderWidth: 2,
      fill: false,
      order: 1,
      pointRadius: 0, // Remove points
      pointHoverRadius: 0, // Remove hover effect on points
    },
    {
      type: "line",
      label: "Retards inadmissibles / Unacceptable delays",
      data: [
        160, 210, 260, 310, 360, 410, 460, 510, 560, 610, 660, 710, 760, 810,
        860, 910,
      ],
      borderColor: "#212529", // skyblue
      backgroundColor: "#212529",
      borderWidth: 2,
      fill: false,
      order: 1,
      pointRadius: 0, // Remove points
      pointHoverRadius: 0, // Remove hover effect on points
    },
    {
      type: "line",
      label: "Undetermined",
      data: [
        190, 240, 290, 340, 390, 440, 490, 540, 590, 640, 690, 740, 790, 840,
        890, 940,
      ],
      borderColor: "#6c757d", // skyblue
      backgroundColor: "#6c757d",
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
      labels: {
        usePointStyle: true,
        pointStyle: "line",
        boxWidth: 10,
        padding: 15, // مسافة بين التسمية والمربع
        textAlign: "center", // محاذاة التسمية لتكون في المنتصف
        font: {
          size: 9, // حجم الخط للتسميات
        },
      },
    },
    datalabels: {
      display: false, // تأكد من أن هذا مضبوط على false لإخفاء التسميات البيانية
    },
  },
  scales: {
    y: {
      beginAtZero: true,
      min: 0,
      max: 1500,
      ticks: {
        stepSize: 500,
        callback: function (value, index, values) {
          return value / 1 + "";
        },
        font: {
          size: 12.5, // حجم الخط لمحور y
        },
      },
    },
    x: {
      grid: {
        display: false,
      },
      ticks: {
        autoSkip: false,
        maxWidth: 100,
        maxRotation: 0,
        font: {
          size: 12, // حجم الخط لمحور x
        },
      },
    },
  },
};

var myChart = new Chart(ctx, {
  type: "line",
  data: data,
  options: options,
});
