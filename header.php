<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="<?php echo site_url(); ?>">
                4WARD 2GETHER
            </a>
        </div>

        <div class="nav-menu">
            <ul>
                <li class="nav-item <?php if (is_page('about')) echo 'current-page'; ?>"><a href="<?php echo site_url('/about'); ?>">About</a></li>
                <li class="nav-item <?php if (is_page('news')) echo 'current-page'; ?>"><a href="<?php echo site_url('/news'); ?>">News</a></li>
                <li class="nav-item <?php if (is_page('team')) echo 'current-page'; ?>"><a href="<?php echo site_url('/team'); ?>">Team</a></li>
                <li class="nav-item <?php if (is_page('contact')) echo 'current-page'; ?>"><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            </ul>
        </div>
    </nav>
