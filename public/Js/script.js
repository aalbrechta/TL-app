function confirmDelete() {
    if (confirm("Naozaj chcete tento záznam odstrániť?")) {
        document.getElementById('deleteForm').submit();
    }
}

function confirmCreate() {

    alert('Záznam bol úspešne pridaný.');
}

function confirmUpdate() {

    alert('Záznam bol úspešne upravený.');
}
