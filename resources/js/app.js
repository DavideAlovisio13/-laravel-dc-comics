import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// modal delete controll
const deleteSubmitButtons = document.querySelectorAll('.delete-button');

deleteSubmitButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const dataTitle = button.getAttribute('data-item-title');

        const modal = document.getElementById('deleteModal');

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        const modalItemTitle = modal.querySelector('#modal-item-title');
        modalItemTitle.textContent = dataTitle;

        const buttonDelete = modal.querySelector('button.btn-primary');

        buttonDelete.addEventListener('click', () => {
            button.parentElement.submit();
        })
    })
});

// validated input checkmark
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const inputs = document.querySelectorAll('input');
    const checkSpans = document.querySelectorAll('.check');

    form.addEventListener('submit', function (event) {
        let isValid = true;

        inputs.forEach(function (input) {
            if (input.value.trim() === '') {
                isValid = false;
            }
        });

        if (!isValid) {
            event.preventDefault();
        } else {
            checkSpans.forEach(function (span) {
                span.classList.add('text-success');
                span.innerHTML = '<i class="fa-solid fa-check"></i>';
            });
        }
    });
});

