<?php get_header(); ?>

<div class="page-wrapper">

    <main class="content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="card">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">Lees meer</a>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
