<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar-hero">
        
        <div class="logo-hero">
            <a href="<?php echo site_url(); ?>">
                4WARD 2GETHER
            </a>
        </div>

        <div class="nav-menu-hero">
            <ul>
                <li <?php if (is_page('about')) echo 'class="current-page"'; ?>><a href="<?php echo site_url('/about'); ?>">About</a></li>
                <li <?php if (is_page('news')) echo 'class="current-page"'; ?>><a href="<?php echo site_url('/news'); ?>">News</a></li>
                <li <?php if (is_page('team')) echo 'class="current-page"'; ?>><a href="<?php echo site_url('/team'); ?>">The Team</a></li>
                <li <?php if (is_page('contact')) echo 'class="current-page"'; ?>><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- <section>
        <div class="hero-text-box">
            <div class="hero-tagline">Celebrate Diversity</div>
                <p>
                4WARD2GETHER is a passionate non-profit group based in Ayrshire, Scotland dedicated to promoting diversity and inclusion.
                <br><br>
                Run by a team of dedicated volunteers, we create sessions that spark essential conversations within our community about combating discrimination. Our unique programs offer communities the opportunity to delve into the roots of prejudice and learn to challenge biases firsthand.
                <br><br>
                Join us in building a more inclusive future!
                </p>
        </div>
    </section> -->

    <section class="social-icon-display">
        <!-- <div class="social-heading">Follow Us</div> -->
            <div class="social-icons">
                <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fa-regular fa-envelope"></i></a>
            </div>
    </section>

<div class="hero-footer">
<?php get_footer(); ?>
</div>