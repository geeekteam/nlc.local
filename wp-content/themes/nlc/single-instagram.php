<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nlc
 */

get_header(); ?>

    <div class="section">
        <div class="container section_news">
            <div class="section__title st-title fz50"><?php echo the_title(); ?></div>
            <div class="st-content">
                <img class="float-right" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <?php
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'custom');
                endwhile;
                ?>
            </div>
        </div>
    </div>

    <div class="section-form">
        <div class="section-form__container container">
            <div class="section-form__header">
                <div class="section-form__title">Подписывайтесь на наши новости и узнавайте всё первыми</div>
                <div class="section-form__descr">Вы будете получать на электронную почту свежие новости и информацию об акциях и скидках на прогарммы диагностики/лечения в Южной Корее</div>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1" html_class="form-request"]'); ?>
        </div>
    </div>

<?php
get_sidebar();
get_footer();