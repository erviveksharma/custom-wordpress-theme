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

                </div><!-- .row -->
            </div><!-- .container -->
            <?php if ( is_single() || is_page() ) : ?>
                </div>
            <?php endif; ?>
    	</div><!-- #content -->

    	<footer id="colophon" class="site-footer" role="contentinfo">
    		<div class="site-info">

                <!--=== Footer Version 1 ===-->
                <div class="footer-v1">

                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <?php echo date('Y'); ?> &copy; <?php echo __( 'All Rights Reserved.', 'unifyprovis' ); ?>
                                    </p>
                                </div>

                                <!-- Social Links -->
                                <div class="col-md-6">
                                    <ul class="footer-socials list-inline">
                                        <li>
                                            <a href="https://www.facebook.com/pages/Provis-Technologies/124371854408675" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/ProvisTech" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/company/provis-technologies" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCpeww9f47llsL20ItF0YSDw" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="YouTube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="skype:provis.technologies" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Social Links -->
                            </div>
                        </div>
                    </div><!--/copyright-->

                </div>
                <!--=== End Footer Version 1 ===-->


            </div><!-- .site-info -->
    	</footer><!-- #colophon -->
    </div><!-- #page -->

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
