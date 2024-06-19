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

<?php }

get_footer();

?>