
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
    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>
    <p><?php the_time();?></p>
    <p><?php the_author_posts_link();?></p>
</article>
<?php endwhile; endif; ?>

<?php
get_footer(); 
?>
