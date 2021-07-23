<?php
$page = 1;
$posts_per_page = 4;

$args = [
    'posts_per_page'             => $posts_per_page,
    'paged'                     => $page,
    'post_type'                 => 'post'
];

$post_query = new WP_Query($args);
?>

<div class="project-cards container">
    <div class="row d-flex justify-content-center" id="projects-cards-container"></div>
</div>

<div class="pagination d-flex justify-content-center align-items-center mt-5 mb-5" aria-label="Page navigation">
    <?php
    $total_posts = wp_count_posts()->publish;
    $total_pages = ceil($total_posts / $posts_per_page);
    ?>
    <!-- Previous Button -->
    <button type="button" class="btn btn-primary" id='previous-button'>
        Prev</button>

    <p class="m-0 mx-3" id="current-page"><?php echo $page ?></p>
    /
    <p class="m-0 mx-3" id="total-page"><?php echo $total_pages; ?></p>

    <button type="button" class="btn btn-primary" id='next-button'>Next</button>
</div>