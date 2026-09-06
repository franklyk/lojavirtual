import 'bootstrap';

import './form';

import './cart';

import './custom';

import './images';

import './listing';




document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.dropdown-menu').forEach(dropdown => {

        dropdown.addEventListener('click', (e) => {

            e.stopPropagation();

        });

    });

});
