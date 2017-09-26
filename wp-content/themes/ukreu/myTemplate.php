<?php
/*
Template Name: myTemplate
*/
?>
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row eq">
            <div class="col-md-3 col-sm-3 aside">
                <?php get_sidebar();?>
            </div>
            <?php while( have_posts() ) : the_post();
                the_content(); // выводим контент
            endwhile; ?>
        </div>
    </div>
    </div>
<?php
get_footer();
