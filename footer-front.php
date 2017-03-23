<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UnifyProvis
 */

?>

<!-- Contact Section -->
<section id="contact" class="contacts-section">
    <?php
        $query = new WP_query( 'pagename=contact' );
        // The Loop
        if( $query->have_posts() ) : ?>
            <div class="container content-lg">
                <?php while( $query->have_posts() ): $query->the_post(); ?>
                    <div class="title-v1">
                        <h2><?php echo get_the_title(); ?></h2>
                    </div>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        <?php endif;
        wp_reset_postdata();
    ?>


    <div class="copyright-section">
        <p><?php echo date( 'Y' ); ?> &copy; <?php _e( 'All Rights Reserved.', 'unifyprovis' ); ?></p>
        <ul class="social-icons">
            <li><a href="https://www.facebook.com/pages/Provis-Technologies/124371854408675" target="_blank" data-original-title="Facebook" class="social_facebook rounded-x"></a></li>
            <li><a href="https://twitter.com/ProvisTech" target="_blank" data-original-title="Twitter" class="social_twitter rounded-x"></a></li>
            <li><a href="https://www.linkedin.com/company/provis-technologies" target="_blank" data-original-title="Linkedin" class="social_linkedin rounded-x"></a></li>
            <li><a href="https://www.youtube.com/channel/UCpeww9f47llsL20ItF0YSDw" target="_blank" data-original-title="YouTube" class="social_youtube rounded-x"></a></li>
            <li><a href="skype:provis.technologies" target="_blank" data-original-title="Skype" class="social_skype rounded-x"></a></li>
        </ul>
        <span class="page-scroll"><a href="#intro"><i class="fa fa-angle-double-up back-to-top"></i></a></span>
    </div>
</section>
<!-- End Contact Section -->

    <?php wp_footer(); ?>
</div><!-- .wrapper -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89661986-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
