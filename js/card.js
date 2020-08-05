window.addEventListener('load', function () {
    let getProducts = JSON.parse(localStorage.getItem('data'));
    document.querySelector('.cards__title').innerHTML = getProducts[0];
    document.querySelector('.cart__img-img').src = getProducts[1];
    document.querySelector('.max-text').innerHTML = getProducts[2];
    document.querySelector('.min-part').innerHTML = getProducts[3];

    const minFas = document.querySelector('.min-fas');
    if (getProducts[4] === '') {
        minFas.parentNode.style.display = 'none';
    } else {
        minFas.innerHTML = getProducts[4];
    }

    document.querySelector('.sostaw').innerHTML = getProducts[5];
    document.querySelector('.ed').innerHTML = getProducts[6];

    const edPr = document.querySelector('.ed-pr');
    if (getProducts[7] === '-') {
        edPr.parentNode.style.display = 'none';
    } else {
        edPr.innerHTML = getProducts[7];
    }

    document.querySelector('.colr').innerHTML = getProducts[8];
    document.querySelector('.city').innerHTML = getProducts[9];
});

const modalDialog = function () {
    const popup = document.querySelector('.popup');
    const popupClose = popup.querySelector('.popup-close');
    const writeBtn = document.querySelector('.card_b');

    writeBtn.addEventListener('click', function (e) {
        e.preventDefault();
        popup.style.display = 'block';
        document.body.classList.add('hiden');
    });

    popupClose.addEventListener('click', function (e) {
        e.preventDefault();
        popup.style.display = 'none';
        document.body.classList.remove('hiden');
    });
}

modalDialog();

function forjyk() {

    const name = document.querySelector(".name");
    const tel = document.querySelector(".tel");
    const btn = document.querySelector(".btn");
    const spanj = document.querySelector(".spa");

    const strsNme = ".-*/'+\\)(Ё!№;%:?123456789=><~`";
    const strsTel = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮйцукенгшщзхъфывапролджэячсмитьбю.-*/)(Ё!№;%:?=><`~";



    name.addEventListener('input', function () {
        const self = this;
        check(self, strsNme);
    });

    tel.addEventListener('input', function () {
        const self = this;
        check(self, strsTel, 6);
    });

    function check(th, symbols, count = 3) {
        let k = ' ';
        spanj.style.cssText = "text-align: center; color: red; font-weight: bold; font-size: 13px;";
        let ch = true;
        for (let i = 0; i < th.value.length; i++) {
            for (let j = 0; j < symbols.length; j++) {
                if (th.value[i] === symbols[j]) {
                    ch = false;
                    k = th.value[i];
                    break;
                }

            }

        }



        if (th.value.length < count) {
            k = "количество символов проверьте";
        }


        if (th.value === '' || th.value === ' ' || ch === false || th.value.length < count) {
            btn.classList.add('pointer-e');
            spanj.textContent = `Пожалуйста, заполните все поля правильно! (${k})`;
        } else {
            btn.classList.remove('pointer-e');
            spanj.textContent = "";
        }

    }

}

forjyk()