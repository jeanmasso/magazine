<?php
  get_header();

  /*
   Template Name: Événement
  */
?>

<div class="container my-5">
  <div class="bg-white rounded p-4">
    <h2 class="text-center m-5"><?php the_title(); ?></h2>
    <div class="newsletter-content m-5"><?php the_content(); ?></div>
  </div>
</div>

<?php
  get_footer();
?>