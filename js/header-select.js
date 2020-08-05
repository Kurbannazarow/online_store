const headerNav = document.querySelector('.header__nav');
const burger = document.querySelector('.burger');
burger.addEventListener('click', function () {
    headerNav.classList.toggle('show');
});