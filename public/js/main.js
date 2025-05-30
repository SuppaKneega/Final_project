function showModal(message) {
    const modal = document.getElementById('modal');
    const messageBox = document.getElementById('modalMessage');
    messageBox.innerText = message;
    modal.style.display = 'flex';
}

function closeModal() {
    document.getElementById('modal').style.display = 'none';
}

function validateSearch() {
    const input = document.getElementById('searchInput');
    if (input.value.trim().length === 0) {
        showModal('Please enter a search term.');
        return false;
    }
    return true;
}

document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('.save-form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);

            fetch('/save', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('[name="_token"]').value
                },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                showModal(data.message);
            })
            .catch(() => {
                showModal("Something went wrong. Try again.");
            });
        });
    });
});
