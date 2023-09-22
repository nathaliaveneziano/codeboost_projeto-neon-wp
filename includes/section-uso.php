<?php
$pagina_home = get_page_by_title('Home');
?>

<section>
  <div class="container">
    <h2><?php the_field('text_extra', $pagina_home); ?></h2>
  </div>
</section>