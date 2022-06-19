<?php

/**
 * The header for our theme.
**/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
    <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <h4> Home </a></h4>
        <h4> Services </h4>
        <h4> About Us </h4>
        <h4> Contact Us </h4>
    </header>