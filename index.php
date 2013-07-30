<?php get_header(); ?>
 
<div class="container">
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="post">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="entry">   
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
 
                <p class="postmetadata">
                <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                </p>
            </div>
        </div>
    <?php endwhile; ?>
    <ul class="pager">
        <li class="previous"><?php previous_posts_link('&laquo; Previous Entries') ?></li>
        <li class="next"><?php next_posts_link('Next Entries &raquo;','') ?></li>
    </ul>
         
<?php endif; ?>
</div>
<?php get_sidebar(); ?>   
<?php get_footer(); ?>