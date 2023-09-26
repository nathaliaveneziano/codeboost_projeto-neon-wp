<?php
// Template Name: Contato

get_header();
?>

<section class="s-contact">
  <div class="menu-background"></div>
  <div class="container">
    <h1>Página Contato</h1>
    <?= do_shortcode('[contact-form-7 id="accc3e7" title="Formulário de contato 1"]'); ?>
  </div>
</section>

<?php
get_footer();
