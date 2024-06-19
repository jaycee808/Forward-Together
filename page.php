<?php

get_header();

while(have_posts()) {

    the_post(); ?>
        <div class="page-container">
            <h2 class="page-title">
                <?php the_title(); ?>
            </h2>
            <div class="page-text">
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </div>

<?php }

get_footer();

?>