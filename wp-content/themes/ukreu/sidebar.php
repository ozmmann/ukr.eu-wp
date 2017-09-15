<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ukreu
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside>
    <div class="container-fluid">
        <div class="wrap">
            <form action="">
                <div class="login-panel">

                    <div class="login-title">Пошта @UKR.EU</div>
                    <div class="login-addres">
                        <input type="text" placeholder="Адреса">
                    </div>
                    <div class="login-passw">
                        <input type="password" placeholder="Пароль">
                    </div>
                    <div class="login-checkbox">
                        <div class="exp">
                            <div class="log-check">
                                <input type="checkbox" class="inp-check" id="check" name="check" value="" />
                                <label for="check">
                                    <span></span>Чужий комп’ютер
                                </label>
                            </div>
                        </div>
                        <div class="check-item">
                            <a href="#" class="forgotPass">Забули пароль?</a>
                            <a href="#" class="reges">Реєстрація</a>
                        </div>
                    </div>
                    <button class="red-button">увійти</button>

                </div>
            </form>
            <ul id="slides">
                <li class="slide showing">
                    <div class="unit-title">Хостинг</div>
                    <img src="img/advert-firs.png" alt="advert">
                    <div class="unit-more"><a href="#">Детальніше</a></div>
                </li>
                <li class="slide">
                    <div class="unit-title">Хостинг</div>
                    <img src="img/advert-second.png" alt="advert">
                    <div class="unit-more"><a href="#">Детальніше</a></div>
                </li>
                <li class="slide">
                    <div class="unit-title">Хостинг</div>
                    <img src="img/advert-three.png" alt="advert">
                    <div class="unit-more"><a href="#">Детальніше</a></div>
                </li>


            </ul>

        </div>
    </div>
    <script>
        var slides = document.querySelectorAll('#slides .slide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide, 5000);

        function nextSlide() {
            slides[currentSlide].className = 'slide';
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].className = 'slide showing';
        }
    </script>
<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
