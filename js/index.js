const get = element => document.getElementById(element);

let open = get('menu-btn');
let nav = get('nav');
// let exit = get('exit-btn');

open.addEventListener('click', () => {
    nav.classList.add('mobile-menu').classList.remove('header-menu-wide')

})