let onMouseShow = document.querySelectorAll(".onmouse");
onMouseShow.forEach((show) => {
  show.addEventListener("mouseenter", function () {
    show.nextElementSibling.style.display = "block";
  });
});

onMouseShow.forEach((show) => {
  show.addEventListener("mouseleave", function () {
    show.nextElementSibling.style.display = "none";
  });
});

let onMouseShow2 = document.querySelectorAll(".onmouse-2");

onMouseShow2.forEach((show) => {
  show.addEventListener("mouseenter", function () {
    show.nextElementSibling.style.display = "block";
  });
});
onMouseShow2.forEach((show) => {
  show.addEventListener("mouseleave", function () {
    show.nextElementSibling.style.display = "none";
  });
});
