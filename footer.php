  <footer>
    <div class="container">
      <div class="top">
        <img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="" />
        <div class="share">
          <span><?php the_field('title_social_media', 'options'); ?></span>
          <ul>
            <?php if (have_rows('items_social_media', 'options')) : while (have_rows('items_social_media', 'options')) : the_row(); ?>
                <li>
                  <a href="<?php the_sub_field('url', 'options'); ?>"><img src="<?php the_sub_field('icon', 'options'); ?>" alt="" /></a>
                </li>
            <?php endwhile;
            endif; ?>
          </ul>
        </div>
      </div>
      <div class="main">
        <nav>
          <div class="item">
            <strong>Produtos Neon</strong>
            <?php
            $args = array(
              'menu' => 'Menu de Produtos do Rodapé',
              'theme_location' => 'products-footer-menu',
              'container' => false
            );
            wp_nav_menu($args);
            ?>
          </div>
          <div class="item">
            <strong>Conta digital PJ</strong>
            <ul>
              <li><a href="">Sou MEI</a></li>
              <li><a href="">Sou ME</a></li>
            </ul>
          </div>
          <div class="item">
            <strong>Blog</strong>
            <ul>
              <li><a href="">#focanodinheiro</a></li>
              <li><a href="">O poder da comunidade</a></li>
              <li><a href="">Desafio das 52 semanas</a></li>
              <li><a href="">Planilha de gastos</a></li>
            </ul>
          </div>
          <div class="item">
            <strong>Institucional</strong>
            <ul>
              <li><a href="">Conheça a Neon</a></li>
              <li><a href="">Trabalhe conosco</a></li>
              <li><a href="">Termos de uso</a></li>
              <li><a href="">Políticas de privacidade</a></li>
            </ul>
          </div>
          <div class="item">
            <strong>Ajuda</strong>
            <ul>
              <li><a href="">Ouvidoria</a></li>
              <li><a href="">Fale conosco</a></li>
            </ul>
          </div>
        </nav>
        <div class="btns">
          <?php if (have_rows('items_contact', 'options')) : while (have_rows('items_contact', 'options')) : the_row(); ?>
              <button>
                <img src="<?php the_sub_field('icon', 'options'); ?>" alt="" />
                <div class="info">
                  <strong><?php the_sub_field('title', 'options'); ?></strong>
                  <span><?php the_sub_field('text', 'options'); ?></span>
                </div>
              </button>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
      <div class="msg">
        <div class="icon">😀</div>
        <?php the_field('text_message', 'options'); ?>
      </div>
    </div>
  </footer>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- AOS Animation CSS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.slide-testimonials', {
      slidesPerView: 3,
      spaceBetween: 32,
      pagination: {
        el: '.s-testimonials .top .swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1.3,
          spaceBetween: 16,
        },
        600: {
          slidesPerView: 2.3,
          spaceBetween: 16,
        },
        975: {
          slidesPerView: 3,
          spaceBetween: 32,
        },
      },
    });

    AOS.init({
      duration: 1000,
      once: true,
    });
  </script>

  <? wp_footer(); ?>
  </body>

  </html>