<?php
// Template Name: Sobre

get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>

<section class="s-about">
  <div class="menu-background"></div>
  <div class="container">
    <h1>Página Sobre</h1>

    <?php
    include(TEMPLATEPATH . '/includes/section-uso.php');

  endwhile;
endif;
?>
  </div>
</section>

<?php
get_footer();
