<?php

get_header();

?>

<?php if ( is_home() ) : ?>
    <?php get_template_part('sections/hero'); ?>
<?php endif; ?>
    
<?php if ( have_posts() ):
    while ( have_posts() ): the_post(); ?>

    <article class="post">
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_content() ?>
    </article>

    <?php endwhile;

else:
    echo '<p>There is no post!</p>';

endif;

get_footer();

?>