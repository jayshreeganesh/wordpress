<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-meta">
                <span>Posted on <?php the_date(); ?> by <?php the_author(); ?></span>
            </div>
            <div class="post-content">
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php endwhile; ?>

    <div class="pagination">
        <?php
            previous_posts_link('Previous');
            next_posts_link('Next');
        ?>
    </div>
<?php else : ?>
    <p>No posts found.</p>
<?php endif; ?>
<button id="ajax-button">Click me</button>
<div id="ajax-response"></div>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom-ajax.js"></script>

<?php get_footer(); ?>
