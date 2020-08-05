function promoSection() {
    const promoSectionCols = document.querySelectorAll('.promo__section-col');

    promoSectionCols.forEach((item, i) => {
        if (i === 0) {
            item.addEventListener('click', function () {
                document.location.href = 'product.php#halt';
            });
        } else if (i === 2) {
            item.lastElementChild.addEventListener('click', function (e) {
                e.preventDefault();
                document.location.href = 'product.php#yashik';
            });
            item.firstElementChild.addEventListener('click', function (e) {
                e.preventDefault();
                document.location.href = 'product.php#ruchka';
            });
        }
    });
}
promoSection();