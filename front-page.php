<?php get_header() ?>
<main class="intro">
    <?php
    $args = array(
        'post_name'      => 'intro',
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 1
    );
    $my_posts = get_posts($args);
    if ($my_posts) :
        echo $my_posts[0]->post_content;
    endif;
    ?>
</main>


<?php get_footer() ?>