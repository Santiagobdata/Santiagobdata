<!DOCTYPE html>
<html lang="en">
	<head>
		<title>DATADRIVEN</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=5.0"/>
    <meta name="description" content="Author: Datadriven, Category: Webdesign"/>
    <meta name="theme-color" content="#141414"/>
    
    <script type="text/javascript" src="<?php bloginfo ('template_directory'); ?>/styles/main.js"></script>
    <script type="text/javascript" src="<?php bloginfo ('template_directory'); ?>/styles/slider.js"></script>
    <script type="text/javascript" src="<?php bloginfo ('template_directory'); ?>/styles/ui.js"></script>
    <script type="text/javascript" src="<?php bloginfo ('template_directory'); ?>/styles/three.module.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo ('template_directory'); ?>/styles/twenn.js"></script>


		<link type="text/css" rel="stylesheet" href="<?php bloginfo ('template_directory'); ?>/styles/styles.css"/>
		<link type="text/css" rel="stylesheet" href="<?php bloginfo ('template_directory'); ?>/styles/slider.css"/>
		<link type="text/css" rel="stylesheet" href="<?php bloginfo ('template_directory'); ?>/styles/components.css"/>
    <link rel="icon" type="image/png" href="<?php bloginfo ('template_directory'); ?>/resources/images/favicon.ico"/>
	</head>
	<body>
    <!-- MAIN UI ELEMENTS -->
    <main class="ui-wrapper page-not-loaded">
      <!-- LOADER -->
      <div class="loader flex flex--center">
        <span class="loader__text">DATADRIVEN</span>
      </div>
      <!-- MAIN MENU -->
      <div class="menu">
        <ul class="menu-list">
          <li class="menu-list__item" data-page="1">NOSOTROS</li>
          <li class="menu-list__item" data-page="2">SERVICIOS</li>
          <li class="menu-list__item" data-page="3">CONOCE NUESTRO EQUIPO</li>
          <li class="menu-list__item" data-page="4">PORTAFOLIO</li>
          <li class="menu-list__item" data-page="5">CONTACTANOS</li>
        </ul>
      </div>
      <!-- VIDEO POPUP -->
      <div class="popup" data-popup="video">
        <div class="popup__inner video__inner">
          <iframe id="video" width="100%" height="100%" src="https://www.youtube.com/watch?v=5lP9MhovDqg"></iframe>
          <!-- If you have Youtube video or any external video, use iframe above. Otherwise use video element below; -->
          <!-- <video id="video" src="./path-to-video"></video> -->
        </div>
      </div>
      <!-- OFFERS POPUP -->
      <div class="popup" data-popup="offers">
        <div class="popup__inner">
          <h2 class="popup__title">SERVICIOS</h2>
          <h2 class="popup__subtitle">Un poco de lo que hacemos</h2>
          <div class="popup__content popup__offers">
            <div class="popup__offer">
              <h3 class="popup__offer-title">Marketing</h3>
              <ul>
                <li>Facbook/Instagram ads</li>
                <li>Google ads</li>
                <li>Folletos</li>
                <li>Promocion productos o servicios</li>
              </ul>
            </div>
            <div class="popup__offer">
              <h3 class="popup__offer-title">Analytics</h3>
              <ul>
                <li>Google Analytics</li>
                <li>Firebase</li>
                <li>Data science</li>
                <li>Dashboard</li>
              </ul>
            </div>
            <div class="popup__offer">
              <h3 class="popup__offer-title">Growth</h3>
              <ul>
                <li>Growth Hacking</li>
                <li> Ideas de negocio</li>
                <li>Startups</li>
              </ul>
            </div>
            <div class="popup__offer">
              <h3 class="popup__offer-title">Research</h3>
              <ul>
                <li>Market research</li>
                <li>Competition reserach</li>
                <li>Product reserach</li>
              </ul>
            </div>
            <div class="popup__offer">
              <h3 class="popup__offer-title">Developing</h3>
              <ul>
                <li>Diseño WEB</li>
                <li>Apps WEB</li>
                <li>Apps Mobiles</li>
                <li>Bots</li>
                <li>Automatizaciones</li>
              </ul>
            </div>
            <div class="popup__offer">
              <h3 class="popup__offer-title">Diseño</h3>
              <ul>
                <li>Flyers</li>
                <li>Publicaciones</li>
                <li>Blogs</li>
                <li>Videos</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- TEAM POPUP -->
      <div class="popup" data-popup="team">
        <div class="popup__inner">
          <h2 class="popup__title">DETRAS DE DATADRIVEN</h2>
          <h3 class="popup__subtitle">Una buena compañia no existe sin buenas personas</h3>
          <div class="slider">
            <div class="slider__arrow slider__arrow-left slider__arrow--disabled" data-follow="centered_y">
              <img class="slider__arrow-icon" src="<?php bloginfo ('template_directory'); ?>/resources/images/icons/arrow.svg" alt="Arrow icon" />
            </div>
            <div class="slider__arrow slider__arrow-right" data-follow="centered_y">
              <img class="slider__arrow-icon" src="<?php bloginfo ('template_directory'); ?>/resources/images/icons/arrow.svg" alt="Arrow icon" />
            </div>
            <div class="slider__inner" id="slider">
              <div class="slider__item">
                <img class="slider__item-image" src="<?php bloginfo ('template_directory'); ?>/resources/images/persons/person1.jpg" alt="Team photo" />
                <div class="slider__item-content">
                  <h2 class="slider__item-name">Santiago Cardona</h2>
                  <h2 class="slider__item-position">CEO</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__item-image" src="<?php bloginfo ('template_directory'); ?>/resources/images/persons/person2.jpg" alt="Team photo" />
                <div class="slider__item-content">
                  <h2 class="slider__item-name">Carlos Garcia</h2>
                  <h2 class="slider__item-position">Direccion Marketing</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__item-image" src="<?php bloginfo ('template_directory'); ?>/resources/images/persons/person3.jpg" alt="Team photo" />
                <div class="slider__item-content">
                  <h2 class="slider__item-name"> Miguel Jimenez</h2>
                  <h2 class="slider__item-position">Direccion diseño</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__item-image" src="<?php bloginfo ('template_directory'); ?>/resources/images/persons/person4.jpg" alt="Team photo" />
                <div class="slider__item-content">
                  <h2 class="slider__item-name">XXXXX</h2>
                  <h2 class="slider__item-position">xxxx</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__item-image" src="<?php bloginfo ('template_directory'); ?>/resources/images/persons/person5.jpg" alt="Team photo" />
                <div class="slider__item-content">
                  <h2 class="slider__item-name">xxxxxx </h2>
                  <h2 class="slider__item-position">PRODUCTO</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__item-image" src="<?php bloginfo ('template_directory'); ?>/resources/images/persons/person6.jpg" alt="Team photo" />
                <div class="slider__item-content">
                  <h2 class="slider__item-name">xxxxx xxxx</h2>
                  <h2 class="slider__item-position">DESARROLLO</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ALL FIXED CONTENT (EG. HEADER, FOOTER) -->
      <!-- HEADER -->
      <header class="fixed-content-header">
        <div class="flex flex--center">
          <div class="burger" data-follow>
            <div class="burger__line"></div>
            <div class="burger__line"></div>
            <div class="burger__line"></div>
          </div>
          <div class="fixed-content-header__logo">DATADRIVEN</div>
        </div>
        <button class="fixed-content-header__contact button button--primary" data-follow data-page="5">CONTACTANOS</button>
      </header>
      <!-- PAGING -->
      <div class="fixed-content-paging">
        <div class="paging__page" data-page="0"></div>
        <div class="paging__page section--hidden" data-page="1"></div>
        <div class="paging__page section--hidden" data-page="2"></div>
        <div class="paging__page section--hidden" data-page="3"></div>
        <div class="paging__page section--hidden" data-page="4"></div>
        <div class="paging__page section--hidden" data-page="5"></div>
      </div>
      <!-- FOOTER -->
      <div class="fixed-content-footer">
        <div class="social-links">
          <a class="social-links__anchor" href="https://www.facebook.com/Datadrivenn/">
            <img class="social-links__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/socials/facebook.svg" alt="Facebook logo" width="20" height="20">
          </a>
          <a class="social-links__anchor" href="https://twitter.com/">
            <img class="social-links__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/socials/twitter.svg" alt="Twitter logo" width="20" height="20">
          </a>
          <a class="social-links__anchor" href="https://www.instagram.com/datadrivenn/">
            <img class="social-links__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/socials/instagram.svg" alt="Instagram logo" width="20" height="20">
          </a>
        </div>
        <div class="fixed-content-footer__copy">
          <span class="footer-copy__date"></span>
          <span class="footer-copy__name">DATADRIVEN</span>
        </div>
      </div>
      <!-- MAIN CONTENT -->
      <div class="content">
        <div class="content-section section--hidden" data-page="0">
          <div class="scroll-letters">
            <span class="scroll-letters__letter" title="S">S</span>
            <span class="scroll-letters__letter" title="C">C</span>
            <span class="scroll-letters__letter" title="R">R</span>
            <span class="scroll-letters__letter" title="O">O</span>
            <span class="scroll-letters__letter" title="L">L</span>
            <span class="scroll-letters__letter" title="L">L</span>
          </div>
        </div>
        <div class="content-section section--hidden" data-page="1">
          <h1 class="content-section__title">NOSOTROS</h1>
          <p class="content-section__text">Agencia de Marketing digital, Growth Hacking & Analitica de datos.
            Nos preocupamos por integrar a los negocios y emprendimientos de america latina a la era Digital 4.0,
            para lo cual se hace indispensable la transformacion digital atraves de tecnologias emergentes como Big Data & Growth Hacking,
            De igual forma nos apasiona los trabajos de alta calidad grafica, para lo cual utilizamos y brindamos a nuestros clientes
            trabajos de la mas alta calidad producidas en las ultimas herramientas de diseño actual.
            Ubicados en la ciudad de Manizales(Colombia)
            Nosotros somos <span class="emphasize">DATADRIVEN</span></p>
          <button class="content-section__button button button--icon" id="button_video">
            <img class="button__image" src="./resources/images/icons/play.svg" alt="Play icon"/>
            <span class="button__text">MIRA EL VIDEO</span>
          </button>
        </div>
        <div class="content-section section--hidden" data-page="2">
          <h1 class="content-section__title">QUE OFRECEMOS</h1>
          <p class="content-section__text">Ofrecemos gran cantidad de servicios. 
            Somos su socio integral y pensamos en todas sus necesidades. Consulte todos los servicios que ofrecemos a continuación.</p>
          <div class="content-services">
            <div class="content-services__service">
              <img class="content-service__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/icons/marketing.svg" alt="Marketing icon" />
              <span class="content-service__text">Marketing</span>
              <ul class="extended-services">
                <li class="extended-services__service">Facebook/Instagram Ads</li>
                <li class="extended-services__service">Google Ads</li>
                <li class="extended-services__service">Folletos</li>
                <li class="extended-services__service">Promocion productos o servicios</li>
              </ul>
            </div>
            <div class="content-services__service">
              <img class="content-service__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/icons/analytics.svg" alt="Marketing icon" />
              <span class="content-service__text">Analytics</span>
              <ul class="extended-services">
                <li class="extended-services__service">Google Analitycs</li>
                <li class="extended-services__service">Analisis predictivos/Descriptivos</li>
                <li class="extended-services__service">firebase & Dashboards</li>
              </ul>
            </div>
            <div class="content-services__service">
              <img class="content-service__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/icons/consulting.svg" alt="Marketing icon" />
              <span class="content-service__text">Growth</span>
              <ul class="extended-services">
                <li class="extended-services__service">Growth Hacking</li>
                <li class="extended-services__service">Automatizacion</li>
                <li class="extended-services__service">Social Content</li>
                <li class="extended-services__service">Community Manager</li>
              </ul>
            </div>
            <div class="content-services__service">
              <img class="content-service__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/icons/research.svg" alt="Marketing icon" />
              <span class="content-service__text">Diseño & desarrollo</span>
              <ul class="extended-services">
                <li class="extended-services__service">Diseño y desarrollo web</li>
                <li class="extended-services__service">Desarrollo Apps Moviles</li>
                <li class="extended-services__service">Diseño de piezas publicitarias (Imagen/Video profesional)</li>
                <li class="extended-services__service">Identidad de marca</li>
              </ul>
            </div>
          </div>
          <button class="content-section__button button button--secondary" id="button_offers">MIRA TODOS LOS SERVICIOS</button>
        </div>
        <div class="content-section section--hidden content-section--left-align" data-page="3">
          <div class="content-holder--left-align">
            <h1 class="content-section__title">CONOCE NUESTRO EQUIPO</h1>
            <p class="content-section__text text-indent content-section__text-team">Las compañias no pueden sobrevivir sin personas inteligentes al frente de ellas. Nosotros tenemos unos de los mejores y mas apasionados individuos con una vision impeclable para ayudarte a crecer. No todos los heroes usan capa. Echa un vistaso a nuestro equipo.</p>
            <button class="content-section__button button button--secondary" id="button_team">NUESTRO TEAM</button>
          </div>
          <div class="content-section__images">
            <div class="content-section__image-holder">
              <img class="content-section__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/persons/person1.jpg" alt="Team photo" />
            </div>
            <div class="content-section__image-holder">
              <img class="content-section__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/persons/person2.jpg" alt="Team photo" />
            </div>
            <div class="content-section__image-holder">
              <img class="content-section__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/persons/person3.jpg" alt="Team photo" />
            </div>
            <div class="content-section__image-holder">
              <img class="content-section__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/persons/person4.jpg" alt="Team photo" />
            </div>
          </div>
        </div>
        <div class="content-section section--hidden" data-page="4">
          <h1 class="content-section__title">PORTAFOLIO</h1>
          <p class="content-section__text">Estamos orgullosos de nuestro trabajo. El 98% de Nuestros clientes cuentan con altos indices de satisfaccion, estamos ansiosos por mostrarle el arte que producimos. Consulte nuestro portafolio a continuación</p>
          <div class="content-portfolio__images flex">
            <div class="content-portfolio__image-holder">
              <span class="content-portfolio__name text-indent">Diseño WEB & MOVIL</span>
              <img class="content-portfolio__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/portfolio/portfolio1.jpg" alt="Portfolio image" />
            </div>
            <div class="content-portfolio__image-holder">
              <span class="content-portfolio__name text-indent">Analitycs & Growth Hacking</span>
              <img class="content-portfolio__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/portfolio/portfolio2.jpg" alt="Portfolio image" />
            </div>
            <div class="content-portfolio__image-holder">
              <span class="content-portfolio__name text-indent">Marketing digital</span>
              <img class="content-portfolio__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/portfolio/portfolio3.jpg" alt="Portfolio image" />
            </div>
          </div>
          <a class="content-section__button button button--icon" href="https://github.com/" rel="noopener">
            <span class="button__text">VER PORTAFOLIO</span>
            <img class="button__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/icons/external.svg" alt="External icon"/>
          </a>
        </div>
        <div class="content-section section--hidden" data-page="5">
          <h1 class="content-section__title">CONTACTANOS </h1>
          <p class="content-section__text">Estamos aqui para ayudarte con cualquier pregunta que puedas tener. Esperamos escuchar de usted pronto. También puede encontrarnos en las redes sociales continuación.</p>
          <div class="content-section__buttons-holder">
            <a class="content-section__button button button--icon" href="mailto:YOUREMAILHERE">
              <img class="button__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/icons/email.svg" alt="Email icon"/>
              <span class="button__text">ESCRIBENOS</span>
              <span class="button__invisible-email">soporte@agencydatadriven.com</span>
            </a>
            <a class="content-section__button button button--icon" href="tel:+573158185043">
              <img class="button__image" src="<?php bloginfo ('template_directory'); ?>/resources/images/icons/phone.svg" alt="Phone icon"/>
              <span class="button__text">LLAMANOS</span>
            </a>
          </div>
        </div>
      </div>
    </main>

    <script type="module" src="./main.js"></script>
	</body>
</html>