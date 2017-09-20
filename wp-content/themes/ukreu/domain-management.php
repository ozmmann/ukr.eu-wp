<?php
/*
Template Name: domain-management
*/
?>
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row eq">
            <div class="col-md-3 col-sm-3 aside">
                <?php get_sidebar();?>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="mang-wrap">
                    <form action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mng-item">
                                    <input type="text" placeholder="Логін">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mng-item">
                                    <input type="password" placeholder="Пароль">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="btn-mng">
                                    <button class="red-button">увійти</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
