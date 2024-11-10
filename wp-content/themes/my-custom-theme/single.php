<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <div class="post-meta">
            <span>Posted on <?php the_date(); ?> by <?php the_author(); ?></span>
        </div>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
    </article>

    <div class="post-navigation">
        <?php previous_post_link(); ?>
        <?php next_post_link(); ?>
    </div>
<?php endwhile; else : ?>
    <p>No post found.</p>
<?php endif; ?>

<?php get_footer(); ?>
