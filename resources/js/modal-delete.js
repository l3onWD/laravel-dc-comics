/* -----------------------------------------
* MODAL DELETE
-------------------------------------------*/
import * as bootstrap from 'bootstrap';

// Get Elements
const modalElem = document.getElementById('page-modal');
const modalTitleElem = modalElem.querySelector('.modal-title');
const modalMsgElem = modalElem.querySelector('.modal-message');
const modalSubmitElem = modalElem.querySelector('.modal-submit');
const deleteElems = document.querySelectorAll('.delete-form');


// Create Bootstrap modal controller
const bootstrapModal = new bootstrap.Modal(modalElem);


// Handle Delete form submit
deleteElems.forEach(elem => {

    elem.addEventListener('submit', e => {

        // Init
        e.preventDefault();
        const comicName = elem.dataset.name;

        // Set Modal Data
        modalTitleElem.innerText = 'Delete Comic';
        modalMsgElem.innerText = `Are you sure to delete ${comicName} permanently?`;
        bootstrapModal.show();

        // Handle Modal Submit Button
        modalSubmitElem.addEventListener('click', () => {
            elem.submit();
            bootstrapModal.hide();
        });
    });

});