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
            <a href="<?php echo home_url() ?>" class="current-link">Beranda</a>  
            <a href="<?php echo home_url( 'article' ) ?>">Artikel</a>  
            <a href="<?php echo home_url( 'about' ) ?>">Tentang Kami</a>  
        </nav>
    </header>
