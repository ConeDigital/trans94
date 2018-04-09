<?php
/**
 * The template for displaying the header
 *
 * @package cone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>

    <?php cone_og_meta_tags(); ?>

    <?php wp_head(); ?>
</head>
<body>

    <header>
        <div class="cd-menu-star"><a href="<?php echo esc_url(home_url()); ?>">*</a></div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
    </header>
    <div class="cd-logo-section">
        <img src="<?php echo esc_url(home_url( '/wp-content/themes/trans94/assets/images/trans94-logo.png' ) ); ?>">
    </div>

