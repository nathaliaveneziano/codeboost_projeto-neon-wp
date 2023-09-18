<?php
get_header();
?>

<section class="s-hero">
  <div class="container">
    <div class="text" data-aos="fade-right">
      <h3>Abra sua conta, é só baixar o app!</h3>
      <h1>A conta digital certa pra cuidar bem do seu dinheiro</h1>
      <button class="btn-primary">Abra sua conta digital</button>
      <ul>
        <li>
          <div class="icon">
            <img src="<?= get_template_directory_uri(); ?>/img/icon-anuidade.svg" alt="Ícone de cartão sem anuidade" />
          </div>
          <span>Cartão sem <br />
            anuidade</span>
        </li>
        <li>
          <div class="icon">
            <img src="<?= get_template_directory_uri(); ?>/img/icon-conta-digital.svg" alt="Ícone de conta digital" />
          </div>
          <span>Conta digital <br />
            100% grátis</span>
        </li>
        <li>
          <div class="icon">
            <img src="<?= get_template_directory_uri(); ?>/img/icon-dinheiro.svg" alt="Ícone de " />
          </div>
          <span>Seu dinheiro <br />
            rendendo mais</span>
        </li>
      </ul>
    </div>

    <div class="area-image">
      <h2 data-aos="fade-left">Banco 100% digital</h2>
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
          <h3>Baixe nosso app</h3>
          <p>
            Que tal abrir uma conta digital para ver como a gente faz a sua
            vida muito mais simples?
          </p>

          <ul>
            <li>
              <a href="" target="_blank">
                <img src="<?= get_template_directory_uri(); ?>/img/apple-store.svg" />
              </a>
            </li>
            <li>
              <a href="" target="_blank">
                <img src="<?= get_template_directory_uri(); ?>/img/google-play.svg" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="right-area">
      <div class="main-text" data-aos="fade-left">
        <h2>Resolva sua vida direto pelo app Neon!</h2>
        <ul>
          <li>
            <div class="info">
              <img src="<?= get_template_directory_uri(); ?>/img/icon-cartao-credito.svg" " class=" icon" />
              <div class="text">
                <h3>Cartão de crédito sem anuidade</h3>
                <p>
                  Conta digital com cartão de crédito sem anuidade e sem
                  complicação
                </p>
              </div>
            </div>
            <img src="<?= get_template_directory_uri(); ?>/img/arrow-right.svg" />
          </li>
          <li>
            <div class="info">
              <img src="<?= get_template_directory_uri(); ?>/img/icon-taxas.svg" class="icon" />
              <div class="text">
                <h3>Sem taxas</h3>
                <p>
                  Transferências, boletos de depósito e outros serviços
                  gratuitos
                </p>
              </div>
            </div>
            <img src="<?= get_template_directory_uri(); ?>/img/arrow-right.svg" />
          </li>
          <li>
            <div class="info">
              <img src="<?= get_template_directory_uri(); ?>/img/icon-investimentos.svg" class="icon" />
              <div class="text">
                <h3>Mais investimentos</h3>
                <p>
                  Rendem mais que a poupança e você resgata quando quiser
                </p>
              </div>
            </div>
            <img src="<?= get_template_directory_uri(); ?>/img/arrow-right.svg" />
          </li>
        </ul>
        <a href="" class="btn">Conheça outros produtos</a>
      </div>
      <div class="box-card" data-aos="fade-left">
        <div class="text">
          <h2>Neon Pejota</h2>
          <h3>Contas digitais PJ gratuitas para decolar seu negócio!</h3>
          <p>
            As melhores contas para fazer pagamentos, compras e receber dos
            seus clientes.
          </p>
          <div class="btns">
            <button class="btn-primary">Sou MEI</button>
            <button class="btn-primary">SOU ME</button>
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
        <span>Prático, fácil, moderno</span>Você resolve tudo sem estresse
        😊
      </h2>
      <div class="swiper-pagination"></div>
    </div>
    <!-- Swiper -->
    <div class="slide-testimonials" data-aos="fade-up">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="card-testimonial">
            <div class="user">
              <strong>@marciogurka</strong>
              <img src="<?= get_template_directory_uri(); ?>/img/icon-twiiter.svg" />
            </div>
            <p>
              Valeu @banconenon! Linda embalagem e o cartão tbm é lindo!
              Muito amor por esse banco #bancoNeon
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-testimonial">
            <div class="user">
              <strong>@kleriene18</strong>
              <img src="<?= get_template_directory_uri(); ?>/img/icon-twiiter.svg" />
            </div>
            <p>
              Eu uso o Neon pra render o pouquinho que eu tenho. Como disse
              minha amiga Bruna, um dia eu abro o app de novo e PA: tô rica.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-testimonial">
            <div class="user">
              <strong>@mzltweet</strong>
              <img src="<?= get_template_directory_uri(); ?>/img/icon-twiiter.svg" />
            </div>
            <p>
              Só por ter um cartão virtual com bloqueio fácil no app, já
              ganha e muito na segurançã pro cliente.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-testimonial">
            <div class="user">
              <strong>@marciogurka</strong>
              <img src="<?= get_template_directory_uri(); ?>/img/icon-twiiter.svg" />
            </div>
            <p>
              Valeu @banconenon! Linda embalagem e o cartão tbm é lindo!
              Muito amor por esse banco #bancoNeon
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-testimonial">
            <div class="user">
              <strong>@kleriene18</strong>
              <img src="<?= get_template_directory_uri(); ?>/img/icon-twiiter.svg" />
            </div>
            <p>
              Eu uso o Neon pra render o pouquinho que eu tenho. Como disse
              minha amiga Bruna, um dia eu abro o app de novo e PA: tô rica.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-testimonial">
            <div class="user">
              <strong>@mzltweet</strong>
              <img src="<?= get_template_directory_uri(); ?>/img/icon-twiiter.svg" />
            </div>
            <p>
              Só por ter um cartão virtual com bloqueio fácil no app, já
              ganha e muito na segurançã pro cliente.
            </p>
          </div>
        </div>
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
get_footer();
