<?php
// Template Name: Home

get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>

    <section class="s-hero">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h3><?php the_field('subtitle_section_hero'); ?></h3>
          <h1><?php the_field('title_section_hero'); ?></h1>
          <button class="btn-primary"><?php the_field('text_button'); ?></button>
          <ul>
            <?php if (have_rows('items_section_hero')) : while (have_rows('items_section_hero')) : the_row(); ?>
                <li>
                  <div class="icon">
                    <img src="<?php the_sub_field('icon_item'); ?>" alt="<?php the_sub_field('text_item'); ?>" />
                  </div>
                  <span><?php the_sub_field('text_item'); ?></span>
                </li>
            <?php endwhile;
            endif; ?>
          </ul>
        </div>

        <div class="area-image">
          <h2 data-aos="fade-left"><?php the_field('subtitle_right_section_hero'); ?></h2>
          <div class="image" data-aos="zoom-in">
            <img src="<?= get_template_directory_uri(); ?>/img/card-neon-frnt.png" class="card-front" />
            <img src="<?= get_template_directory_uri(); ?>/img/card-neon-back.png" class="card-back" />
            <img src="<?= get_template_directory_uri(); ?>/img/circle-cards-neon.svg" class="circle" />
          </div>
        </div>
      </div>
    </section>

    <section class="s-card-neon">
      <div class="container">
        <div class="left-area">
          <div class="ilustra-mockup">
            <img src="<?= get_template_directory_uri(); ?>/img/circle-mockup.svg" class="circle" data-aos="fade-left" />
            <img src="<?= get_template_directory_uri(); ?>/img/mockup.svg" data-aos="flip-left" />
          </div>
          <div class="text-area" data-aos="fade-up">
            <div class="icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icon-neon.svg" />
            </div>
            <div class="info-text">
              <h3><?php the_field('text_download'); ?></h3>
              <p><?php the_field('description_download'); ?></p>
              <ul>
                <li>
                  <a href="<?php the_field('url_apple_store'); ?>" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/img/apple-store.svg" />
                  </a>
                </li>
                <li>
                  <a href="<?php the_field('url_google_play'); ?>" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/img/google-play.svg" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="right-area">
          <div class="main-text" data-aos="fade-left">
            <h2><?php the_field('title_section_app_neon'); ?></h2>
            <ul>
              <?php if (have_rows('items_benefits')) : while (have_rows('items_benefits')) : the_row(); ?>
                  <li>
                    <div class="info">
                      <img src="<?php the_sub_field('icon_benefits'); ?>" class=" icon" />
                      <div class="text">
                        <h3><?php the_sub_field('title_benefits'); ?></h3>
                        <p><?php the_sub_field('text_benefits'); ?></p>
                      </div>
                    </div>
                    <img src="<?= get_template_directory_uri(); ?>/img/arrow-right.svg" />
                  </li>
              <?php endwhile;
              endif; ?>
            </ul>
            <a href="" class="btn"><?php the_field('text_button_app_neon'); ?></a>
          </div>
          <div class="box-card" data-aos="fade-left">
            <div class="text">
              <h2><?php the_field('title_pj'); ?></h2>
              <h3><?php the_field('subtitle_pj'); ?></h3>
              <p><?php the_field('description_pj'); ?></p>
              <div class="btns">
                <button class="btn-primary"><?php the_field('text_button_pj_1'); ?></button>
                <button class="btn-primary"><?php the_field('text_button_pj_2'); ?></button>
              </div>
            </div>
            <img src="<?= get_template_directory_uri(); ?>/img/card-front-pj.svg" class="image" />
          </div>
        </div>
      </div>
    </section>

    <section class="s-testimonials">
      <div class="container">
        <div class="top" data-aos="fade-right">
          <h2>
            <span><?php the_field('title_testimonial'); ?></span><?php the_field('subtitle_testimonials'); ?>
          </h2>
          <div class="swiper-pagination"></div>
        </div>
        <!-- Swiper -->
        <div class="slide-testimonials" data-aos="fade-up">
          <div class="swiper-wrapper">
            <?php if (have_rows('items_testimonials')) : while (have_rows('items_testimonials')) : the_row(); ?>

                <div class="swiper-slide">
                  <div class="card-testimonial">
                    <div class="user">
                      <strong><?php the_sub_field('user_testimonial'); ?></strong>
                      <img src="<?= get_template_directory_uri(); ?>/img/icon-twiiter.svg" />
                    </div>
                    <p><?php the_sub_field('text_testimonial'); ?></p>
                  </div>
                </div>

            <?php endwhile;
            endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="s-account">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h2>
            <span>Aproveite</span>Domine o seu dinheiro com uma conta 100%
            digital
          </h2>
          <ul>
            <li>
              <div class="icon">
                <img src="<?= get_template_directory_uri(); ?>/img/icon-cartao-internacional.svg" />
              </div>
              <div class="info">
                <h4>Cartão visa internacional</h4>
                <p>Tenha facilidades e benefícios para o seu dia a dia.</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <img src="<?= get_template_directory_uri(); ?>/img/icon-taxa-zero.svg" />
              </div>
              <div class="info">
                <h4>Zero mensalidade e anuidade</h4>
                <p>Não gaste grana pagando taxas desnecessárias.</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <img src="<?= get_template_directory_uri(); ?>/img/icon-poupanca.svg" />
              </div>
              <div class="info">
                <h4>Investimento que rende mais que a poupança</h4>
                <p>Invista o seu dinheiro de maneira mais rentável.</p>
              </div>
            </li>
          </ul>
          <button class="btn-primary">Abra sua conta digital</button>
        </div>
        <div class="image">
          <img src="<?= get_template_directory_uri(); ?>/img/mockup-01.svg" class="mockup-01" data-aos="fade-up" />
          <img src="<?= get_template_directory_uri(); ?>/img/mockup-02.png" class="mockup-02" data-aos="fade-down" />
          <img src="<?= get_template_directory_uri(); ?>/img/circle-conta-digital.svg" class="circle" data-aos="zoom-in" />
        </div>
      </div>
    </section>

<?php
  endwhile;
endif;

get_footer();
