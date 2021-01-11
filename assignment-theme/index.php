<!-- Importing header from header.php -->
<?php get_header() ?>

<h2>All Blogs</h2>

<!-- Main Content -->
<div class="col-lg-8 col-md-10 mx-auto">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post();  ?>

    <div class="post-preview">
        <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <span class="post-subtitle">
              Excerpts will be added soon...
        </span>
        <p class="post-meta">Posted by <?php the_author() ?> on <?php the_time('F jS, Y') ?></p>
    </div>
    <hr>

    <?php endwhile; ?>

</div>



<!-- Pager -->
<div class="clearfix">
    <?php echo paginate_links() ?>
</div>
<hr>

<?php endif; ?>
<!-- Importing footer from footer.php -->
<?php get_footer() ?>