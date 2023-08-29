/* -----------------------------------------
* MODAL DELETE
-------------------------------------------*/

// Get Elements
const deleteElems = document.querySelectorAll('.delete-form');

deleteElems.forEach(elem => {
    elem.addEventListener('submit', e => {
        e.preventDefault();

        const comicName = elem.dataset.name;

        const hasConfirmed = window.confirm(`Are you sure to delete ${comicName} permanently?`);

        if (hasConfirmed) elem.submit();
    });
});