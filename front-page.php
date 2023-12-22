<?php get_header() ?>
<?php
    $args_port = array(
        'category_name' => 'portfolio',
        'posts_per_page' => -1, // Display all posts from the tag.
    );
    $query_3d = new WP_Query($args_port);
?>
<main>
    <section class="s1">
        <h1>D.A. Tattegrain</h1>
        <img src="http://localhost/portfolio/wp-content/uploads/2023/11/icon.png" alt="Photo de D.A. Tattegrain">
        <div>
            <h2>Portfolio</h2>
            <p>Artiste et Étudiant en multimédia</p>
        </div>
    </section>
    <section class="s2">
        <div class="gauche">
            <h2>À propos de moi</h2>
            <p>Une artiste de tous points, j’aime découvrir de nouvelles façons de m’exprimer. J’ai approfondi mes connaissances dans deux de mes plus grandes passions: la programmation et la réalisation de site web et de vidéo. Je suis impatiente de mettre en pratique mes nouvelles connaissances dans le monde professionnel.</p>
        </div>
        <div class="droite">
            <img src="http://localhost/portfolio/wp-content/uploads/2023/10/ecovoyance-poster.png" alt="ecovoyance">
            <img src="http://localhost/portfolio/wp-content/uploads/2023/10/lvdr.jpg" alt="lvdr">
        </div>
    </section>
    <section class="s3">
        <h2>Compétences</h2>
        <div class="insider">
            <div class="gauche">
                <div class="langues">
                    <h3>Langues</h3>
                    <div class="logo">
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/cs.png" alt="">
                            <figcaption>C Sharp</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/c.png" alt="">
                            <figcaption>C++</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/html.png" alt="">
                            <figcaption>HTML</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/css.png" alt="">
                            <figcaption>CSS</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/js.png" alt="">
                            <figcaption>Javascript</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/php.png" alt="">
                            <figcaption>Php</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/sass.png" alt="">
                            <figcaption>Sass</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/sql.png" alt="">
                            <figcaption>SQL</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="logiciels">
                    <h3>Logiciels</h3>
                    <div class="logo">
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/accloud.png" alt="">
                            <figcaption>Creative Cloud</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/audacity.png" alt="">
                            <figcaption>Audacity</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/mysql.png" alt="">
                            <figcaption>My SQL</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/unity.png" alt="">
                            <figcaption>Unity</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/wp.png" alt="">
                            <figcaption>Wordpress</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/vs.png" alt="">
                            <figcaption>Visual Studio</figcaption>
                        </figure>
                        <figure>
                            <img src="http://localhost/portfolio/wp-content/uploads/2023/12/vsc.png" alt="">
                            <figcaption>VS Code</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="droite">
                <img src="http://localhost/portfolio/wp-content/uploads/2023/10/ecovoyance-poster.png" alt="ecovoyance">
                <img src="http://localhost/portfolio/wp-content/uploads/2023/10/lvdr.jpg" alt="lvdr">
            </div>
        </div>
    </section>
    <section class="s4">
        <h2>Mon Portfolio</h2>
        <div class="carousel-container">
            <button class="prev-button">
                <svg width="64px" height="64px" viewBox="0 0 24 24" stroke-width="0.6" fill="none" xmlns="http://www.w3.org/2000/svg" color="#131413">
                    <path d="M13 8.5L9.5 12L13 15.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            <div class="carousel-cont">
                <div class="carousel">
                    <?php
                        while ($query_3d->have_posts()) {
                            $query_3d->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="item">
                                <?php the_post_thumbnail() ?>
                                <h4> <?php the_title(); ?> </h4>
                            </a>
                        <?php } ?>
                </div>
            </div>
            <button class="next-button">
                <svg width="64px" height="64px" viewBox="0 0 24 24" stroke-width="0.6" fill="none" xmlns="http://www.w3.org/2000/svg" color="#131413">
                    <path d="M11 8.5L14.5 12L11 15.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>
    </section>
    <section class="s5">
        <q>Art is a line around your thoughts.</q><span> -Gustav Klimt</span>
    </section>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carouselContainers = document.querySelectorAll(".carousel-container");

        carouselContainers.forEach((carouselContainer) => {
            const carousel = carouselContainer.querySelector(".carousel");
            let position = 0;
            const items = carousel.querySelectorAll(".item");
            //const item = $(".projet:first").html();
            let projetWidth = items[0].offsetWidth;
            const totalItems = items.length;
            let parentWidth = carousel.scrollWidth;
            let parent = carousel.offsetWidth;
            const espace = totalItems - 1;
            console.log("ScrollWidth : " + parentWidth);
            console.log("OffsetWidth : " + parent);
            console.log("ClientWidth : " + carousel.clientWidth);
            console.log("Longueur 1 : " + projetWidth);
            console.log("Nb items" + espace);
            let width = (((parentWidth - (projetWidth * totalItems)) / espace) + parentWidth) / totalItems;

            function recalculation() {
                projetWidth = items[0].offsetWidth;
                parentWidth = carousel.scrollWidth;
                parent = carousel.offsetWidth;
                width = (((parentWidth - (projetWidth * totalItems)) / espace) + parentWidth) / totalItems;
            }

            window.addEventListener('resize', recalculation);
            recalculation();

            console.log("Longueur: " + width);

            const prevButton = carouselContainer.querySelector(".prev-button");
            const nextButton = carouselContainer.querySelector(".next-button");

            prevButton.addEventListener("click", () => {
                position += width;
                if (position > 0) {
                    position = -width * (totalItems - 1);
                }
                updateCarousel();
            });

            nextButton.addEventListener("click", () => {
                position -= width;
                if (position < -width * (totalItems - 1)) {
                    position = 0;
                }
                updateCarousel();
            });

            function updateCarousel() {
                carousel.style.transform = `translateX(${position}px)`;
            }
        });
    });
</script>

<?php get_footer() ?>