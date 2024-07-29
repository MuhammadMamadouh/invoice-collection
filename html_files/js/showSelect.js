function enableSelectsBasedOnFirstSelect(firstSelectId, secondSelectId, thirdSelectId) {
    const firstSelect = document.getElementById(firstSelectId);
    const secondSelect = document.getElementById(secondSelectId);
    const thirdSelect = document.getElementById(thirdSelectId);

    firstSelect.addEventListener('change', function() {
        const isEnabled = firstSelect.value !== "";
        secondSelect.disabled = !isEnabled;
        thirdSelect.disabled = !isEnabled;
    });
}

document.addEventListener('DOMContentLoaded', function() {
    enableSelectsBasedOnFirstSelect('firstSelect', 'secondSelect', 'thirdSelect');
});



let search = document.querySelector(".m-groups")
let AdvancedSearch = document.querySelector(".advanced-search")
function showAdvancedSearch(){
    search.classList.add("d-none")
    AdvancedSearch.classList.remove("d-none")
}

function hideAdvancedSearch(){
    search.classList.remove("d-none")
    AdvancedSearch.classList.add("d-none")
}