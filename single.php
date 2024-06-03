<?php

get_header();

while(have_posts()) {

    the_post(); ?>
        <div class="post-container">
            <h2>
                <?php the_title(); ?>
            </h2>
            <hr>
            <p>
                <?php the_content(); ?>
            </p>
        </div>

<?php }

get_footer();

?>