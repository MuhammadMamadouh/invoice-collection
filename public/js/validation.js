let tabOne = document.getElementById("tabOne");
let tabTwo = document.getElementById("tabTwo");
let tabThree = document.getElementById("tabThree");
let activeOne = document.getElementById("activeOne");
let activeTwo = document.getElementById("activeTwo");
let activeThree = document.getElementById("activeThree");
function tableOne() {
  activeOne.classList.add("scenarios-active");
  activeTwo.classList.remove("scenarios-active");
  activeThree.classList.remove("scenarios-active");
  tabOne.classList.remove("d-none");
  tabTwo.classList.add("d-none");
  tabThree.classList.add("d-none");
}
function tableTwo() {
  activeOne.classList.remove("scenarios-active");
  activeTwo.classList.add("scenarios-active");
  activeThree.classList.remove("scenarios-active");
  tabOne.classList.add("d-none");
  tabTwo.classList.remove("d-none");
  tabThree.classList.add("d-none");
}
function tableThree() {
  activeOne.classList.remove("scenarios-active");
  activeTwo.classList.remove("scenarios-active");
  activeThree.classList.add("scenarios-active");
  tabOne.classList.add("d-none");
  tabTwo.classList.add("d-none");
  tabThree.classList.remove("d-none");
}
