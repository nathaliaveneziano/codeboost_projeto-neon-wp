<?php
// Template Name: Página não encontrada

get_header();
?>

<section class="s-page-not-found">
  <div class="container">
    <h1>Ops... Você se perdeu?</h1>
    <p>Clique no botão abaixo para voltar para home.</p>
    <a href="<?= get_home_url(); ?>" class="btn btn-primary">Voltar para home</a>
  </div>
</section>

<?php
get_footer();
