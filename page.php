<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AdvocatusB
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            if (is_front_page()) : ?>
                <section class="about" id="about_us"
                         style="background: <?php echo get_theme_mod(background_color); ?>
                                 url('<?php echo get_theme_mod(section_background); ?>') no-repeat center/cover">
                    <div class="container">
                        <div class="position">
                            <span class="number"><?php echo get_theme_mod('section_number'); ?></span>
                            <div class="caption">
                                <h2><?php echo get_theme_mod('section_name'); ?></h2>
                                <p><?php echo get_theme_mod('section_description'); ?></p>
                            </div>
                        </div>
                        <div class="box">
                            <h3><?php echo get_theme_mod('first_subtitle'); ?></h3>
                            <dl>
                                <dt>2016 &ndash;</dt>
                                <dd>
                                    In hac habitasse platea dictumst Nunc ultricies iaculis luctus Aliquam eget
                                    eros eget sapien dictum.
                                </dd>
                                <dt>2015 &ndash;</dt>
                                <dd>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor.
                                </dd>
                                <dt>2014 &ndash;</dt>
                                <dd>
                                    In hac habitasse platea dictumst Nunc ultricies iaculis luctus Aliquam eget eros
                                    eget sapien.
                                </dd>
                            </dl>
                        </div>
                        <div class="box second">
                            <h3><?php echo get_theme_mod('second_subtitle'); ?></h3>
                            <p><?php echo get_theme_mod('right_part_description'); ?></p>
                        </div>
                    </div>
                </section>
            <?php
            endif;

            /*            while (have_posts()) : the_post();

                            get_template_part('template-parts/content', 'page');

                        endwhile; // End of the loop.
            */
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
