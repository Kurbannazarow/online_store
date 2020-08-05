<?php include('header.php'); ?>
    <main class="main-content">
        <div class="container">
            <div class="main__row about-main">

               
                <!-- right -->
                <div class="main__column-right c-right">
                    <div class="photo-and-title2">
                        <h1 class="contact__title">
                            С нами связаться очень просто &#9742;
                        </h1>
                        <img src="./img/galery/DICM0085.JPG" alt="www">
                    </div>

                    <div class="contact">

                        <div class="contact-form">
                            <p>Пишите нам, мы всегда на связи</p>
                            <form action="mailer/smart.php" class="form1" method="POST">
                                <div class="group">
                                    <label for="name">Имя <b style="color: red;">*</b>
                                        <input id="name" type="text" name="title" required>
                                    </label>
                                </div>
                                <div class="group">
                                    <label for="tel">Телефон <b style="color: red;">*</b>
                                        <input id="tel" type="text" name="tel" required>
                                    </label>
                                </div>
                                <div class="group">
                                    <label for="sms">Сообшение <b style="color: red;">*</b>
                                        <textarea id="sms" type="text" name="textar" required></textarea>
                                    </label>
                                </div>
                                <div class="group">
                                    <button class="form-btn" type="submit">Отправить</button>
                                </div>
                            </form>
                        </div>

                        <div class="contact-banner">
                            <!-- banner start -->
                            <aside class="info__block-contact">
                                <div class="info__block-inner">
                                    <div class="info__block-title"> Работаем для Вас<br> <strong>c 9 : <sup>00</sup> до
                                            21 :
                                            <sup>00</sup></strong> <br>
                                        выходной воскресенье </div>
                                    <div class="info__block-subtitle"><a href="tel:+99363850463">+993 63 85 04 63</a>
                                    </div>
                                </div>
                                <!-- <img src="img/carousel/slide-01" alt=""> -->
                            </aside>
                            <!-- banner end -->
                        </div>


                    </div>

                    <p class="p">Мы находимся:</p>




                    <div class="map-address">
                        <div class="m">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3097.4243023426193!2d63.5932758153556!3d39.07403197954377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f451fcafb2c8cf1%3A0x97ce707a15f4dfb2!2sKichi%20Gala%20office%20Turkmenabat!5e0!3m2!1sru!2sru!4v1590759004334!5m2!1sru!2sru"
                                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>


                </div>

                 <!-- left -->
                 <div class="main__column-left c-left">

                   <!-- there are circles -->
                   <?php include('circles.php') ?>

                    </div>
                </div>
    </main>

    <?php include('footer.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="./js/header-select.js"></script>

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
        });
        return false;
    });
</script>


</body>

</html>