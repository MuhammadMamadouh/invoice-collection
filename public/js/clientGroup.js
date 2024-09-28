function showCreateClientGroupDiv() {
    document.querySelector(".create-group-div").classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function showEditClientGroupDiv(clientGroupId) {
    document.getElementById(`edit-group-div-${clientGroupId}`).classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}

function hideCreateClientGroupDiv() {
    document.querySelector(".create-group-div").classList.add("d-none");
    document.querySelector(".edit-group-div").classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}