<?php get_header();
    while(have_posts()) {
        the_post();
?>
  <!-- Used Fakerpress plugin to generate posts -->
 
  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
         

          <?php the_content() ?>

          <p>Blog text by <?php the_author() ?></p>
        </div>
      </div>
    </div>
  </article>
  <?php } ?>

  <?php get_footer() ?>