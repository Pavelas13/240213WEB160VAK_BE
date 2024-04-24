
<?php get_header(); ?>

    <!-- <div class="flex-conteiner"> -->
    <div class="container youtube-cover">
        <div class="latest">

            <a href="#">
                <div class="videos">
                    <img class="pav-2" src="<?php echo get_template_directory_uri(); ?>/images/Group 183.png" alt="v.cover"> 
                    <img class="pav-1" src="<?php echo get_template_directory_uri(); ?>/images/Group 303.png" alt="play"> 
                </div>
            </a>

            <h2>#pikts nissanas lekia! Geriausi 2020 sezono <br>kadrai!</h2>
            <p> Kažkas kuria nuostabią muziką, gal dainuoja laabai gerai. Bet tikiu, kad ne vienam
                šiurpuliukai eina per kūną kuomet 2jz variklis nuriaumoja 170km/h greičiu.<br>
                Nissan akordai patys gražiausi, turbinos darbas tarsi geriausias simfoninis orkestras. Tiesiog
                reikia diriguoti už vairo, jausti tai ka darai, važiuoti taip kaip gali! Nesvarbu kas už tavo
                nugaros, varbu kas tavo priekyje. Life passion for everyone!
            </p>
            <p>#rugstus nissanas</p>

        </div>


        <?php

        $the_query = new WP_Query([
            'post_type' => 'post',
            'category_name' => 'uncategorized',
            // 'offset' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 7,
        ]);

        // The Loop.
        if ( $the_query->have_posts() ) {

            echo '<div class="other-news">';

            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                ?>

                <div class="news-item">
                    <div class="thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_field('naujienos_paveikslelis'); ?>" alt="video1"> 
                        </a>
                    </div>
                    <div class="description">
                        <h6><?php the_title(); ?></h6>
                        <?php the_content(); ?>
                    </div>
                </div>
            
                <?php
            }

            echo '</div>';
        
        } else {

            echo '<p>Sorry, no posts matched your criteria.</p>';

        }

        // Restore original Post Data.
        wp_reset_postdata();
        ?>

    </div>

    
    <?php include 'contacts.php' ?>



<?php get_footer(); ?>

