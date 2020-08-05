function info() {
    const infoBlock = document.querySelector('.info__block');
    const img = infoBlock.querySelector('img');
    const arr = ['./img/polipropilen/Penoplast.jpg', './img/polipropilen/wse.jpg', './img/polipropilen/etilen.jpg', './img/polipropilen/halta.jpg', './img/polipropilen/korzina.jpg', './img/polipropilen/wedro.jpg', './img/polipropilen/wedro2.jpg', './img/polipropilen/ppp.png', './img/polipropilen/trubochki.jpg', './img/polipropilen/pprtrubahol.jpg'];

    let id = setTimeout(function settime() {
        let rand = Math.floor(Math.random() * (arr.length - 1));
        img.src = arr[rand];
        id = setTimeout(settime, 3000);
    }, 3000);

}
info();