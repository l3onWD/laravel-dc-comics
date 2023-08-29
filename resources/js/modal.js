/* -----------------------------------------
* MODALS
-------------------------------------------*/

/**
 * Init all page modal components
 */
function initModals() {

    // Get element
    const modalTogglers = document.querySelectorAll('[data-modal-target]');


    modalTogglers.forEach(modalToggler => {

        // Get menu and optional close button
        const modalId = modalToggler.dataset.modalTarget;
        const modalMenu = document.getElementById(modalId);
        const modalClose = modalMenu.querySelector('[data-modal-close]')

        // Handle modal click
        document.addEventListener('click', e => {

            if (modalToggler.contains(e.target)) modalMenu.classList.toggle('show');// click toggler
            else if (!modalMenu.contains(e.target)) modalMenu.classList.remove('show');// click outside
            else if (modalClose && modalClose.contains(e.target)) modalMenu.classList.remove('show');// click close

        });
    });
}


export { initModals };