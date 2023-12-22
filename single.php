<?php get_header(); ?>
<main>
    <section class="single">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
                if (in_category('portfolio')) : ?>
                    <div class="content">
                        <div class="portfolio item">
                            <?php
                            the_title('<h3>', '</h3>');
                            the_post_thumbnail();
                            the_content();
                            ?>
                        </div>
                        <a href="../" class="retour">retour</a>
                    </div>
                <?php else :
                    the_title('<h1>', '</h1>');
                    the_content();
                endif;
                ?>
                <!--pourquoi le hr? -->
                <hr>
        <?php endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>