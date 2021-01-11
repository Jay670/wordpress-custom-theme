<!-- Importing header from header.php -->
<?php get_header() ?>


<!-- Main Content -->
<div class="col-lg-8 col-md-10 mx-auto">
    <?php 
         query_posts('posts_per_page=2');
         if(have_posts()) : while(have_posts()) : the_post();
           
    ?>

    <div class="post-preview">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <span class="post-subtitle">
              Excerpts will be added soon...
        </span>
    </div>
    <hr>

    <?php endwhile; endif; wp_reset_query(); ?>
</div>



<!-- Pager -->
<div class="clearfix">
    <a class="btn btn-primary float-right" href="<?php echo site_url("/blog")?>">More Posts &rarr;</a>
</div>

<hr>

<!-- Importing footer from footer.php -->
<?php get_footer() ?>