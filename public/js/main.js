const modalWrapper = document.querySelector('.modal-wrapper');

function openModal() {
    modalWrapper.style.display = 'block';
}

function closeModal(data) {
    if (data.target.className == 'modal-wrapper') {
        modalWrapper.style.display = 'none';
    }
}

modalWrapper.addEventListener('click', closeModal);