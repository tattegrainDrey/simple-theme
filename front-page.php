<?php get_header() ?>
<main class="front">
    <?php
        echo apply_filters( 'the_content', get_post('intro')->post_content );
    ?>
</main>


<?php get_footer() ?>