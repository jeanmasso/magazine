<?php get_header();

/*
  Template Name: Services
*/
?>

<div class="container my-3">

  <div class="headlines">
    <?php
    $the_query = new WP_Query('posts_per_page=1');
    while($the_query->have_posts()) : $the_query->the_post();
    ?>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="w-auto">
            <?php the_post_thumbnail('medium'); ?>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php get_the_excerpt(); ?></p>
              <p class="card-text"><small class="text-muted">Publié le <?php the_time( get_option( 'date_format' ) ); ?>
                  par <?php the_author(); ?> • <?php comments_number(); ?></small></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary post__link">Lire la suite</a>
            </div>
          </div>
        </div>
      </div>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </div>

<?php while( have_posts() ) : the_post(); ?>
<div class="col-10">
  <div class="card mb-3">
    <div class="row g-0">
      <div class="w-auto">
        <?php the_post_thumbnail('medium'); ?>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php the_title(); ?></h5>
          <p class="card-text"><?php get_the_excerpt(); ?></p>
          <p class="card-text"><small class="text-muted">Publié le <?php the_time( get_option( 'date_format' ) ); ?>
              par <?php the_author(); ?> • <?php comments_number(); ?></small></p>
          <a href="<?php the_permalink(); ?>" class="btn btn-primary post__link">Lire la suite</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
</div>

<?php get_footer(); ?>