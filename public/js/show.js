let showLess = document.getElementById("showless");
let showMores = document.getElementById("showMore")
let showMoreButton = document.getElementById("showMoreButton");
let showLessButton = document.getElementById("showLessButton");
// showLess.style.display = "none";
 function showLessFun() {
    console.log(2);
    showLess.classList.add("d-none")
    showMoreButton.classList.remove("d-none")
};
function showMoreFun() {
    console.log(21);
    showMoreButton.classList.add("d-none")
    showLess.classList.remove("d-none")
}