<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>

    <div class="hero-grid">
        <div class="logo">
            <div class="name">
            <a href="<?php echo site_url(); ?>">
                4WARD 2GETHER
            </a>
            </div>
        </div>
        <div class="nav-menu">
            <div class="nav-item-1"><a href="#about">About</a></div>
            <div class="nav-item-2"><a href="#team">Team</a></div>
            <div class="nav-item-3"><a href="#contact">Contact</a></div>
        </div>

        <section class="hero-text-box">
            <p>
                4WARD2GETHER is a passionate non-profit group based in Ayrshire, Scotland dedicated to promoting diversity and inclusion.
                <br><br>
                Run by a team of dedicated volunteers, we create sessions that spark essential conversations within our community about combating discrimination. Our unique programs offer communities the opportunity to delve into the roots of prejudice and learn to challenge biases firsthand.
                <br><br>
                Join us in building a more inclusive future!
            </p>
        </section>

        <section class="hero-tagline">Celebrate Diversity</section>

        <section class="news-section" id="news">
            <h2>Latest News</h2>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="post-container">
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="post-text">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </section>
    </div>

        <section id="about" class="section-wrapper">
        <h2>About Us</h2>
        <div class="section-content">
            <p>In 2014, Ian Rennie and Sandy Brown of St Kentigern's Church participated in a visit to Belfast and the Corrymeela Community with the TST (Tackling Sectarianism Together) Team. After their visit, they were inspired to take action within their own communities.</p>
            <br>
            <p>In September of that year, John Ithell and John Houston devised a plan. By 2015, they had engaged with local councils and schools, producing their first concert, 'Nil by Mouth,' featuring students from St Joseph's and James Hamilton Academies. By 2017, our events had garnered significant attention and enthusiasm, a level of excitement we continue to uphold.</p>
            <br>
            <p>As a voluntary group, 4Ward 2Gether has connected with communities, schools, and councils to produce a wide range of events, trips, talks, and music concerts. These activities address various issues impacting youth, communities, and society both historically and presently.</p>
            <br>
            <p>Driven by the principles of 'Diversity and Inclusion,' we embrace tolerance across a broad spectrum of religion, race, gender, and sexuality. With the support of fundraising efforts, government bodies, schools, and councils, we continue to promote our message and build on our successes, positively impacting countless minds and lives.</p>
        </div>
    </section>

    <section id="team" class="section-wrapper">
        <h2>The Team</h2>
        <div class="section-content">
            <p>
                This is just a few of the many wonderful volunteers working with 4WARD2GETHER. Get to know the faces that drive our message forward and show them some love!
            </p>
            <div class="team-members"><?php echo do_shortcode("[simple-staff-list]")?></div>
        </div>
    </section>

    <section id="contact" class="section-wrapper">
        <h2>Contact Us</h2>
        <div class="section-content">
            <div class="contact-form"><?php echo do_shortcode('[wpforms id="44"]')?></div>
        </div>
    </section>
	
    <!-- Footer -->
    <footer class="page-footer">
        <div class="footer-content">
            <div class="footer-text">
                Copyright &copy; 4WARD 2GETHER.
                <br>
                Registered Charity No. SC053309
            </div>
            <section class="social-icon-display">
                <div class="social-heading">Follow Us</div>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fa-regular fa-envelope"></i></a>
                </div>
            </section>
        </div>
    </footer>

</body>
</html>