<?php include('header.php'); ?>
<main class="main-content">
    <div class="container">
        <div class="main__row about-main">


            <!-- right -->
            <div class="main__column-right">
                <h1 class="cards__title"></h1>
                <div class="cart">
                    <div class="cart__img">
                        <img class="cart__img-img" src="" alt="">
                    </div>
                    <div class="cart__desc">
                        <div class="descr1"><span>Мин.партия: </span><span class="descr2 min-part"></span></div>
                        <div class="descr1 descr1-fas"><span>Фасовка: </span><span class="descr2 min-fas"></span>
                        </div>
                        <div class="descr1"><span>Состав: </span><span class="descr2 sostaw"></span></div>
                        <div class="descr1"><span>Ед.изм: </span><span class="descr2 ed"></span></div>
                        <div class="descr1"><span>Вес единицы продукции: </span><span class="descr2 ed-pr"></span>
                        </div>
                        <div class="descr1"><span>Цвет: </span><span class="descr2 colr"></span></div>
                        <div class="descr1"><span>Страна производитель: </span><span class="descr2 city"></span>
                        </div>
                        <!-- <div class="descr1"><span>Цена: </span><span class="descr2 pris"></span></div> -->
                        <div class="btn-parent">
                            <button class="card_b">Написать</button>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <hr>
                <p class="max-text"></p>
            </div>


            <!-- left -->
            <div class="main__column-left contact-left">
            
                <!-- there are circles -->
                <?php include('circles.php') ?>

            </div>








        </div>
</main>

<!-- modal dialog -->
<div class="popup">
    <div class="popup-dialog">
        <div class="popup-content">
            <button class="popup-close">&times;</button>
            <h4 class="popup-header">Заинтересовало?</h4>
            <p>Оставьте свои контактные данные <br> для связи</p>
            <div class="popup-forum">
                <form action="mailer/smart.php" method="POST">
                    <label for="#">Ваше имя<span style="color: red;">*</span></label>
                    <input type="text" class="main-from-input name" name="title" required>
                    <label for="#">Ваш телефон<span style="color: red;">*</span></label>
                    <input type="text" class="main-from-input tel" name="tel" required>
                    <label for="#">Короткое собшение</label>
                    <textarea rows="4" class="main-from-textarea" name="textar"></textarea>
                     <button class="main-from-btn button btn pointer-e" type="submit" >Оставить заявку</button> <br>
                     <span class="spa"></span> 
                </form>
            </div>
        </div>

    </div>

</div>
<?php include('footer.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./libs/owl-carousel/owl.carousel.min.js"></script>
<script src="./js/header-select.js"></script>
<!-- <script src="./js/main.js"></script> -->
<script src="./js/card.js"></script>

<script>
    $('form').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "mailer/smart.php",
            data: $(this).serialize()
        }).done(function () {
            $(this).find("input").val("");
            alert("Сообщение успешно отправлено");
            $("form").trigger("reset");
            $('.popup').fadeOut();
            document.body.classList.remove('hiden');
        });
        return false;
    });
</script>

</body>

</html>