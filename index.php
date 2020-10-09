
<?php
get_header();
?>

<section>
    <h1>Bonjour le monde !</h1>
</section>

<!--The Loop (la boucle) -->

<?php if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>
<article>
    <a href="<?php the_permalink(); ?><?php the_title(); ?>">
    <div><?php the_content(); ?></div>
    <p><?php the_time();?></p>
    <p><?php the_author_posts_link();?></p>
    <p><?php comments_number();?></p>
</article>
<?php endwhile; endif; ?>

<?php
get_footer();
?>
