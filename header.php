<?php 

global $wp;
$CURRENT_URL = add_query_arg( array(), $wp->request );

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
    <header>
        <div class="flex-header">
            <div class="flex-header-nav">
                <a href="<?php echo home_url( '' ) ?>" class="<?php if ( $CURRENT_URL == '' ) echo "current-link" ?>">Beranda</a>  
                <a href="<?php echo home_url( 'about' ) ?>" class="<?php if ( $CURRENT_URL == 'about' ) echo "current-link" ?>">Tentang Kami</a> 
                <a href="<?php echo home_url( 'catalog' ) ?>" class="<?php if ( $CURRENT_URL == 'catalog' ) echo "current-link" ?>">Katalog</a>  
                <a href="<?php echo home_url( 'article' ) ?>" class="<?php if ( $CURRENT_URL == 'article' ) echo "current-link" ?>">Artikel</a>  
                <button onclick="burgerButton()">=</button>
            </div>
        </div>
        <div id="burger" class="flex-header-burger">
            <div class="flex-header-nav-burger">
                <a href="<?php echo home_url( '' ) ?>" class="<?php if ( $CURRENT_URL == '' ) echo "current-link" ?>">Beranda</a>  
                <a href="<?php echo home_url( 'about' ) ?>" class="<?php if ( $CURRENT_URL == 'about' ) echo "current-link" ?>">Tentang Kami</a>  
                <a href="<?php echo home_url( 'catalog' ) ?>" class="<?php if ( $CURRENT_URL == 'catalog' ) echo "current-link" ?>">Katalog</a>  
                <a href="<?php echo home_url( 'article' ) ?>" class="<?php if ( $CURRENT_URL == 'article' ) echo "current-link" ?>">Artikel</a>  
            </div>
        </div>
    </header>
    <?php if ( $CURRENT_URL == '' ): ?>
        <?php get_template_part( 'template-parts/header/header-hero' ); ?>
    <?php endif; ?>
