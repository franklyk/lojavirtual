import '../css/app.css';

import '../css/style.css';

import '../sass/app.scss';


import $ from 'jquery';
window.$ = $;


import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
