let clientDate = []

function showHolap(clientId) {
    document
        .getElementById(`company-detail-${clientId}`)
        .classList.remove("d-none");

    //     fetch("http://127.0.0.1:8000/clients/client_data/", clientId)
    // .then((response) => {
    //     if (!response.ok) {
    //         throw new Error(
    //             "Network response was not ok " + response.statusText
    //         );
    //     }
    //     return response.json();
    // })
    // .then((data) => {
    //     console.log(data);
    //     clientDate.push(data)
    // })
    // .catch((error) => {
    //     console.error(
    //         "There has been a problem with your fetch operation:",
    //         error
    //     );
    // });
}

function closeHolap(clientId) {
    document
        .getElementById(`company-detail-${clientId}`)
        .classList.add("d-none");
}
function EditHolap(clientId) {
    document.querySelector(`.holap-first-${clientId}`).classList.add("d-none");
    document.getElementById(`edit-client-data-${clientId}`).classList.remove("d-none");
}

function closeEditHolap(clientId) {
    document.querySelector(`.holap-first-${clientId}`).classList.remove("d-none");
    document.getElementById(`edit-client-data-${clientId}`).classList.add("d-none");
}


