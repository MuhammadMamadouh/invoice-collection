// settings-manage-risk
function showNewScoringDiv() {
    document.querySelector(".new-scoring-div").classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function hideNewScoringDiv() {
    document.querySelector(".new-scoring-div").classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}


function showEditScoringDiv(scoreId) {
    document.getElementById(`new-scoring-div-${scoreId}`).classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function hideEditScoringDiv(scoreId) {
    document.getElementById(`new-scoring-div-${scoreId}`).classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}


function showAddCriterionDiv(scoreId) {
    document.getElementById(`add-criterion-div-${scoreId}`).classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}

function hideAddScoringDiv(scoreId) {
    document.getElementById(`add-criterion-div-${scoreId}`).classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}

function showEditCriterionDiv(criteriaId) {
    document.getElementById(`edit-criterion-div-${criteriaId}`).classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function hideEditCriterionDiv(criteriaId) {
    document.getElementById(`edit-criterion-div-${criteriaId}`).classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}

// function hideNewScoringDiv() {
//     document.querySelector(".new-scoring-div").classList.add("d-none");
//     document.querySelector(".add-criterion-div").classList.add("d-none");
//     document.querySelector(".edit-criterion-div").classList.add("d-none");
//     document.querySelector(".overlay").classList.add("d-none");
// }