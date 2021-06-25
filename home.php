<?php
get_header();

/*
  Template Name: Accueil
*/
?>

  <div class="container my-5">

    <div class="row g-3 justify-content-center">
      <?php
      $the_query = new WP_Query(array(
        'posts_per_page' => "4"
      ));
      while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        <div class="col-3">
          <div class="card my-3">
            <div class="card-img">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail('medium');
              } else {
                ?>
                <div>
                  <img class="w-100" src="https://via.placeholder.com/310x200.png?text=Image not found">
                </div>
                <?php
              }
              ?>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text">
                <small class="text-muted">Publié le <?php the_time(get_option('date_format')); ?>
                  par <?php the_author(); ?></small>
              </p>
              <p class="card-text"><?php get_the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
            </div>
          </div>
        </div>
      <?php
      endwhile;
      wp_reset_postdata();
      ?>
    </div>

  </div>

<?php get_footer(); ?>