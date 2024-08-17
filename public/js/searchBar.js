// جلب العناصر
const searchIcon = document.getElementById("search-icon");
const searchContainer = document.getElementById("search-container");

// عرض وإخفاء الdiv عند الضغط على الأيقونة
searchIcon.addEventListener("click", (e) => {
    e.stopPropagation(); // منع انتشار الحدث لإبقاء الdiv مفتوحًا
    searchContainer.style.display =
        searchContainer.style.display === "block" ? "none" : "block";
});

// إخفاء الdiv عند الضغط في أي مكان آخر في الصفحة
document.addEventListener("click", (e) => {
    if (
        !searchContainer.contains(e.target) &&
        searchContainer.style.display === "block"
    ) {
        searchContainer.style.display = "none";
    }
});

// منع إغلاق الdiv عند الضغط داخله
searchContainer.addEventListener("click", (e) => {
    e.stopPropagation();
});
let showTxt = document.getElementById("aning-mouse");
let leaveMouse = document.getElementById("show");
let showTxt2 = document.getElementById("aning-mouse-2");
let leaveMouse2 = document.getElementById("show-2");
leaveMouse2.style.display = "none";
leaveMouse.style.display = "none";
showTxt.addEventListener("mouseenter", function () {
    leaveMouse.style.display = "block";
});
showTxt.addEventListener("mouseleave", function () {
    leaveMouse.style.display = "none";
});
showTxt2.addEventListener("mouseenter", function () {
    leaveMouse2.style.display = "block";
});
showTxt2.addEventListener("mouseleave", function () {
    leaveMouse2.style.display = "none";
});

// show table at settings-import-export-data

function showTable() {
    document.querySelector(".this-tabels").classList.remove("d-none");
}




// settings-manage-validation
function showAddLevelDiv() {
    document.querySelector(".add-level-div").classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function showEditLevelDiv() {
    document.querySelector(".edit-level-div").classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function hideAddLevelDiv() {
    document.querySelector(".add-level-div").classList.add("d-none");
    document.querySelector(".edit-level-div").classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}


// settings-manage-item-status
function showNewStatusDiv() {
    document.querySelector(".new-status-div").classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function showEditStatusDiv() {
    document.querySelector(".edit-status-div").classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function hideNewStatusDiv() {
    document.querySelector(".new-status-div").classList.add("d-none");
    document.querySelector(".edit-status-div").classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}

// settings-manage-item-status
function showCreateGroupDiv() {
    document.querySelector(".create-group-div").classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function showEditGroupDiv() {
    document.querySelector(".edit-group-div").classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function hideCreateGroupDiv() {
    document.querySelector(".create-group-div").classList.add("d-none");
    document.querySelector(".edit-group-div").classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}

// settings-manage-collection-scenario
function showCreateAction(collectionId) {
    document.getElementById(`create-group-div-${collectionId}`).classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}

function showEditGroupDiv(collectionId) {
    document.getElementById(`edit-group-div-${collectionId}`).classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}

function hideCreateAction(collectionId) {
    document.getElementById(`create-group-div-${collectionId}`).classList.add("d-none");
    document.getElementById(`edit-group-div-${collectionId}`).classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}


// settings-manage-users-account
function showAddUserDiv() {
    document.querySelector(".add-user-div").classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function hideAddUserDiv() {
    document.querySelector(".add-user-div").classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}
function showEditUserDiv(userId) {
    document.getElementById(`edit-user-div-${userId}`).classList.remove("d-none");
    document.querySelector(".overlay").classList.remove("d-none");
}
function hideEditUserDiv(userId){
    document.getElementById(`edit-user-div-${userId}`).classList.add("d-none");
    document.querySelector(".overlay").classList.add("d-none");
}

