<!-- BEGIN: FOOTER
==================================================== -->
<footer class="g-footer">
    <!-- Begin: g-container-lg -->
    <div class="g-container-lg">
        <!-- BEGIN: FOOTER CONTENT -->
        <div class="s-footer-content">
            <!-- BEGIN: FOOTER MEDIA -->
            <div class="s-ftr-content-media">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_theme_file_uri('/images/logo.svg') ?>" alt="Travel Fox - A Wordpress Blog Theme" />
                </a>

            </div>
            <!-- END: FOOTER MEDIA -->
            <!-- BEGIN: FOOTER INFO -->
            <div class="s-ftr-content-info">
                <h3>Become an author</h3>
                <!-- Begin: g-paragraph-1 -->
                <div class="g-paragraph-1">
                    Copyright © Travelfox Blog Theme - All rights
                    reserved.
                </div>
                <!-- End: g-paragraph-1 -->
                <small>Powered by Wordpress</small>
            </div>
            <!-- END: FOOTER INFO -->
        </div>
        <!-- END: FOOTER CONTENT -->

        <!-- BEGIN: FOOTER CONTENT SOCIAL -->
        <div class="s-ftr-content-social">
            <a href=""><i class="icon-pinterest"></i></a>
            <a href=""><i class="icon-instagram"></i></a>
            <a href=""><i class="icon-dribbble"></i></a>
            <a href=""><i class="icon-linkedin"></i></a>
        </div>
        <!-- END: FOOTER CONTENT SOCIAL -->
    </div>
    <!-- End: g-container-lg -->

    <div class="search-overlay">
        <div class="search-overlay__top">
            <div class="container">
                <i class="icon-search_03 search-overlay__icon" aria-hidden="true"></i>
                <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
                <i class="icon-close_03 search-overlay__close" aria-hidden="true"></i>
            </div>
        </div>

        <div class="container">
            <div id="search-overlay__results"></div>
        </div>
    </div>
</footer>
<!-- END: FOOTER -->
<?php wp_footer(); ?>

</body>

</html>