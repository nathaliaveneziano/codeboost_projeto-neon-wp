<?php
// Template Name: Sobre

get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>

    <section style="background-color: blue;">
      <h1>Página Sobre</h1>
    </section>


<?php
  endwhile;
endif;

get_footer();
