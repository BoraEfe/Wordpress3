<?php get_header(); ?>

<section id="hero">
    <div class="wrapper">

        <img 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" 
            alt="Logo"
        >

        <h1><?php bloginfo('name'); ?></h1>

        <p><?php bloginfo('description'); ?></p>

    </div>
</section>

<section id="main-content">
    <div class="wrapper">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>

    </div>
</section>

<?php get_footer(); ?>
