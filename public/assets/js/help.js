function toggleActive(clickedBtn, sectionId) {
    // Remove active classes from all buttons
    const buttons = document.querySelectorAll('.my-btns');
    buttons.forEach(button => {
        button.classList.remove('btn-light', 'border', 'border-bottom-0');
    });

    // Add active classes to the clicked button
    clickedBtn.classList.add('btn-light', 'border', 'border-bottom-0');

    // Hide all sections
    const sections = document.querySelectorAll('.my-sections');
    sections.forEach(section => {
        section.style.display = 'none';
    });

    // Show the corresponding section
    const sectionToShow = document.getElementById(sectionId);
    if (sectionToShow) {
        sectionToShow.style.display = 'block';
    }
}

function showContact(){
    document.querySelector(".overlay").classList.remove("d-none")
    document.querySelector(".contact-details").classList.remove("d-none")
  }
  
  function closeContact(){
    document.querySelector(".overlay").classList.add("d-none")
    document.querySelector(".contact-details").classList.add("d-none")
  }

  function showSetts(){
        document.getElementById("myModal").style.display="block"
  }
  function closeSetts(){
        document.getElementById("myModal").style.display="none"
  }

  function setProgress(progress, elementId) {
    const circle = document.querySelector(`#${elementId} .circle`);
    const value = document.querySelector(`#${elementId} .progress-value`);
    const radius = circle.r.baseVal.value;
    const circumference = radius * 2 * Math.PI;
    const offset = circumference - (progress / 100) * circumference;
    circle.style.strokeDasharray = circumference;
    circle.style.strokeDashoffset = offset;
    value.textContent = `${progress}%`;
  }

   // Set progress for each circle
   setProgress(0, 'progress-circle-1');
   setProgress(7, 'progress-circle-2');
   setProgress(1, 'progress-circle-3');
   setProgress(86, 'progress-circle-4');