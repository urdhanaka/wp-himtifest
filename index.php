<?php

get_header();

?>

<?php if ( is_home() ) : ?>
    <?php get_template_part('sections/hero'); ?>
    <?php get_template_part('sections/tentangkami-short'); ?>
<?php endif; ?>

<?php

get_template_part( 'sections/home-about' );
get_template_part( 'sections/home-explore' );
get_template_part( 'sections/home-article' );
get_footer();

?>