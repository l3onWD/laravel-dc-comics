import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

// Global Scripts
import { initModals } from '~resources/js/modal.js';

initModals();