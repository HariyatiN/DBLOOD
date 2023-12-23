function hideDeleteConfirmation() {
    const confirmationModal = document.getElementById("confirmationModal");
    confirmationModal.classList.remove("show");
    setTimeout(() => {
        confirmationModal.style.display = "none";
    }, 300);
}

function showDeleteConfirmation(action) {

    const deleteForm = document.getElementById('deleteForm');
    deleteForm.setAttribute('action', action);

    setTimeout(() => {
        const confirmationModal = document.getElementById("confirmationModal");
        confirmationModal.style.display = "block";
        confirmationModal.classList.add("show");
    }, 10);
}
