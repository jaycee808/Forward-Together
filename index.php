<?php

get_header();

while(have_posts()) {

    the_post(); ?>
        <div class="post-page-container">
            <h2>
                <a href="<?php the_permalink()?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <hr>
            <p>
                <?php the_content(); ?>
            </p>
        </div>
<?php }

get_footer();

?>
