// Actions to do

// Get the button element
var actionButton = document.getElementById("actionButton");

// Add event listener for mouseover
actionButton.addEventListener("mouseover", function () {
  // Remove the 'text-secondary' class
  actionButton.classList.remove("text-secondary");
});

// Add event listener for mouseout (optional, to revert the changes when mouse leaves)
actionButton.addEventListener("mouseout", function () {
  // Add the 'text-secondary' class back
  actionButton.classList.add("text-secondary");
});

function toggleRows(button) {
  var rows = document.querySelectorAll(".toggle-row");
  rows.forEach(function (row) {
    row.classList.toggle("d-none");
  });
  var icon = document.getElementById("toggleIconDown");
  if (icon.classList.contains("fa-chevron-down")) {
    icon.classList.toggle("fa-chevron-up");
  } else {
    icon.classList.toggle("fa-chevron-down");
  }
}

function submitValues() {
  var firstRangeValue = document.getElementById("first-range").value;
  var secondRangeValue = document.getElementById("second-range").value;

  document.getElementById("step1").innerHTML = firstRangeValue + "Month";
  document.getElementById("step2").innerHTML = secondRangeValue + "Month";
  document.getElementById("range-submit").classList.remove("d-none");
  // Do something with the selected values, for example:
  console.log("First range value: " + firstRangeValue);
  console.log("Second range value: " + secondRangeValue);
}

function toggleFunction(icon) {
  // Find the parent row of the clicked icon
  const row = icon.parentElement.querySelector(".hidden");
  if (row.classList.contains("d-none")) {
    row.classList.remove("d-none");
  } else {
    row.classList.add("d-none");
  }
  // Toggle the rotation class of the icon
  icon.classList.toggle("rotate");
}

// Add Alert

// Add event listener to the plus icon
function AddFilter() {
  const filterSection = document.getElementById("filterSection");
  const clonedSection = filterSection.cloneNode(true); // Clone the filter section
  filterSection.parentNode.insertBefore(
    clonedSection,
    filterSection.nextSibling
  ); // Insert the cloned section after the original section
}

// Add event listener to the minus icon
function RemoveFilter() {
  const filterSection = document.getElementById("filterSection");
  if (filterSection.parentNode.childElementCount > 1) {
    // Ensure there is more than one section before removing
    filterSection.parentNode.removeChild(filterSection.nextSibling); // Remove the last section
  }
}

function updateSelectedAlert(element) {
  // Get the text from the clicked alert div
  var alertText = element.querySelector("p").innerText;
  // Update the text in the target div
  document.getElementById("selectedAlert").classList.remove("d-none");
  document.getElementById("selectedAlert").querySelector("p").innerText =
    alertText;
}

function exportTableToPDF() {
  // Import the necessary modules from jspdf
  const { jsPDF } = window.jspdf;

  // Create a new jsPDF instance
  const doc = new jsPDF();

  // Get the table HTML element
  const table = document.getElementById("my-table");

  // Add the table to the PDF using autoTable
  doc.autoTable({ html: '#my-table' });

  // Save the generated PDF
  doc.save('table.pdf');
}

