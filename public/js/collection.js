
let showItemButton = document.getElementById("show-items-button");
let showItemContent = document.getElementById("item-contents");
let isClick = true;
showItemContent.style.display = "none";
showItemButton.onclick = function () {
  if (isClick) {
    showItemContent.style.display = "block";
    isClick = false;
  } else {
    showItemContent.style.display = "none";
    isClick = true;
  }
};

let changeImgs = document.getElementById("changeimgs");
const inptChange = document.getElementById("inpchange");
inptChange.addEventListener("change", () => {
  changeImgs.src = URL.createObjectURL(inptChange.files[0]);
});

let scoreButton = document.getElementById("score-button");
let showScore = document.getElementById("show-score");
showScore.style.display = "none";
scoreButton.addEventListener("click", () => {
  scoreButton.style.display = "none";
  showScore.style.display = "block";
});
let scoreButton2 = document.getElementById("score-button-2");
let showScore2 = document.getElementById("show-score-2");
showScore2.style.display = "none";
scoreButton2.addEventListener("click", () => {
  scoreButton2.style.display = "none";
  showScore2.style.display = "block";
});

// function showHolap() {
//   document.querySelector(".overlay").classList.remove("d-none");
//   document.querySelector(".company-details").classList.remove("d-none");
// }

// function closeHolap() {
//   document.querySelector(".overlay").classList.add("d-none");
//   document.querySelector(".company-details").classList.add("d-none");
// }
// function EditHolap() {
//   document.querySelector(".holap-first").classList.add("d-none");
//   document.querySelector(".holap-second").classList.remove("d-none");
// }

// function closeEditHolap() {
//   document.querySelector(".holap-first").classList.remove("d-none");
//   document.querySelector(".holap-second").classList.add("d-none");
// }

let hideTable = document.querySelector(".collection-table");
let showHistory = document.getElementById("page-not-found");
let hideTable2 = document.getElementById("history-table");
let historyBtn1 = document.getElementById("show-table-one");
let historyBtn2 = document.getElementById("show-table-one-2");
let historyBtn3 = document.getElementById("show-history");

function fun1() {
  hideTable.classList.remove("d-none");
  showHistory.classList.add("d-none");
  hideTable2.classList.add("d-none");
  historyBtn1.classList.remove("btn-outline-primary");
  historyBtn1.classList.add("btn-primary");
  historyBtn2.classList.remove("btn-primary");
  historyBtn2.classList.add("btn-outline-primary");
  historyBtn3.classList.remove("btn-primary");
  historyBtn3.classList.add("btn-outline-primary");
}
function fun2() {
  hideTable.classList.add("d-none");
  showHistory.classList.remove("d-none");
  hideTable2.classList.add("d-none");
  historyBtn1.classList.remove("btn-primary");
  historyBtn1.classList.add("btn-outline-primary");
  historyBtn2.classList.remove("btn-outline-primary");
  historyBtn2.classList.add("btn-primary");
  historyBtn3.classList.remove("btn-primary");
  historyBtn3.classList.add("btn-outline-primary");
}
function fun3() {
  hideTable.classList.add("d-none");
  showHistory.classList.add("d-none");
  hideTable2.classList.remove("d-none");
  historyBtn1.classList.remove("btn-primary");
  historyBtn1.classList.add("btn-outline-primary");
  historyBtn2.classList.remove("btn-primary");
  historyBtn2.classList.add("btn-outline-primary");
  historyBtn3.classList.remove("btn-outline-primary");
  historyBtn3.classList.add("btn-primary");
}

let disputeButton = document.querySelectorAll(".disputeButton");
let riskButton = document.querySelectorAll(".riskButton");
let indicatorsButton = document.querySelectorAll(".indicatorsButton");
let historyButton = document.querySelectorAll(".historyButton");
let disputeDiv = document.getElementById("disputeDiv");
let riskDiv = document.getElementById("riskDiv");
let indicatorsDiv = document.getElementById("indicatorsDiv");
let historyDiv = document.getElementById("historyDiv");

