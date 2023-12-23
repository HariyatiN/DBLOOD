function hideDeleteConfirmation() {
    document.getElementById("confirmationModal").style.display = "none";
}

function showDeleteConfirmation(action) {
    // Set the action dynamically
    const deleteForm = document.getElementById('deleteForm');
    deleteForm.setAttribute('action', action);

    // Show the modal
    document.getElementById("confirmationModal").style.display = "block";
}
