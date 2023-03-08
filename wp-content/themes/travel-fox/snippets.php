<?php

$tours = new WP_Query(array(
    'posts_per_page' => 3,
    'post_type' => 'tour',
));

while ($tours->have_posts()) :
    $tours->the_post(); ?>

    <!-- BEGIN: TOURS ITEM -->
    <div class="s-tour-item">
        <!-- BEGIN: TOURS ITEM MEDIA -->
        <div class="s-tour-item-media">
            <img src="<?php echo get_theme_file_uri('/images/tours_01.jpg'); ?>" alt="Travel Fox - Wordpress Blog Testing Theme" />
        </div>
        <!-- END: TOURS ITEM MEDIA -->

        <!-- BEGIN: TOURS ITEM INFO -->
        <div class="s-tour-item-info">
            <h3><?php the_title(); ?></h3>
            <!-- Begin: s-tour-price -->
            <div class="s-tour-price">
                <h4>€220</h4>
                <span>/ Per person</span>
            </div>
            <!-- End: s-tour-price -->
            <!-- Begin: g-paragraph-1 -->
            <div class="g-paragraph-1">
                <?php the_excerpt(); ?>
            </div>
            <!-- End: g-paragraph-1 -->
        </div>
        <!-- END: TOURS ITEM INFO -->
    </div>
    <!-- END: TOURS ITEM -->

<?php endwhile ?>


<!-- NAVBAR -->
<ul>
    <li>
        <a href="index.html" class="s-nav-link active">Tours</a>
    </li>
    <li>
        <a href="<?php echo site_url('/about'); ?>" class="s-nav-link">About Us</a>
    </li>
    <li>
        <a href="<?php echo site_url('/blog'); ?>" class="s-nav-link">Blog</a>
    </li>
    <li>
        <a href="<?php echo site_url('/contact'); ?>" class="s-nav-link">Contact</a>
    </li>
    <li>
        <a href="login.html" class="s-nav-link">Login</a>
    </li>
    <li>
        <a href="#" class="s-nav-link btn btn-info btn-lg">Sign up</a>
    </li>
    <li>
        <a href="contact.html" class="s-nav-link">
            <i class="icon-search_09"></i>
        </a>
    </li>
</ul>