// settings-manage-validation
function showAddLevelDiv() {
    document.querySelector(".add-level-div").classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function showEditLevelDiv(limitId) {
    document.getElementById(`edit-level-div-${limitId}`).classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}

function hideEditLevelDiv(limitId) {
    document.getElementById(`edit-level-div-${limitId}`).classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}
function hideAddLevelDiv() {
    document.querySelector(".add-level-div").classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}