const menuToggleBtn = document.getElementById('menu_toggle_btn');
const menu = document.querySelector('.menu');
const body = document.body;

menuToggleBtn.addEventListener('click', () => {
    menuToggleBtn.classList.toggle('menu_toggle_active');
    menu.classList.toggle('menu_active');
    body.classList.toggle('body_no-scroll');
});