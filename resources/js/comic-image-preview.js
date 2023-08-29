/* -----------------------------------------
* IMAGE PREVIEWER
-------------------------------------------*/

// Get Elements
const previewInput = document.getElementById('thumb');
const previewImage = document.getElementById('preview-image');

// Data
const placeholderSrc = 'https://marcolanci.it/utils/placeholder.jpg';


// Handle input change
previewInput.addEventListener('input', () => {
    const src = previewInput.value;
    previewImage.src = src ? src : placeholderSrc;
});