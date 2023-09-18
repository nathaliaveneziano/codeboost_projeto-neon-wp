<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./img/favicon.png" type="image/png" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Swiper CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link rel="stylesheet" href="./css/main.min.css" />

    <!-- Primary Meta Tags -->
    <title>Redesign Neon — Landing Page Codeboost</title>
    <meta name="title" content="Redesign Neon — Landing Page Codeboost" />
    <meta
      name="description"
      content="A conta digital certa pra cuidar bem do seu dinheiro" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://metatags.io/" />
    <meta
      property="og:title"
      content="Redesign Neon — Landing Page Codeboost" />
    <meta
      property="og:description"
      content="A conta digital certa pra cuidar bem do seu dinheiro" />
    <meta
      property="og:image"
      content="https://nathaliaveneziano.github.io/codeboost_projeto-neon/share-img.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://metatags.io/" />
    <meta
      property="twitter:title"
      content="Redesign Neon — Landing Page Codeboost" />
    <meta
      property="twitter:description"
      content="A conta digital certa pra cuidar bem do seu dinheiro" />
    <meta
      property="twitter:image"
      content="https://nathaliaveneziano.github.io/codeboost_projeto-neon/share-img.png" />
  </head>
  <body>
    <header>
      <div class="container">
        <a href="" class="logo"><img src="./img/logo.svg" alt="Logo Neon" /></a>
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
            <img src="./img/btn-mobile.svg" alt="" />
          </button>
        </nav>
      </div>
    </header>

    <section class="s-hero">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h3>Abra sua conta, é só baixar o app!</h3>
          <h1>A conta digital certa pra cuidar bem do seu dinheiro</h1>
          <button class="btn-primary">Abra sua conta digital</button>
          <ul>
            <li>
              <div class="icon">
                <img
                  src="./img/icon-anuidade.svg"
                  alt="Ícone de cartão sem anuidade" />
              </div>
              <span
                >Cartão sem <br />
                anuidade</span
              >
            </li>
            <li>
              <div class="icon">
                <img
                  src="./img/icon-conta-digital.svg"
                  alt="Ícone de conta digital" />
              </div>
              <span
                >Conta digital <br />
                100% grátis</span
              >
            </li>
            <li>
              <div class="icon">
                <img src="./img/icon-dinheiro.svg" alt="Ícone de " />
              </div>
              <span
                >Seu dinheiro <br />
                rendendo mais</span
              >
            </li>
          </ul>
        </div>

        <div class="area-image">
          <h2 data-aos="fade-left">Banco 100% digital</h2>
          <div class="image" data-aos="zoom-in">
            <img src="./img/card-neon-frnt.png" class="card-front" />
            <img src="./img/card-neon-back.png" class="card-back" />
            <img src="./img/circle-cards-neon.svg" class="circle" />
          </div>
        </div>
      </div>
    </section>

    <section class="s-card-neon">
      <div class="container">
        <div class="left-area">
          <div class="ilustra-mockup">
            <img
              src="./img/circle-mockup.svg"
              class="circle"
              data-aos="fade-left" />
            <img src="./img/mockup.svg" data-aos="flip-left" />
          </div>
          <div class="text-area" data-aos="fade-up">
            <div class="icon">
              <img src="./img/icon-neon.svg" />
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
                    <img src="./img/apple-store.svg" />
                  </a>
                </li>
                <li>
                  <a href="" target="_blank">
                    <img src="./img/google-play.svg" />
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
                  <img src="./img/icon-cartao-credito.svg" " class="icon" />
                  <div class="text">
                    <h3>Cartão de crédito sem anuidade</h3>
                    <p>
                      Conta digital com cartão de crédito sem anuidade e sem
                      complicação
                    </p>
                  </div>
                </div>
                <img src="./img/arrow-right.svg" />
              </li>
              <li>
                <div class="info">
                  <img src="./img/icon-taxas.svg" class="icon" />
                  <div class="text">
                    <h3>Sem taxas</h3>
                    <p>
                      Transferências, boletos de depósito e outros serviços
                      gratuitos
                    </p>
                  </div>
                </div>
                <img src="./img/arrow-right.svg" />
              </li>
              <li>
                <div class="info">
                  <img src="./img/icon-investimentos.svg" class="icon" />
                  <div class="text">
                    <h3>Mais investimentos</h3>
                    <p>
                      Rendem mais que a poupança e você resgata quando quiser
                    </p>
                  </div>
                </div>
                <img src="./img/arrow-right.svg" />
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
            <img src="./img/card-front-pj.svg" class="image" />
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
                  <img src="./img/icon-twiiter.svg" />
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
                  <img src="./img/icon-twiiter.svg" />
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
                  <img src="./img/icon-twiiter.svg" />
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
                  <img src="./img/icon-twiiter.svg" />
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
                  <img src="./img/icon-twiiter.svg" />
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
                  <img src="./img/icon-twiiter.svg" />
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
                <img src="./img/icon-cartao-internacional.svg" />
              </div>
              <div class="info">
                <h4>Cartão visa internacional</h4>
                <p>Tenha facilidades e benefícios para o seu dia a dia.</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <img src="./img/icon-taxa-zero.svg" />
              </div>
              <div class="info">
                <h4>Zero mensalidade e anuidade</h4>
                <p>Não gaste grana pagando taxas desnecessárias.</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <img src="./img/icon-poupanca.svg" />
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
          <img src="./img/mockup-01.svg" class="mockup-01" data-aos="fade-up" />
          <img
            src="./img/mockup-02.png"
            class="mockup-02"
            data-aos="fade-down" />
          <img
            src="./img/circle-conta-digital.svg"
            class="circle"
            data-aos="zoom-in" />
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="top">
          <img src="./img/logo.svg" alt="" />
          <div class="share">
            <span>Acompanhe nas redes</span>
            <ul>
              <li>
                <a href=""><img src="./img/youtube.svg" alt="" /></a>
              </li>
              <li>
                <a href=""><img src="./img/linkedin.svg" alt="" /></a>
              </li>
              <li>
                <a href=""><img src="./img/facebook.svg" alt="" /></a>
              </li>
              <li>
                <a href=""><img src="./img/instagram.svg" alt="" /></a>
              </li>
              <li>
                <a href=""><img src="./img/twitter-white.svg" alt="" /></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="main">
          <nav>
            <div class="item">
              <strong>Produtos Neon</strong>
              <ul>
                <li><a href="">Cartão de crédito</a></li>
                <li><a href="">Cartão pré-pago</a></li>
                <li><a href="">Neon Mais</a></li>
                <li><a href="">Investimentos</a></li>
                <li><a href="">Empréstimo</a></li>
              </ul>
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
            <button>
              <img src="./img/envelope.svg" alt="" />
              <div class="info">
                <strong>Atendimento:</strong>
                <span>oi@neon.com.br (24 horas)</span>
              </div>
            </button>
            <button>
              <img src="./img/chat.svg" alt="" />
              <div class="info">
                <strong>Imprensa:</strong>
                <span>imprensa@neon.com.br</span>
              </div>
            </button>
          </div>
        </div>
        <div class="msg">
          <div class="icon">😀</div>
          <p>
            Oi! Leu até aqui? Você se preocupa com os mínimos detalhes, mesmo. A
            gente também. Por isso o time Neon está sempre trabalhando para
            fazer a conta digital perfeita para você ;)
          </p>
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
  </body>
</html>
