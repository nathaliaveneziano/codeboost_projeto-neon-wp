<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="<?= get_template_directory_uri(); ?>/img/favicon.png" type="image/png" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/main.min.css" />

  <!-- Primary Meta Tags -->
  <title><?php
          wp_title('|', true, 'right');
          bloginfo('name'); ?></title>
  <meta name="title" content="Redesign Neon — Landing Page Codeboost" />
  <meta name="description" content="A conta digital certa pra cuidar bem do seu dinheiro" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://metatags.io/" />
  <meta property="og:title" content="Redesign Neon — Landing Page Codeboost" />
  <meta property="og:description" content="A conta digital certa pra cuidar bem do seu dinheiro" />
  <meta property="og:image" content="https://nathaliaveneziano.github.io/codeboost_projeto-neon/share-img.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://metatags.io/" />
  <meta property="twitter:title" content="Redesign Neon — Landing Page Codeboost" />
  <meta property="twitter:description" content="A conta digital certa pra cuidar bem do seu dinheiro" />
  <meta property="twitter:image" content="https://nathaliaveneziano.github.io/codeboost_projeto-neon/share-img.png" />

  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="container">
      <a href="" class="logo"><img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="Logo Neon" /></a>
      <nav>
        <ul>
          <li><a href="">Produtos</a></li>
          <li><a href="">Conta digital PJ</a></li>
          <li><a href="">Quem somos</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Ajuda</a></li>
        </ul>
        <button class="btn-secondary white">Abra sua conta digital</button>
        <button class="btn-mobile">
          <img src="<?= get_template_directory_uri(); ?>/img/btn-mobile.svg" alt="" />
        </button>
      </nav>
    </div>
  </header>