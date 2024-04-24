<?php get_header(); ?>

    <div class="small-container">
        <div class="latest">

        <?php while ( have_posts() ) : the_post(); ?>
            
            <!-- the_field('naujienos_paveikslelis') -->
    
            <div class="videos">
            <img class="pav-2" src="<?php the_field('naujienos_paveikslelis'); ?>" alt="v.cover"> 
            <img class="pav-1" src="<?php echo get_template_directory_uri(); ?>/images/Group 303.png" alt="play"> 
            </div>
            

            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            

            <?php 
            $images = get_field('galerija');
            // $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $images ): ?>
                <div class="gallery"> 
                    <?php foreach( $images as $imageUrl ): ?>
                        <a href="<?php echo $imageUrl ?>" data-fancybox data-caption="Single image">
                            <img src="<?php echo $imageUrl ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        <?php endwhile; ?>

        </div>
    </div>

<?php get_footer(); ?>