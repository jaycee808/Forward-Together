<?php

get_header();

while(have_posts()) {

    the_post(); ?>
        <div class="post-container">
            <h2 class="post-title">
                <?php the_title(); ?>
            </h2>
            <div class="post-text">
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
        <div class="news-button">
            <p class="back-button <?php if (is_page('news')) echo 'current-page'; ?>"><a href="<?php echo site_url('/news'); ?>">Back to News</a></p>
        </div>

<?php }

get_footer();

?>