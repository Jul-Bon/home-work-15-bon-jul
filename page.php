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

            <?php if (is_front_page()) : ?>
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
                            <!-- The custom post-type of our history-->
                            <dl>
                                <?php
                                //The query
                                $args = array(
                                    'post_type' => 'history',
                                    'order' => 'DESC',
                                );
                                $years = new WP_Query($args); ?>

                                <?php if ($years->have_posts()): ?>

                                    <!-- The loop -->
                                    <?php while ($years->have_posts()) : $years->the_post(); ?>
                                        <dt><?php the_title(); ?></dt>
                                        <dd><?php the_content(); ?></dd>

                                    <?php endwhile; ?>
                                    <!-- End of the loop -->

                                    <?php wp_reset_query(); ?>
                                <?php endif; ?>



                                <?php
                                // Query. $args - query parameters
                                query_posts($args);

                                // Loop WordPress
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post(); ?>

                                        <dt><?php the_title(); ?></dt>
                                        <dd><?php the_content(); ?></dd>

                                    <?php }
                                    wp_reset_query();
                                } else {
                                    // text / code, if there are no posts
                                    echo 'There are no posts.';
                                }
                                ?>
                            </dl>
                        </div>
                        <div class="box second">
                            <h3><?php echo get_theme_mod('second_subtitle'); ?></h3>
                            <p><?php echo get_theme_mod('right_part_description'); ?></p>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
