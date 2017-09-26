<?php
/*
Template Name: contact-page
*/
?>
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row eq">
            <div class="col-md-3 col-sm-3 aside">
                <?php get_sidebar();?>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <main>

                        </main>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="cont-img-wrap">
                            <div class="img-girl">

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <div class="infoPayment">
                            <p class="pay-tile-sub">*Вартість за перший рік, далі п’ять євро на рік. Для громадських<br>
                                організацій та державних установ вартість незмінна - три євро на рiк.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="infoPayment">
                            <p class="pay-sub-title pay-tile-sub">Увага, вартість послуги електронної пошти<br>
                                складає 1 євро на рік. Місце на сервері 1,5 Гб.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php while( have_posts() ) : the_post();
                the_content(); // выводим контент
            endwhile; ?>
        </div>
    </div>
    </div>
<?php
get_footer();
