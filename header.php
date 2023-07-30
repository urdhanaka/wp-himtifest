<!DOCTYPE html>
<html <?php language_attributes(); ?> 

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
    <header>
        <div class="flex-header">
            <div><a href="<?php echo home_url() ?>" class="current-link">Beranda</a></div>
            <div><a href="<?php echo home_url('article') ?>">Artikel</a></div>
            <div><a href="<?php echo home_url('about') ?>">Tentang Kami</a></div>
        </div>
    </header>
