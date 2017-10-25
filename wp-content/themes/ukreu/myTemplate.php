<?php
/*
Template Name: myTemplate
*/
?>
<?php get_header();
    var_dump($_GET);
?>
    <div class="container-fluid">
        <div class="row eq">
            <div class="col-md-3 col-sm-3 hidden-sm hidden-xs aside">
                <?php get_sidebar();?>
            </div>
            <?php while( have_posts() ) : the_post();
                the_content(); // выводим контент
            endwhile; ?>
            <div class="hidden-lg hidden-md hidden-sm col-xs-3 aside">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
    </div>
<?php
get_footer();
