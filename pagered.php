
<?php
get_header();
?>

<section style="background-color:pink;">
    <h1>Bonjour le monde !</h1>


    <!--The Loop (la boucle) -->

    <?php if( have_posts() ) :
      while ( have_posts() ) :
          the_post(); ?>
          <article>
              <h2><?php the_title(); ?></h2>
              <div><?php the_content(); ?></div>
            </article>
          <?php endwhile; else : ?> <p>sorry</p>
          <?php endif;?>
</section>

<?php
get_footer();
?>
