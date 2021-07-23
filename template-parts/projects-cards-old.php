<div class="project-cards container">
    <div class="row">
        <?php

        while ($post_query->have_posts()) : $post_query->the_post();
        ?>
            <div class="col-md-3 col-6  mb-3">
                <div class="card h-100" onclick="document.location='<?php echo get_the_permalink() ?>'">
                    <?php
                    //Thumbnail
                    if (has_post_thumbnail()) {
                        the_post_thumbnail(
                            'medium' .
                                ['class' => 'row']
                        );
                    } else {
                    ?>
                        No thumbnail
                    <?php
                    }
                    ?>
                    <div class="card-body">
                        <?php
                        //Title
                        the_title('<h6 class="card-title">', '</h5>');
                        // echo '<p class="card-text">' . get_the_excerpt() . '</p>';
                        echo '<p class="card-text d-none d-lg-block">' . wp_trim_words(get_the_excerpt(), 30) . '</p>';
                        ?>
                    </div>

                </div>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>

    </div>
</div>