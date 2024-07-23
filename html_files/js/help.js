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