let secOne = document.getElementById("sec-1");
let secTwo = document.getElementById("sec-2");
let btnOne = document.getElementById("btnone");
let btnTwo = document.getElementById("btntwo");

function secOneOpeen() {
   secOne.classList.remove("d-none")
   secTwo.classList.add("d-none")
   btnOne.classList.add("scenarios-active");
   btnTwo.classList.remove("scenarios-active");
};
function secTwoOpeen() {
    secTwo.classList.remove("d-none")
    secOne.classList.add("d-none")
    btnOne.classList.remove("scenarios-active");
    btnTwo.classList.add("scenarios-active");
 }