function disputeFun() {
  disputeButton.forEach((btn) => {
    btn.classList.remove("btn-outline-primary");
    btn.classList.add("btn-primary");
  });
  riskButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  indicatorsButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  historyButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  disputeDiv.classList.remove("d-none");
  riskDiv.classList.add("d-none");
  indicatorsDiv.classList.add("d-none");
  historyDiv.classList.add("d-none");
}
function riskFun() {
  disputeButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  riskButton.forEach((btn) => {
    btn.classList.remove("btn-outline-primary");
    btn.classList.add("btn-primary");
  });
  indicatorsButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  historyButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });

  disputeDiv.classList.add("d-none");
  riskDiv.classList.remove("d-none");
  indicatorsDiv.classList.add("d-none");
  historyDiv.classList.add("d-none");
}
function indicatorsFun() {
  disputeButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  riskButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  indicatorsButton.forEach((btn) => {
    btn.classList.remove("btn-outline-primary");
    btn.classList.add("btn-primary");
  });
  historyButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });

  disputeDiv.classList.add("d-none");
  riskDiv.classList.add("d-none");
  indicatorsDiv.classList.remove("d-none");
  historyDiv.classList.add("d-none");
}
function historyFun() {
  disputeButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  riskButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  indicatorsButton.forEach((btn) => {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  historyButton.forEach((btn) => {
    btn.classList.remove("btn-outline-primary");
    btn.classList.add("btn-primary");
  });

  disputeDiv.classList.add("d-none");
  riskDiv.classList.add("d-none");
  indicatorsDiv.classList.add("d-none");
  historyDiv.classList.remove("d-none");
}

let collectionCharts1 = document.querySelector(".collection-charts-1");
let collectionCharts2 = document.querySelector(".collection-charts-2");
let collectionCharts3 = document.querySelector(".collection-charts-3");

function showCharts1() {
  collectionCharts1.classList.remove("d-none");
  collectionCharts2.classList.add("d-none");
  collectionCharts3.classList.add("d-none");
}
function showCharts2() {
  collectionCharts1.classList.add("d-none");
  collectionCharts2.classList.remove("d-none");
  collectionCharts3.classList.add("d-none");
}
function showCharts3() {
  collectionCharts1.classList.add("d-none");
  collectionCharts2.classList.add("d-none");
  collectionCharts3.classList.remove("d-none");
}



function addFileFunction(){
  if(document.querySelector(".myBtn").classList.contains("d-none")){
    document.querySelector(".myBtn").classList.remove("d-none")
  }
  
  
  let addFileDiv=document.querySelector(".addFileDiv")
  let myChild;
  myChild =
  `
  <div class="d-flex justify-content-between flex-wrap align-items-center mb-3">
  <input requiered name="files[]" type="file" id="upload-image-input" multiple />
  <input type="text" class="form-control mt-2 w-auto">
  <div class="form-check mt-2">
  <input class="form-check-input" type="checkbox" id="internal">
  <label class="form-check-label" for="internal">Visible in internal emails</label>
  </div>
  <div class="form-check mt-2">
  <input class="form-check-input" type="checkbox" id="external">
  <label class="form-check-label" for="external">Visible in external emails </label>
  </div>
  </div>
  `
  addFileDiv.innerHTML+=myChild;
  document.getElementById('upload-image-input').click()
}

function addFileFunction2(){
  let addFileDiv=document.querySelector(".addFileDiv-2")
  let myChild;
  myChild =
  `
  <div class="d-flex justify-content-between flex-wrap align-items-center mb-3">
  <input requiered name="file" type="file" id="upload-image-input2" multiple />
  <input type="text" class="form-control w-auto">
  <div class="form-check">
  <input class="form-check-input" type="radio" id="internal" name="visible_in" value="1">
  <label class="form-check-label" for="internal">Visible in internal emails</label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" id="external" name="visible_in" value="0">
  <label class="form-check-label" for="external">Visible in external emails </label>
  </div>
  </div>
  `
  addFileDiv.innerHTML+=myChild;
  document.getElementById('upload-image-input2').click()
}




let statusButton = document.querySelectorAll(".statusButton");
let actionsButton = document.querySelectorAll(".actionsButton");
let associatedButton = document.querySelectorAll(".associatedButton");
let statusDiv = document.getElementById("statusDiv");
let actionsDiv = document.getElementById("actionsDiv");
let associatedDiv = document.getElementById("associatedDiv");

function statusFun() {
  statusButton.forEach((btn)=>{
    btn.classList.remove("btn-outline-primary");
    btn.classList.add("btn-primary");
  })
  actionsButton.forEach((btn)=>{
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  })
  associatedButton.forEach((btn)=>{
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  })
  statusDiv.classList.remove("d-none");
  actionsDiv.classList.add("d-none");
  associatedDiv.classList.add("d-none");
};

function actionsFun() {
  statusButton.forEach((btn)=>{
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  })
  actionsButton.forEach((btn)=>{
    btn.classList.remove("btn-outline-primary");
    btn.classList.add("btn-primary");
  })
  associatedButton.forEach((btn)=>{
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  })

  statusDiv.classList.add("d-none");
  actionsDiv.classList.remove("d-none");
  associatedDiv.classList.add("d-none");
};
function associatedFun() {
  statusButton.forEach((btn)=>{
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  })
  actionsButton.forEach((btn)=>{
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  })
  associatedButton.forEach((btn)=>{
    btn.classList.remove("btn-outline-primary");
    btn.classList.add("btn-primary");
  })

  statusDiv.classList.add("d-none");
  actionsDiv.classList.add("d-none");
  associatedDiv.classList.remove("d-none");
};




function showInvioce2(itemId){
  document.getElementById(`invoice-2-${itemId}`).classList.remove("d-none");
  // document.querySelector(".invoice").classList.add("d-none");
}

function closeInvoice2() {
  // document.querySelector(".overlay").classList.add("d-none");
  document.querySelector(".invoice-2").classList.add("d-none");
}

let stepOne= document.querySelector(".step-1")
let stepTwo= document.querySelector(".step-2")
let stepThree= document.querySelector(".step-3")
function showStepOne(){
  stepOne.classList.remove("d-none")
  stepTwo.classList.add("d-none")
  stepThree.classList.add("d-none")
}

function showStepTwo(){
  console.log(stepOne);
  console.log(stepTwo);
  console.log(stepThree);
  stepOne.classList.add("d-none")
  stepTwo.classList.remove("d-none")
  stepThree.classList.add("d-none")
}

function showStepThree(){
  stepOne.classList.add("d-none")
  stepTwo.classList.add("d-none")
  stepThree.classList.remove("d-none")
}


let hideHoalp = document.getElementById("hide-hoalp");
function show_popup() {
  hideHoalp.classList.add("d-none");
  document.querySelector(".overlay").classList.add("d-none");
}

let showNewHolab = document.querySelectorAll(".show-new-holap");
showNewHolab.forEach((newHo) => {
  newHo.addEventListener("click", () => {
    hideHoalp.classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
  });
});

document.getElementById("addinputs").addEventListener("click", function () {
  var container = document.getElementById("recipientContainer");
  var newInputRow = document.createElement("div");
  newInputRow.className = "row recipient-input";

  var select1 = document.createElement("div");
  select1.className = "col-lg-2";
  select1.innerHTML += `
  <select class="form-select" aria-label="Default select example">
  <option selected>CC:</option>
  <option value="1">BB:</option>
  <option value="2">DD:</option>
</select>
  `;

  var select2 = document.createElement("div");
  select2.className = "col-lg-10";
  select2.innerHTML += `
  <select class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="0"></option>
  <option class="blue-colors-value" value="1">vero Migust< veronique.miguest@demossoultions.com > (Role:credit Manger )  </option>
  <option class="blue-colors-value" value="2">vero Migust< veronique.miguest@demossoultions.com > (Role:credit Manger )  </option>
  <option class="gren-colors-value" value="3">vero Migust< veronique.miguest@demossoultions.com > (Role:credit Manger )  </option>
  <option class="gren-colors-value" value="4">vero Migust< veronique.miguest@demossoultions.com > (Role:credit Manger )  </option>
  <option class="gren-colors-value" value="5">vero Migust< veronique.miguest@demossoultions.com > (Role:credit Manger )  </option>
  <option class="gren-colors-value" value="6">vero Migust< veronique.miguest@demossoultions.com > (Role:credit Manger )  </option>
  <option class="gren-colors-value" value="7">vero Migust< veronique.miguest@demossoultions.com > (Role:credit Manger )  </option>
  <option class="gren-colors-value" value="8">vero Migust< veronique.miguest@demossoultions.com > (Role:credit Manger )  </option>

</select>
  `;

  newInputRow.appendChild(select1);
  newInputRow.appendChild(select2);
  container.appendChild(newInputRow);
});
document.getElementById("addinputs-2").addEventListener("click", function () {
  var container = document.getElementById("recipientContainer-2");
  var newInputRow = document.createElement("div");
  newInputRow.className = "row recipient-input";

  var select1 = document.createElement("div");
  select1.className = "col-lg-2 mt-2 mb-2";
  select1.innerHTML += `
  <select class="form-select w-100" aria-label="Default select example">
  <option selected>CC:</option>
  <option value="1">BB:</option>
  <option value="2">DD:</option>
</select>
  `;

  var select2 = document.createElement("div");
  select2.className = "col-lg-10 mt-2 mb-2";
  select2.innerHTML += `
  <form>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@">
  </div>
  </form>
  `;

  newInputRow.appendChild(select1);
  newInputRow.appendChild(select2);
  container.appendChild(newInputRow);
});
$(document).ready(function() {
  

  // You can now call these functions from within this scope.
  // For example:
  // showHollabTwo();
  // showHollab();
});






function associateFiles(){
    document.querySelector(".associate-files").classList.remove("d-none")
    document.querySelector(".overlay-2").classList.remove("d-none")
}
function hideAssociateFiles(){
    document.querySelector(".associate-files").classList.add("d-none")
    document.querySelector(".overlay-2").classList.add("d-none")
    document.querySelector(".pay-via-direct-link").classList.add("d-none")
}
function payViaDirectLink(){
    document.querySelector(".pay-via-direct-link").classList.remove("d-none")
    document.querySelector(".overlay-2").classList.remove("d-none")
}

function editAuther(){
  document.querySelector(".edit-auther").classList.remove("d-none")
}
function closeEditAuther(){
  document.querySelector(".edit-auther").classList.add("d-none")
}


function showFirstCreditLimit(){
  document.querySelector(".credit-limit-first-section").classList.remove("d-none")
  document.querySelector(".credit-limit-second-section").classList.add("d-none")
}
function showSecondCreditLimit(){
  document.querySelector(".credit-limit-first-section").classList.add("d-none")
  document.querySelector(".credit-limit-second-section").classList.remove("d-none")
}

let updateBtn= document.querySelector(".thebtn-1")
function showCalender() {
  let calenderDiv = document.querySelector(".calender-div");
  console.log(calenderDiv);
  calenderDiv.classList.remove("d-none");

  // Add event listener to hide the calendar when clicking outside
  document.addEventListener("click", function hideCalender(event) {
    // Check if the clicked element is outside the calenderDiv
    if (!calenderDiv.contains(event.target) && event.target !== document.querySelector(".thebtn-1")) {
      calenderDiv.classList.add("d-none");
      document.removeEventListener("click", hideCalender); // Remove the event listener after hiding
    }
  });
}

document.querySelector(".thebtn-1").addEventListener("click", function(event) {
  event.stopPropagation(); // Prevent the click from propagating to the document
  showCalender();
});

function hideCompleteAction(){
  document.querySelector(".overlay").classList.add("d-none")
  document.querySelector(".complete-action-div").classList.add("d-none")
}
function showCompleteAction(){
  document.querySelector(".complete-action-div").classList.remove("d-none")
  document.querySelector(".overlay").classList.remove("d-none")
}

function hideGroupCollection(){
  document.querySelector(".overlay").classList.add("d-none")
  document.querySelector(".group-collection").classList.add("d-none")
}
function showGroupCollection(){
  document.querySelector(".group-collection").classList.remove("d-none")
  document.querySelector(".overlay").classList.remove("d-none")
}

function showSearchResults(){
  document.querySelector('.search-results').classList.remove('d-none')
  document.querySelector('.mySaveBtn').classList.remove('d-none')
}


  function hideEditAssignment(){
    document.querySelector(".overlay").classList.add("d-none")
    document.querySelector(".edit-assignment").classList.add("d-none")
    document.querySelector(".add-assignment").classList.add("d-none")
  }
  function showEditAssignment(){
    document.querySelector(".edit-assignment").classList.remove("d-none")
    document.querySelector(".overlay").classList.remove("d-none")
  }
  
  function showAddAssignment(){
    document.querySelector(".add-assignment").classList.remove("d-none")
    document.querySelector(".overlay").classList.remove("d-none")
  }

  function showAddActionDiv(){
    document.querySelector(".add-action-div").classList.remove("d-none")
    document.querySelector(".overlay").classList.remove("d-none")
  }
  
  function hideAddActionDiv(){
    document.querySelector(".add-action-div").classList.add("d-none")
    document.querySelector(".overlay").classList.add("d-none")
    document.querySelector(".new-collection-scenario").classList.add("d-none")
  }
  
  
  function showNewCollectionDiv(){
    document.querySelector(".new-collection-scenario").classList.remove("d-none")
    document.querySelector(".overlay").classList.remove("d-none")
  }


  function hidePaymentProfile(){
    document.querySelector(".overlay").classList.add("d-none")
    document.querySelector(".payment-profile").classList.add("d-none")
  }
  
  
  function showPaymentProfile(){
    document.querySelector(".payment-profile").classList.remove("d-none")
    document.querySelector(".overlay").classList.remove("d-none")
  }
