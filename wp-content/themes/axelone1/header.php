<!DOCTYPE html>
<html>
<head>

    <title>Axel'One</title>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <?php wp_head(); ?>

</head>

<body>
<header class="nav">
    <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
</header>