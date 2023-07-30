<?php 

global $wp;
$CURRENT_URL = add_query_arg( array(), $wp->request );

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <script src="https://kit.fontawesome.com/588946e2b4.js" crossorigin="anonymous"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
    <header>
        <nav class="flex-header">
            <a href="<?php echo home_url( '' ) ?>" class="<?php if ( $CURRENT_URL == '' ) echo "current-link" ?>">Beranda</a>  
            <a href="<?php echo home_url( 'article' ) ?>" class="<?php if ( $CURRENT_URL == 'article' ) echo "current-link" ?>">Artikel</a>  
            <a href="<?php echo home_url( 'about' ) ?>" class="<?php if ( $CURRENT_URL == 'about' ) echo "current-link" ?>">Tentang Kami</a>  
        </nav>
    </header>
    <?php if ( $CURRENT_URL == '' ): ?>
        <?php get_template_part( 'template-parts/header/header-hero' ); ?>
    <?php endif; ?>
