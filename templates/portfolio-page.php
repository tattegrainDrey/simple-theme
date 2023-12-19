<?php
/*
Template Name: Portfolio Page
*/
get_header();

if (is_page('Portfolio')) { ?>
    <main class="portfolio-page">
        <h2>Portfolio</h2>
        <div class="portfolio-posts">
            <?php
            $portfolio = new WP_Query(array(
                'category_name' => 'portfolio', // Replace with your category slug if needed
            ));

            if ($portfolio->have_posts()) {
                while ($portfolio->have_posts()) {
                    $portfolio->the_post(); ?>

                    <div class="portfolio-post">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>
                        <?php } ?>
                        <div class="content">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

            <?php
                }
            } else {
                // No posts found
                echo 'No portfolio posts found.';
            }

            // Restore the global post data
            wp_reset_postdata();
            ?>
        </div>
        </main>
    <?php
}

get_footer();
?>
