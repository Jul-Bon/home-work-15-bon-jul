<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AdvocatusB
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer footer">
    <div class="footer_part clearfix">
        <p class="copyright"><?php echo get_theme_mod('footer_copy'); ?></p>
        <ul class="social_networks">
            <?php if (get_theme_mod('facebook_social') != ''): ?>
                <li>
                    <a href="<?php echo get_theme_mod('facebook_social'); ?>" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (get_theme_mod('twitter_social') != ''): ?>
                <li>
                    <a href="<?php echo get_theme_mod('twitter_social'); ?>" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (get_theme_mod('google_plus_social') != ''): ?>
                <li><a href="<?php echo get_theme_mod('google_plus_social'); ?>" target="_blank">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (get_theme_mod('instagram_social') != ''): ?>
                <li>
                    <a href="<?php echo get_theme_mod('instagram_social'); ?>" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            <?php endif; ?>

        </ul>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
