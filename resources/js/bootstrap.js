
import '../css/app.css';


import '../sass/app.scss';


import $ from 'jquery';
window.$ = $;

import './custom';

import './countdown';


import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
