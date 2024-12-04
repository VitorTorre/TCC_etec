<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="22-11-2024/imgs/logo-Dybit-3.jpg" type="x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="22-11-2024/TCC Definitivo(index).css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css">
    <script src="22-11-2024/TCC Definitivo(index).js" defer></script>


    <title>Biblioteca dinâmica</title>
    <meta name="title" content="library">
    <meta name="description" content="dynamic library">


    <link rel="preload" as="image" href="22-11-2024/imgs/logo-Dybit-3.jpg">
    <link rel="preload" as="image" href="22-11-2024/imgs/logo-Dybit-3.jpg">
    <link rel="preload" as="image" href="https://www.designi.com.br/images/preview/11266970.jpg">


</head>

<body id="top">

    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Biblioteca dinâmica</p>
    </div>

    <div class="topbar">
        <div class="container">
    
          <address class="topbar-item">
            <div class="icon">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
            </div>
    
            <span class="span">
              Endereço: São josé Dos Campos
            </span>
          </address>
    
          <div class="separator"></div>


          <div class="topbar-item item-2">
          <div class="icon">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
          </div>

          <span class="span">Texto</span>
        </div>

        <a href="Telefone:(00)0000-000" class="topbar-item link">
        <div class="icon">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+1 123 456789</span>
    </a>

    <div class="separator"></div>

    <a href="biblioteca:dinamica1414@gmail.com" class="topbar-item link">
        <div class="icon">
        <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">biblioteca1414@gmail.com</span>
    </a>

    </div>
  </div>


  <header class="header" data-header>
    <div class="container">

        <a href="#" class="logo">
            <img src="img.jpg" width="160" height="50" alt="Biblioteca dinâmica - Home">
        </a>

        <nav class="navbar" data-navbar>

            <button class="close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>

            <a href="#" class="logo">
                <img src="22-11-2024/imgs/logo-Dybit-2.jpg" width="160" height="50" alt="Biblioteca dinâmica - Home">
            </a>

            <ul class="navbar-list">

              <li class="navbar-item">
                <a href="home-Dybit.html" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Home</span>
                </a>
              </li>

              <li class="navbar-item">
                <a href="sobre.html" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Sobre</span>
                </a>
              </li>

              <li class="navbar-item">
                <a href="listagem-de-livros.html" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Livros</span>
                </a>
              </li>

              <li class="navbar-item">
                <a href="contatos.html" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Contato</span>
                </a>
              </li>

              <li class="navbar-item">
                <a href="reading-books.html" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Dinamismo</span>
                </a>
              </li>

            </ul>

            <div class="text-center">
                <p class="headline-1 navbar-title">Visite-nos</p>

                <address class="body-4">
                    Biblioteca, SJC <br>
                    Brasil
                </address>

                <p class="body-4 navbar-text">Horario: das 10:00 as 19:00</p>

                <a href="biblioteca:dinamica1414@gmail.com" class="body-4 sidebar-link">biblioteca:dinamica1414@gmail.com</a>

                <div class="separator"></div>

                <p class="contacat-label">Requisito de livros</p>

                <a href="tel:+546474567657657" class="body-1 contact-number hover-underline"> +88-123-123456</a>
            </div>
        </nav>

        <a href="Libary view.html" class="btn btn-secondary">
            <span class="text text-1">Ver livros</span>

            <span class="text text-2" aria-hidden="true">Ver livros</span>
        </a>
        <a href ="count-user.php" class="btn btn-secondary">
         <span class="text text-4 "aria-hidden="true" ty><svg xmlns="http://www.w3.org/2000/svg" 
          width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
          </svg> <i class="bi bi-person-fill"></i>
        <br>
        <form action="/action_page.php" class="form-container"> 
        <h1>User()</h1>
        <label for="email"><b>Exibir quantidade de livros lido pelo usuario</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="psw"><b>Exibir quantidade de livros comprado pelo usuario</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
        </div>
        
       </span>
      </a>

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler="">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <main>
    <article>


      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>
            
            <li class="slider-item active" data-hero-slider-item>

                <div class="slider-bg">
                    <img src="22-11-2024/imgs/entrada-libery.png" width="1880" height="950" alt="" class="img-cover">
                </div>

                <p class="label-2 section-subtitle slider-reveal">O poder da leitura</p>

                <h1 class="display-1 hero-title sider-reveal">
                    O poder da leitura <br>
                    Transforma mentes
                </h1>

                <p class="body-2 hero-text slider-reveal">
                    Elevando a leitura online á um outro nível
                </p>

                <a href="#" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Veja nossos serviços</span>

                    <span class="text text-2" aria-hidden="true">Veja nossos serviços</span>
                </a>

            </li>

            <li class="slider-item" data-hero-slider-item>

                <div class="slider-bg">
                    <img src="22-11-2024/imgs/espaço-de-leitura.png" width="1880" height="950" alt="" class="img-cover">
                </div>

                <p class="label-2 section-subtitle slider-reveal">Biblioteca dinâmica</p>

                <h1 class="display-1 hero-title slider-reveal">
                   Descubra os benefícios de ler um livro de qualidade
                </h1>

                <p class="body-2 hero-text slider-reveal">
                    Adiquira conhecimento
                </p>

                <a href="Libary view.html" class="btn btn-primary slider-reveal">
                    <span class="text text-1">Ver livros</span>

                    <span class="text text-2" aria-hidden="true">Ver livros</span>
                </a>
                <button class="slider-btn next" aria-label="slide to next" data-next-btn>
                <ion-icon name="chevron-forward"></ion-icon>

                <a href="Libary view.html" class="btn btn-primary slider-reveal">
                    <span class="text text-1">
                      <img src="22-11-2024/imgs/user.png" alt="">User</span>

                    <span class="text text-2" aria-hidden="true">Ver livros</span>
                </a>
                </button>
            </li>


        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
            <ion-icon name="chevron-back"></ion-icon>
          </button>
  
          <button class="slider-btn next" aria-label="slide to next" data-next-btn>
            <ion-icon name="chevron-forward"></ion-icon>
          </button>
  
          <a href="#" class="hero-btn has-after">
            <img src="22-11-2024/imgs/Impacto-da-leitura.png" width="48" height="48" alt="booking icon">
      
                <span class="label-2 text-center span">Livros</span>
              </a>

        </section>


        <section class="section service bg-black-10 text-center" aria-label="service">
            <div class="container">
    
              <p class="section-subtitle label-2">Proposta do projeto</p>
    
              <h2 class="headline-1 section-title">Incentivo a leitura</h2>
    
              <p class="section-text">
                Bem-vindo à Dybit Explore, pesquise e descubra milhares de livros e recursos. Cadastre-se, acesse conteúdos exclusivos, consulte horários, eventos e renove seus empréstimos online com facilidade.
              </p>
    
              <ul class="grid-list">
    
                <li>
                  <div class="service-card">
    
                    <a href="#" class="has-before hover:shine">
                      <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                        <img src="22-11-2024/imgs/entrada-libery.png" width="285" height="336" loading="lazy" alt="Breakfast"
                          class="img-cover">
                      </figure>
                    </a>
    
                    <div class="card-content">
    
                      <h3 class="title-4 card-title">
                        <a href="#">Saiba mais</a>
                      </h3>
    
                      <a href="#" class="btn-text hover-underline label-2">Ver menu</a>
    
                    </div>
    
                  </div>
                </li>
    
                <li>
                  <div class="service-card">
    
                    <a href="#" class="has-before hover:shine">
                      <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                        <img src="22-11-2024/imgs/espaço-de-leitura.png" width="285" height="336" loading="lazy" alt="Appetizers"
                          class="img-cover">
                      </figure>
                    </a>
    
                    <div class="card-content">
    
                      <h3 class="title-4 card-title">
                        <a href="#">Appetizers</a>
                      </h3>
    
                      <a href="#" class="btn-text hover-underline label-2">View Menu</a>
    
                    </div>
    
                  </div>
                </li>
    
                <li>
                  <div class="service-card">
    
                    <a href="#" class="has-before hover:shine">
                      <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                        <img src="22-11-2024/imgs/Impacto-da-leitura.png" width="285" height="336" loading="lazy" alt="Drinks"
                          class="img-cover">
                      </figure>
                    </a>
    
                    <div class="card-content">
    
                      <h3 class="title-4 card-title">
                        <a href="#">Titulo</a>
                      </h3>
    
                      <a href="#" class="btn-text hover-underline label-2">Ver livros</a>
    
                    </div>
    
                  </div>
                </li>
    
              </ul>
    
              <img src="Imagens TCC/_5cf7229f-48d1-4df5-b512-0193eee9d069.jpeg" width="246" height="412" loading="lazy" alt="shape"
                class="shape shape-1 move-anim">
              <img src="Imagens TCC/img.jpg" width="343" height="345" loading="lazy" alt="shape"
                class="shape shape-2 move-anim">
    
            </div>
          </section>


          <section class="section about text-center" aria-labelledby="about-label" id="about">
            <div class="container">
    
              <div class="about-content">
    
                <p class="label-2 section-subtitle" id="about-label">Historia</p>
    
                <h2 class="headline-1 section-title">Como surgiu</h2>
    
                <p class="section-text">
                 A Biblioteca dinâmica nasceu em fevereiro de 2024 com o objetivo de incntivar,
                 melhorar e remodelar a leitura online, e dar uma nova visão as bibliotecas.
                </p>
    
                <div class="contact-label">telefone para contato</div>
    
                <a href="tel:+804001234567" class="body-1 contact-number hover-underline">+55 (12) 123 4567</a>
    
                <a href="#" class="btn btn-primary">
                  <span class="text text-1">Ler mais</span>
    
                  <span class="text text-2" aria-hidden="true">Ler mais</span>
                </a>
    
              </div>
    
              <figure class="about-banner">
    
                <img src="Imagens TCC/_livro3.jpg" width="570" height="570" loading="lazy" alt="about banner"
                  class="w-100" data-parallax-item data-parallax-speed="1">
    
                <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
                  <img src="Imagens TCC/_livro8.jpg" width="285" height="285" loading="lazy" alt=""
                    class="w-100">
                </div>
    
    
              </figure>
    
              <img src="Imagens TCC/_livro_o_poder_do_agora.jpg" width="197" height="194" loading="lazy" alt="" class="shape">
    
            </div>
          </section>



          <section class="special-dish text-center" aria-labelledby="dish-label">

            <div class="special-dish-banner">
              <img src="Imagens TCC/_livro10.jpeg" width="940" height="900" loading="lazy" alt="special dish"
                class="img-cover">
            </div>
    
            <div class="special-dish-content bg-black-10">
              <div class="container">
    
                <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img">
    
                <p class="section-subtitle label-2">Ofertas especiais</p>
    
                <h2 class="headline-1 section-title">Livro o poder do hábito</h2>
    
                <p class="section-text">
                  Aproveite essa promoção por tempo limitado
                </p>
    
                <div class="wrapper">
                  <del class="del body-3">De R$40.00</del>
    
                  <span class="span body-1">Por apenas R$20.00</span>
                </div>
    
                <a href="#" class="btn btn-primary">
                  <span class="text text-1">Obter livro</span>
    
                  <span class="text text-2" aria-hidden="true">Obter livro</span>
                </a>
    
              </div>
            </div>
    
            <img src="Imagens TCC/_livro_o_poder_do_agora.jpg" width="179" height="359" loading="lazy" alt="" class="shape shape-1">
    
            <img src="Imagens TCC/_livro11.jpg" width="351" height="462" loading="lazy" alt="" class="shape shape-2">
    
          </section>
    

          <section class="section menu" aria-label="menu-label" id="menu">
            <div class="container">
    
              <p class="section-subtitle text-center label-2">Seleção especial</p>
    
              <h2 class="headline-1 section-title text-center">Livros best-sellers</h2>
    
              <ul class="grid-list">
    
                <li>
                  <div class="menu-card hover:card">
    
                    <figure class="card-banner img-holder" style="--width: 40; --height: 40;">
                      <img src="Imagens TCC/_livro2.jpg" width="40" height="40" loading="lazy" alt="O poder da mente milhonária"
                        class="img-cover">
                    </figure>
    
                    <div>
    
                      <div class="title-wrapper">
                        <h3 class="title-3">
                          <a href="#" class="card-title">Os segredos da mente milhonária</a>
                        </h3>
    
                        <span class="badge label-1">Sazonal</span>
    
                        <span class="span title-2">$25.50</span>
                      </div>
    
                      <p class="card-text label-1">
                       Desenvolva uma mente de sucesso, aprenda a lidar com as adversidades
                       e prospere na vida com este best-seller.
                      </p>
    
                    </div>
    
                  </div>
                </li>
    
                <li>
                  <div class="menu-card hover:card">
    
                    <figure class="card-banner img-holder" style="--width: 70; --height: 70;">
                      <img src="Imagens TCC/_livro4.jpg" width="70" height="70" loading="lazy" alt="Lasagne"
                        class="img-cover">
                    </figure>
    
                    <div>
    
                      <div class="title-wrapper">
                        <h3 class="title-3">
                          <a href="#" class="card-title">1984</a>
                        </h3>
    
                        <span class="span title-2">$40.00</span>
                      </div>
    
                      <p class="card-text label-1">
                        1984 mostra uma futura realidade distópica ocorrida no ano de 1984. 
                        Nessa realidade, a Inglaterra é comandada por um regime totalitarista 
                        em que todos são vigiados pelo Grande Irmão. Winston Smith.
                      </p>
    
                    </div>
    
                  </div>
                </li>
    
                <li>
                  <div class="menu-card hover:card">
    
                    <figure class="card-banner img-holder" style="--width: 30; --height: 30;">
                      <img src="Imagens TCC/_livro9.jpg" width="30" height="40" loading="lazy" alt="Butternut Pumpkin"
                        class="img-cover">
                    </figure>
    
                    <div>
    
                      <div class="title-wrapper">
                        <h3 class="title-3">
                          <a href="#" class="card-title">Principios milenares</a>
                        </h3>
    
                        <span class="span title-2">$10.00</span>
                      </div>
    
                      <p class="card-text label-1">
                        Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.
                      </p>
    
                    </div>
    
                  </div>
                </li>
    
                <li>
                  <div class="menu-card hover:card">
    
                    <figure class="card-banner img-holder" style="--width: 30; --height: 30;">
                      <img src="Imagens TCC/_livro6.jpg" width="30" height="30" loading="lazy" alt="Tokusen Wagyu"
                        class="img-cover">
                    </figure>
    
                    <div>
    
                      <div class="title-wrapper">
                        <h3 class="title-3">
                          <a href="#" class="card-title">Tokusen Wagyu</a>
                        </h3>
    
                        <span class="badge label-1">New</span>
    
                        <span class="span title-2">$39.00</span>
                      </div>
    
                      <p class="card-text label-1">
                        Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.
                      </p>
    
                    </div>
    
                  </div>
                </li>
    
                <li>
                  <div class="menu-card hover:card">
    
                    <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                      <img src="Imagens TCC/_livro11.jpg" width="100" height="100" loading="lazy" alt="Olivas Rellenas"
                        class="img-cover">
                    </figure>
    
                    <div>
    
                      <div class="title-wrapper">
                        <h3 class="title-3">
                          <a href="#" class="card-title">Olivas Rellenas</a>
                        </h3>
    
                        <span class="span title-2">$25.00</span>
                      </div>
    
                      <p class="card-text label-1">
                        Avocados with crab meat, red onion, crab salad stuffed red bell pepper and green bell pepper.
                      </p>
    
                    </div>
    
                  </div>
                </li>
    
                <li>
                  <div class="menu-card hover:card">
    
                    <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                      <img src="Imagens TCC/_loader2.gif" width="100" height="100" loading="lazy" alt="Opu Fish"
                        class="img-cover">
                    </figure>
    
                    <div>
    
                      <div class="title-wrapper">
                        <h3 class="title-3">
                          <a href="#" class="card-title">Opu Fish</a>
                        </h3>
    
                        <span class="span title-2">$49.00</span>
                      </div>
    
                      <p class="card-text label-1">
                        Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                      </p>
    
                    </div>
    
                  </div>
                </li>
    
              </ul>
    
              <p class="menu-text text-center">
                During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
              </p>
    
              <a href="#" class="btn btn-primary">
                <span class="text text-1">View All Menu</span>
    
                <span class="text text-2" aria-hidden="true">View All Menu</span>
              </a>
    
              <img src="" width="921" height="1036" loading="lazy" alt="shape"
                class="shape shape-2 move-anim">
              <img src="Imagens TCC/logo_temp.png" width="343" height="345" loading="lazy" alt="shape"
                class="shape shape-3 move-anim">
    
            </div>
          </section>


          <section class="section testi text-center has-bg-image"
        style="background-image: url('_5cf7229f-48d1-4df5-b512-0193eee9d069.jpeg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">”</div>

          <p class="headline-2 testi-text">
           " Os livros aqui são bons e interessantes para ler, prendem a atenção e tornam a leitura mais agradável e atrativa"
          </p>
          <br><br><br><br><br><br><br><br>
          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="Imagens TCC/_logo.png" width="100" height="100" loading="lazy" alt="Sam Jhonson"
              class="img">

            <p class="label-2 profile-name">Emmananuel Fernandes</p>
          </div>

        </div>
      </section>

      <!-- reservas  -->

      <section class="reservation">
        <div class="container">

          <div class="form reservation-form bg-black-10">

            <form action="" class="form-left">

              <h2 class="headline-1 text-center">Visitas online</h2>

              <p class="form-text text-center">
                Agendar visitas <a href="tel:+88123123456" class="link">+88-123-123456</a>
                ou ver nossas filiais
              </p>

              <div class="input-wrapper">
                <input type="text" name="name" placeholder="Seu Nome" autocomplete="off" class="input-field">

                <input type="tel" name="phone" placeholder="Telefone" autocomplete="off" class="input-field">
              </div>

              <div class="input-wrapper">

                <div class="icon-wrapper">
                  <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                  <select name="person" class="input-field">
                    <option value="1-person">1 Pessoa</option>
                    <option value="2-person">2 Pessoas</option>
                    <option value="3-person">3 Pessoas</option>
                    <option value="4-person">4 Pessoas</option>
                    <option value="5-person">5 Pessoas</option>
                    <option value="6-person">6 Pessoas</option>
                    <option value="7-person">7 Pessoas</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                  <input type="date" name="reservation-date" class="input-field">

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <select name="person" class="input-field">
                    <option value="08:00am">08 : 00 am</option>
                    <option value="09:00am">09 : 00 am</option>
                    <option value="010:00am">10 : 00 am</option>
                    <option value="011:00am">11 : 00 am</option>
                    <option value="012:00am">12 : 00 am</option>
                    <option value="01:00pm">01 : 00 pm</option>
                    <option value="02:00pm">02 : 00 pm</option>
                    <option value="03:00pm">03 : 00 pm</option>
                    <option value="04:00pm">04 : 00 pm</option>
                    <option value="05:00pm">05 : 00 pm</option>
                    <option value="06:00pm">06 : 00 pm</option>
                    <option value="07:00pm">07 : 00 pm</option>
                    <option value="08:00pm">08 : 00 pm</option>
                    <option value="09:00pm">09 : 00 pm</option>
                    <option value="10:00pm">10 : 00 pm</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

              </div>

              <textarea name="message" placeholder="Mensagem" autocomplete="off" class="input-field"></textarea>

              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">Agendar visita</span>

                <span class="text text-2" aria-hidden="true">Agendar visita</span>
              </button>

            </form>

            <div class="form-right text-center" style="background-image: url('_loader.gif')">

              <h2 class="headline-1 text-center">Entre em contato</h2>

              <p class="contact-label">Booking Request</p>

              <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+88-123-123456</a>

              <div class="separator"></div>

              <p class="contact-label">Localização</p>

              <address class="body-4">
                Restaurant St, Delicious City, <br>
                London 9578, UK
              </address>

              <p class="contact-label">Horário de funcionamento</p>

              <p class="body-4">
                Monday to Sunday <br>
                11.00 am - 2.30pm
              </p>

              <p class="contact-label">Rodízio de livros</p>

              <p class="body-4">
                Monday to Sunday <br>
                05.00 pm - 10.00pm
              </p>

            </div>

          </div>

        </div>
      </section>

      <!-- features -->

      <section class="section features text-center" aria-label="features">
        <div class="container">

          <p class="section-subtitle label-2">Qual o valor dos nossos serviços?</p>

          <h2 class="headline-1 section-title">Nossas principais qualidades</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="Imagens TCC/_livro_o_poder_do_agora.jpg" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Livros de qualidade</h3>

                <p class="label-1 card-text">Os melhores titúlos do mercado você encontra aqui</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="Imagens TCC/_5cf7229f-48d1-4df5-b512-0193eee9d069.jpeg" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Serviço dinâmico</h3>

                <p class="label-1 card-text">Prestativo e compreensivo</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="Imagens TCC/_livro2.jpg" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Livros de autoajuda</h3>

                <p class="label-1 card-text">Desenvolva sua mentalidade para ter suceso na vida</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="Imagens TCC/Offer.jpg" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Eventos e ofertas</h3>

                <p class="label-1 card-text">Sempre as melhores ofertas selecionadas para você</p>

              </div>
            </li>

          </ul>

          <img src="Imagens TCC/_livro_o_poder_do_agora.jpg" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="Imagens TCC/_loader.gif" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section>

      <!-- Eventos -->

      <section class="section event bg-black-10" aria-label="event">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Ultimas atualizações</p>

          <h2 class="section-title headline-1 text-center">Evento best-seller</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="https://m.media-amazon.com/images/I/61t0bwt1s3L._AC_UF1000,1000_QL80_.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-15">15/09/2022</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">1984, george orwell</p>

                  <h3 class="card-title title-2 text-center">
                   De R$ 23,00 por apenas R$15,00
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="Imagens TCC/_livro10.jpeg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-08">08/09/2022</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">O poder do hábito</p>

                  <h3 class="card-title title-2 text-center">
                   De R$ 35,00 por apenas R$20,00
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="Imagens TCC/_livro9.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-03">03/09/2022</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Principios milenares</p>

                  <h3 class="card-title title-2 text-center">
                   De R$ 30,00 por apenas R$15,00
                  </h3>
                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Ver livros</span>

            <span class="text text-2" aria-hidden="true">Ver livros</span>
          </a>

        </div>
      </section>

    </article>
  </main>

  <!--Footer-->


  <footer class="footer section has-bg-image text-center"
  style="background-image: url('imagens_restaurante/footer-bg.jpg')">
  <div class="container">

    <div class="footer-top grid-list">

      <div class="footer-brand has-before has-after">

        <a href="#" class="logo">
          <img src="Imagens TCC/img.jpg" width="160" height="50" loading="lazy" alt="grilli home">
        </a>

        <address class="body-4">
          Restaurant St, Delicious City, London 9578, UK
        </address>

        <a href="mailto:booking@grilli.com" class="body-4 contact-link">booking@grilli.com</a>

        <a href="tel:+88123123456" class="body-4 contact-link">Booking Request : +88-123-123456</a>

        <p class="body-4">
          Open : 09:00 am - 01:00 pm
        </p>

        <div class="wrapper">
          <div class="separator"></div>
          <div class="separator"></div>
          <div class="separator"></div>
        </div>

        <p class="title-1">Receba Noticías e Ofertas</p>

        <p class="label-1">
          Inscreva-se e ganhe <span class="span">25% de desconto.</span>
        </p>

        <form action="" class="input-wrapper">
          <div class="icon-wrapper">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

            <input type="email" name="email_address" placeholder="Seu email" autocomplete="off" class="input-field">
          </div>

          <button type="submit" class="btn btn-secondary">
            <span class="text text-1">Inscrever-se</span>

            <span class="text text-2" aria-hidden="true">Inscrever-se</span>
          </button>
        </form>

      </div>

      <ul class="footer-list">

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Home</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Menus</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Sobre</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Our Chefs</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Contact</a>
        </li>

      </ul>

      <ul class="footer-list">

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
        </li>

        <li>
          <a href="#" class="label-2 footer-link hover-underline">Google Map</a>
        </li>

      </ul>

    </div>

  </div>
</footer>

     <!--Voltar para o topo -->

     <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
      </a>
    
   
  
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>