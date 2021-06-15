const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');
const navlogo = document.querySelector("#navabar__logo");
// Display mobile menu

const mobileMenu = () => {
    menu.classList.toggle('is-active')
    menuLinks.classList.toggle('active')
}

menu.addEventListener('click',mobileMenu);

menu.addEventListener('click',mobileMenu);

