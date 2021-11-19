<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <?php wp_head(); ?>
</head>

<body id="body">
    <header id="header">
        <?php wp_nav_menu(array('theme_location' => 'menu-1', 'container_class' => 'nav')); ?>
    </header>