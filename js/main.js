$(document).ready(function () {
    $('#carousel-header').owlCarousel({
        items: 1,
        nav: true,
        navText: [],
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
    });
});







function population() {
    const cardsWrapper = document.querySelector('.cards__wrapper');
    const cards = cardsWrapper.querySelectorAll('.card');
    const tabsBtn = document.querySelectorAll('.tabs__btn');
    tabsBtn.forEach((item, index) => {
        if (index === 0) {
            item.addEventListener('click', function () {
                tabsBtn[0].classList.add('tabs__btn--active');
                tabsBtn[1].classList.remove('tabs__btn--active');
                cards.forEach(item => {
                    if (item.classList.contains('avtor')) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none'
                    }
                });
            });
        } else if (index === 1) {
            item.addEventListener('click', function () {
                tabsBtn[1].classList.add('tabs__btn--active');
                tabsBtn[0].classList.remove('tabs__btn--active');
                cards.forEach(item => item.style.display = 'block');
            });
        }
    });
}
population();

function cardShow() {
    const card = document.querySelectorAll('.card');
    card.forEach(i => {
        i.addEventListener('click', function () {
            const title = this.querySelector('.card__title').innerHTML;
            const maxText = this.querySelector('.card__max-text').innerHTML;
            // const cost = this.querySelector('.card__price').innerHTML;
            const cardImg = this.querySelector('.card__img>img').src;
            const descr = this.querySelector('.descr');
            const descr1 = descr.querySelectorAll('.descr1');

            const arrDesc = [title, cardImg, maxText];
            descr1.forEach(item => arrDesc.push(item.innerHTML));

            localStorage.setItem('data', JSON.stringify(arrDesc));
            document.location.href = "card.php";
        });
    });
}
cardShow();