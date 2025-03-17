<?php if (is_front_page()) : ?>

    <?php get_template_part('index'); ?>

<?php else : ?>

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>

<?php endif; ?>

