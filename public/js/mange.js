let secOne = document.getElementById("sec-1");
let secTwo = document.getElementById("sec-2");
let secThree = document.getElementById("sec-3");

let btnOne = document.getElementById("btnone");
let btnTwo = document.getElementById("btntwo");
let btnThree = document.getElementById("btnthree");


function secOneOpeen() {
   secOne.classList.remove("d-none")
   secTwo.classList.add("d-none")
   secThree.classList.add("d-none")
   btnOne.classList.add("scenarios-active");
   btnTwo.classList.remove("scenarios-active");
   btnThree.classList.remove("scenarios-active");
};
function secTwoOpeen() {
   secTwo.classList.remove("d-none")
   secOne.classList.add("d-none")
   secThree.classList.add("d-none")
   btnOne.classList.remove("scenarios-active");
   btnTwo.classList.add("scenarios-active");
   btnThree.classList.remove("scenarios-active");
}

function secThreeOpeen() {
   secThree.classList.remove("d-none")
   secOne.classList.add("d-none")
   secTwo.classList.add("d-none")
   btnThree.classList.add("scenarios-active");
   btnOne.classList.remove("scenarios-active");
   btnTwo.classList.remove("scenarios-active");
}