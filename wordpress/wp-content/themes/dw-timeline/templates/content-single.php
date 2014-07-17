<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="transparent">
      <h1 class="entry-title move"><?php the_title(); ?></h1>
    <p>This is the custom theme</p>
    </header>
    <footer>
      <?php
        $tags_list = get_the_tag_list( '', __( ', ', 'dw-timeline' ) );
        if ( $tags_list ) :
      ?>

      <?php endif; ?>
    </footer>
  </article>
  
<?php endwhile; ?>
