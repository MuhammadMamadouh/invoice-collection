function showInvoice(invoiceId) {
    // document.querySelector(".overlay").classList.remove("d-none");
    document.getElementById(`show-invoice-${invoiceId}`).classList.remove("d-none");
}

function closeInvoice(invoiceId) {
    // document.querySelector(".overlay").classList.add("d-none");
    document.getElementById(`show-invoice-${invoiceId}`).classList.add("d-none");
}
function EditInvoice(invoiceId) {
    document.querySelector(`.invoice-first-${invoiceId}`).classList.add("d-none");
    document.getElementById(`show-edit-invoice-${invoiceId}`).classList.remove("d-none");
}

function closeEditInvoice(invoiceId) {
    document.querySelector(`.invoice-first-${invoiceId}`).classList.remove("d-none");
    document.getElementById(`show-edit-invoice-${invoiceId}`).classList.add("d-none");
}
