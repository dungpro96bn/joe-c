</main>

<?php get_sidebar(); ?>

<?php
if (!is_front_page()):
global $homeName;
$homeName = '';
if (function_exists('breadcrumb')) :
    breadcrumb();
endif;
endif;
?>


<footer id="footer" class="footer">
    <div id="back-top">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="29.35" height="16.089" viewBox="0 0 29.35 16.089">
                <path id="Path_63987" data-name="Path 63987" d="M1241.366,4586.841l13.968,13.968-13.968,13.968" transform="translate(-4586.134 1256.748) rotate(-90)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
            </svg>
            <p class="en">TOP</p>
        </a>
    </div>
    <div class="footer-top">
        <div class="bg-footer-01"></div>
        <div class="bg-footer-02"></div>
        <div class="bg-footer-03">
            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/bg-dots.png" alt="">
        </div>
        <div class="contact-banner">
            <div class="inner">
                <div class="content">
                    <h2 class="heading">
                        <span class="ttl-en">CONTACT</span>
                        <span class="ttl-ja">お問い合わせ</span>
                    </h2>
                    <p class="text">JOE協同組合へのご相談はこちら</p>
                    <a class="btn-contact" href="/contact/">
                        <span>WEBからのお問い合わせ</span>
                        <span class="icon-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6.175" height="11.535" viewBox="0 0 6.175 11.535">
                                <path id="Path_30360" data-name="Path 30360" d="M813.716,5119.924l5.564,5.563-5.564,5.564" transform="translate(-813.512 -5119.721)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.576"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- .footer-top -->
    <div class="footer-bottom">
        <div class="inner">
            <div class="logo-footer">
                <a href="<?php echo do_shortcode('[homePath]'); ?>">
                    <picture>
                        <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/joe-logo.svg">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/joe-logo.svg" alt="<?php bloginfo('name'); ?>">
                    </picture>
                </a>
            </div>
            <div class="copyright">
                <p class="en">©️JOE Cooperative All Rights Reserved.</p>
            </div>
        </div>
    </div><!-- .footer-bottom -->
</footer><!-- #footer -->
</div><!-- .outer -->

<?php wp_footer(); ?>

</body>
</html>