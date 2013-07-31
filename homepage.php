<?php 
/**
 * Template Name: Homepage
 **/

    get_header(); 
?>

<div id="page" class="container">
<?php if(have_posts()) : ?>
    
    <?php while(have_posts()) : the_post(); ?> 
        <section class="category">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            
            <?php the_content(); ?>

            <ul class="products thumbnails">
                <li class="item span4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/360x200" alt="">
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                    </div>
                </li>
                <li class="item span4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/360x200" alt="">
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                    </div>
                </li>
                <li class="item span4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/360x200" alt="">
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                    </div>
                </li>
                <li class="item span4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/360x200" alt="">
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                    </div>
                </li>
            </ul>
        </section>   
    <?php endwhile; ?>
 
    <div class="navigation">
        <?php posts_nav_link(); ?>
    </div>
 
<?php endif; ?>
</div>
 
<?php get_sidebar(); ?>   
<?php get_footer(); ?>