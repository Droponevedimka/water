<template lang="html">  
  <div id="app">
    <div class="page">
            <!-- Page Header-->
            <header class="section page-header">
              <!-- RD Navbar-->
              <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                  <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                      <!-- RD Navbar Panel-->
                      <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                        <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="/assets/img/logo-default-119x34.png" alt="" width="119" height="34" srcset="/assets/img/logo-default-182x57.png 2x"/></a>
                      </div>
                      <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                          <!-- RD Navbar Nav-->
                          <ul class="rd-navbar-nav">
                            <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Главная</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#about">О нас</a>
                            </li>
                            <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="#features">Features</a>
                            </li> -->
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#products">Товары</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#services">Лицензия</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#testimonials">Отзывы</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Обратная связь</a>
                            </li>
                          </ul>
                        </div>
                        <!-- Callback link-->
                        <div class="rd-navbar-call">
                          <button class="icon icon-md mdi mdi-phone" data-toggle="modal" data-target="#call-form"></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </nav>
              </div>
            </header>
            <!-- Slider-->
            <section class="section swiper-container swiper-slider swiper-slider-business bg-gray-700" id="home" data-loop="true" data-slide-effect="fade" data-autoplay="5000" data-simulate-touch="false" data-custom-slide-effect="inter-leave-effect">
              <div class="swiper-wrapper context-dark">
                <div class="swiper-slide" data-slide-bg="/assets/img/slider-business-slide-2-1920x800.jpg">
                  <div class="slide-inner">
                    <div class="swiper-slide-caption">
                      <div class="container">
                        <h4 class="text-yellow text-uppercase wow" data-caption-animate="slideInUp">Добро пожаловать</h4>
                        <h1 class="wow-outer"><span class="wow" data-caption-animate="slideInDown"><span class="big">Старо~мытищинский источник</span></span></h1>
                        <h2 class="wow-outer"><span class="wow" data-caption-animate="slideInDown"><span class="compressed fown-weight-light">чистая вода в каждый дом</span></span></h2>
                        <div class="swiper-caption-text-sm swiper-caption-wrap">
                          <div class="swiper-caption-text-inner">
                            <p class="text-op-gentle wow" data-caption-animate="slideInLeft">Бесплатная доставка по Москве и области! Акции и специальные предложения!</p>
                          </div>
                        </div>
                        <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="#about" data-caption-animate="slideInUp">Подробнее</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide" data-slide-bg="/assets/img/slider-business-slide-1-1920x800.jpg">
                  <div class="slide-inner">
                    <div class="swiper-slide-caption">
                      <div class="container">
                        <h4 class="text-yellow text-uppercase wow" data-caption-animate="slideInUp">Чистая природная вода</h4>
                        <h1 class="wow-outer"><span class="wow" data-caption-animate="slideInDown"><span class="big">пейти чистую воду</span></span></h1>
                        <h2 class="wow-outer"><span class="wow" data-caption-animate="slideInDown"><span class="compressed fown-weight-light">из природного источника</span></span></h2>
                        <div class="swiper-caption-text-sm swiper-caption-wrap">
                          <div class="swiper-caption-text-inner">
                            <p class="text-op-gentle wow" data-caption-animate="slideInLeft">Доставка воды в офис или на дом.</br>Более 25 лет на рынке!</br>Емкости от 0.5 до 19 л.</p>
                          </div>
                        </div>
                        <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="#about" data-caption-animate="slideInUp">Подробнее</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slider-nav container">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
            </section>
            <!-- A Few Words About Us-->
            <section class="section section-md" id="about">
              <div class="section-wave section-wave-white">
                <svg x="0px" y="0px" viewBox="0 0 1920 45" width="1920" height="45px" preserveAspectRatio="none">
                  
                  <path d="M1920,0c-82.8,0-108.8,44.4-192,44.4c-78.8,0-116.5-43.7-192-43.7c-77.1,0-115.9,44.4-192,44.4c-78.2,0-114.6-44.4-192-44.4c-78.4,0-115.3,44.4-192,44.4C883.1,45,841,0.6,768,0.6C691,0.6,652.8,45,576,45C502.4,45,461.9,0.6,385,0.6C306.5,0.6,267.9,45,191,45C115.1,45,78,0.6,0,0.6V45h1920V0z"></path>
                </svg>
              </div>
              <div class="container">
                <div class="row row-50 justify-content-center justify-content-xl-between flex-xl-row-reverse text-center text-xl-left">
                  <div class="col-lg-6 col-xl-5">
                    <div class="inset-right-3">
                      <h3 class="wow-outer"><span class="wow slideInDown">Вода "Источник Старо - Мытищинский"</span></h3>
                      <p class="big text-op-amaranthine wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Вода питьевая "Горная вершина" и "Источник Старо~Мытищинский" добывается в уникальном по чистоте месте Касимовского водоносного горизонта из артезианской скважины глубиной 110 метров. При изготовлении нашей воды используется новейшее оборудование R.Bardi (Италия).</span></p>
                      <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="#about">Подробнее</a></div>
                    </div>
                  </div>
                  <div class="col-lg-7"><img src="/assets/img/index-01-711x429.png" alt="" width="711" height="429"/>
                  </div>
                </div>
              </div>
            </section>
            <!-- Small Features-->
            <section class="section section-lg bg-gray-100" id="features">
              <div class="container">
                <div class="row row-30">
                  <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                      <div class="box-minimal-icon mdi mdi-shield wow fadeIn"></div>
                      <div class="box-minimal-main wow-outer">
                        <h4 class="box-minimal-title wow slideInDown">Бактериальная обработка</h4>
                        <p class="wow fadeInUpSmall">Санитарно-гигиеническими нормами определены понятия, характеризующие свойства физиологически чистой для человека воды, установлены предельно допустимы концентрации веществ. Обязательным критерием пригодности воды является полное отсутствие патогенных возбудителей.</p>
                      </div>
                    </article>
                  </div>
                  <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                      <div class="box-minimal-icon mdi mdi-leaf wow fadeIn" data-wow-delay=".1s"></div>
                      <div class="box-minimal-main wow-outer">
                        <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">Новейшее оборудование</h4>
                        <p class="wow fadeInUpSmall" data-wow-delay=".1s">Мы используем новешее оборудование R.Bardi. На сегодняшний день компания Bardi находится в управлении той же семьи и продолжает работать, опираясь на те же ценности, и собирается продолжать эту традицию еще в течение многих лет. </p>
                      </div>
                    </article>
                  </div>
                  <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                      <div class="box-minimal-icon mdi mdi-water wow fadeIn" data-wow-delay=".2s"></div>
                      <div class="box-minimal-main wow-outer">
                        <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">Качественный РЕТ пластик</h4>
                        <p class="wow fadeInUpSmall" data-wow-delay=".2s">Самый распространенный вид пластика — PET (ПЭТ) 1, полиэтилентерефталат. Данный вид является безопасным и чаще всего используется для производства бутилированной воды. Также он отлично подходит для вторичной переработки и поэтому не загрязняет окружающую среду.</p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </section>
            <!-- Woman CTA-->
            <section class="section section-xl bg-gray-700 bg-image bg-image-1" style="background-image: url(/assets/img/call-to-action-1-1920x584.jpg);">
              <div class="container">
                <div class="row justify-content-sm-end">
                  <div class="col-sm-9 col-md-7 col-lg-6">
                    <div class="box-6">
                      <div class="wow-outer">
                        <div class="wow slideInUp">
                          <h3 class="font-weight-semibold">Питьева вода из артезианской скважины!</h3>
                        </div>
                      </div>
                      <div class="wow-outer offset-top-4">
                        <div class="wow slideInDown">
                          <p>На рынке более 25 лет. Используется для питьевых, кулинарных, косметических целей. Вода в бутылях по 19 литров, в дополнение к ним бутылки 0,5 и 1,5 литра с газом и без газа.</p><a class="button button-primary button-winona" href="#about">Подробнее</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Section Products-->
            <!-- <section class="section section-lg section-wave-offset" id="products">
              <div class="container">
                <h3 class="text-center">Список товаров</h3>
                <div class="row row-30 row-md-50">
                  <div class="col-md-6">
                          <article class="card-modern wow fadeInUp" data-wow-delay=".05s">
                            <div class="card-modern-left"><img src="/assets/img/water-01-138x197.png" alt="" width="138" height="197"/>
                            </div>
                            <div class="card-modern-body">
                              <h4><a class="card-modern-title" href="#">1 L Spring Water in Glass</a></h4>
                              <div class="card-modern-price"><span>$10</span></div>
                              <div class="card-modern-info"><span class="icon icon-sm mdi mdi-information-outline"></span><span class="card-modern-info-text">for daily use</span></div>
                              <div class="card-modern-text">
                                <p>Enjoy your favorite spring water in the most popular shape! This water is great to share and drink at any weather and is a reasonable offer for any budget.</p>
                              </div>
                            </div>
                          </article>
                  </div>
                  <div class="col-md-6">
                          <article class="card-modern wow fadeInUp second" data-wow-delay=".05s">
                            <div class="card-modern-left"><img src="/assets/img/water-02-138x197.png" alt="" width="138" height="197"/>
                            </div>
                            <div class="card-modern-body">
                              <h4><a class="card-modern-title" href="#">750 ml Sparkling Water</a></h4>
                              <div class="card-modern-price"><span>$9</span></div>
                              <div class="card-modern-info"><span class="icon icon-sm mdi mdi-information-outline"></span><span class="card-modern-info-text">for daily use</span></div>
                              <div class="card-modern-text">
                                <p>Perfect sparkling water for single- or multi-serve convenience for home, restaurant or upscale retail stores. We are sure you will love its energizing effect.</p>
                              </div>
                            </div>
                          </article>
                  </div>
                  <div class="col-md-6">
                          <article class="card-modern wow fadeInUp third" data-wow-delay=".05s">
                            <div class="card-modern-left"><img src="/assets/img/water-03-138x197.png" alt="" width="138" height="197"/>
                            </div>
                            <div class="card-modern-body">
                              <h4><a class="card-modern-title" href="#">500 ml Spring Water</a></h4>
                              <div class="card-modern-price"><span>$7</span></div>
                              <div class="card-modern-info"><span class="icon icon-sm mdi mdi-information-outline"></span><span class="card-modern-info-text">for daily use</span></div>
                              <div class="card-modern-text">
                                <p>Need a greater amount of our spring water at an affordable price? Then Aqua’s 500 ml spring water is your #1 fit. Available at all major department stores and online.</p>
                              </div>
                            </div>
                          </article>
                  </div>
                  <div class="col-md-6">
                          <article class="card-modern wow fadeInUp fourth" data-wow-delay=".05s">
                            <div class="card-modern-left"><img src="/assets/img/water-04-138x197.png" alt="" width="138" height="197"/>
                            </div>
                            <div class="card-modern-body">
                              <h4><a class="card-modern-title" href="#">333 ml Spring Water</a></h4>
                              <div class="card-modern-price"><span>$10</span></div>
                              <div class="card-modern-info"><span class="icon icon-sm mdi mdi-information-outline"></span><span class="card-modern-info-text">for daily use</span></div>
                              <div class="card-modern-text">
                                <p>Wherever it is served, our Spring Water is the finest pairing for any dish. Our spring’s unique blend of minerals provides a remarkably refreshing taste.</p>
                              </div>
                            </div>
                          </article>
                  </div>
                </div>
                <div class="row justify-content-center text-center row-offset-custom-1">
                  <div class="col-12">
                    <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="#">Ещё</a></div>
                  </div>
                </div>
              </div>
            </section> -->
            <!-- Services-->
            <section class="section section-lg bg-gray-100 text-center" id="services">
              <div class="container">
                <div class="box-4">
                  <h3 class="wow-outer"><span class="wow slideInUp">Мы работаем, чтобы предложить лучшее</span></h3>
                </div>
                <div class="row row-30">
                  <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Box Creative-->
                    <article class="box-creative wow slideInLeft">
                      <div class="box-creative-icon mdi mdi-cellphone-android"></div>
                      <h4 class="box-creative-title"><a href="#">Онлайн заказ</a></h4>
                      <p>Наш интернет-магазин всегда открыт для клиентов, которые предпочитают пить качественную родниковую воду. Вы также можете заказать доставку воды по Москве и Московской области онлайн.</p>
                    </article>
                  </div>
                  <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Box Creative-->
                    <article class="box-creative wow slideInLeft" data-wow-delay=".1s">
                      <div class="box-creative-icon fl-bigmug-line-graphical8"></div>
                      <h4 class="box-creative-title"><a href="#">Бесплатная доставка</a></h4>
                      <p>При заказе более 2 бутылок нашей воды мы доставим ее к вам домой или в офис бесплатно.</p>
                    </article>
                  </div>
                  <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Box Creative-->
                    <article class="box-creative wow slideInLeft" data-wow-delay=".2s">
                      <div class="box-creative-icon mdi mdi mdi-heart-outline"></div>
                      <h4 class="box-creative-title"><a href="#">Индивидуальный подход</a></h4>
                      <p>Наша команда дружелюбных менеджеров всегда готова помочь вам выбрать и заказать лучшую газированную или родниковую воду. Не стесняйтесь обращаться к нам за дополнительной информацией.</p>
                    </article>
                  </div>
                </div>
              </div>
            </section>
            <!-- Testimonials-->
            <section class="section section-lg text-center" id="testimonials">
              <div class="container">
                <h3>Отзывы</h3>
                <div class="owl-carousel" data-items="1" data-md-items="2" data-dots="true" data-nav="false" data-loop="true" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
                  
                  <div class="wow-outer">
                    <blockquote class="quote-modern quote-modern-big wow slideInLeft">
                      <svg class="quote-modern-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                        <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                      </svg>
                      <div class="quote-modern-text">
                        <p>Менеджеры всегда помогают, ну по крайней мере за год сотрудничества не переругались ни разу. Что радует ещё есть возможность починить кулер,в замен привозят свой, но мы никогда не брали его так как чинят быстро. А то что менеджеры звонят и предлагают услуги, так это у них работа такая(   Меня как секретаря это уже не напрягает. Ахахахх  всем добра!</p>
                      </div>
                      <div class="quote-modern-meta">
                        <div class="quote-modern-avatar"><img src="/assets/img/testimonials-person-1-96x96.jpg" alt="" width="96" height="96"/>
                        </div>
                        <div class="quote-modern-info">
                          <cite class="quote-modern-cite">Екатерина Абрамова</cite>
                          <p class="quote-modern-caption">Постоянный клиент</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>

                  <div class="wow-outer">
                    <blockquote class="quote-modern quote-modern-big wow slideInLeft">
                      <svg class="quote-modern-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                        <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                      </svg>
                      <div class="quote-modern-text">
                        <p>Качество воды устраивает . Всегда есть акции и приятные предложения для клиентов. Всегда оперативно привозят свежую водичку. Пьем на протяжении 5 лет , другие предложения даже не рассматриваем.</p>
                      </div>
                      <div class="quote-modern-meta">
                        <div class="quote-modern-avatar"><img src="https://lh5.googleusercontent.com/-b1WA9-o8qqI/AAAAAAAAAAI/AAAAAAAAAAA/xy-9ZE8AxO8/w99-h99-p-rp-mo-ba2-br100/photo.jpg" alt="" width="96" height="96"/>
                        </div>
                        <div class="quote-modern-info">
                          <cite class="quote-modern-cite">Ярослав Зикун</cite>
                          <p class="quote-modern-caption">Постоянный клиент</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>

                  <div class="wow-outer">
                    <blockquote class="quote-modern quote-modern-big wow slideInLeft">
                      <svg class="quote-modern-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                        <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                      </svg>
                      <div class="quote-modern-text">
                        <p>Отличная вода. Всем рекомендую.было пару косяков с протиканием бутылей,  но компания решила проблему и доставили бонусом. Вода очень вкусная! Ранее заказывал в нестле.... качество воды мытищенской в разы выше. Рекомендую!</p>
                      </div>
                      <div class="quote-modern-meta">
                        <div class="quote-modern-avatar"><img src="https://lh6.googleusercontent.com/-Q7fnCxHAkKI/AAAAAAAAAAI/AAAAAAAAAAA/uk3Y63_vpIg/w99-h99-p-rp-mo-ba4-br100/photo.jpg" alt="" width="96" height="96"/>
                        </div>
                        <div class="quote-modern-info">
                          <cite class="quote-modern-cite">Максим Тишенко</cite>
                          <p class="quote-modern-caption">Постоянный клиент</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  
                </div>
              </div>
            </section>
            <!---->
            <!-- Overview-->
            <section class="section section-lg-custom bg-gray-100" id="contacts">
              <div class="container">
                <div class="row row-50 justify-content-center justify-content-lg-between">
                  <div class="col-md-10 col-lg-6 column-ethereal">
                    <h3 class="wow-outer"><span class="wow slideInDown">Связаться с нами</span></h3>
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                      <div class="row row-10">
                        <div class="col-md-6 wow-outer">
                          <div class="form-wrap wow fadeSlideInUp">
                            <label class="form-label-outside" for="contact-first-name">Фамилия</label>
                            <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                          </div>
                        </div>
                        <div class="col-md-6 wow-outer">
                          <div class="form-wrap wow fadeSlideInUp">
                            <label class="form-label-outside" for="contact-last-name">Имя</label>
                            <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                          </div>
                        </div>
                        <div class="col-md-6 wow-outer">
                          <div class="form-wrap wow fadeSlideInUp">
                            <label class="form-label-outside" for="contact-email">E-mail</label>
                            <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                          </div>
                        </div>
                        <div class="col-md-6 wow-outer">
                          <div class="form-wrap wow fadeSlideInUp">
                            <label class="form-label-outside" for="contact-phone">Телефон</label>
                            <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                          </div>
                        </div>
                        <div class="col-12 wow-outer">
                          <div class="form-wrap wow fadeSlideInUp">
                            <label class="form-label-outside" for="contact-message">Сообщение</label>
                            <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="group group-middle">
                        <div class="wow-outer">
                          <button class="button button-primary button-winona wow slideInRight" type="submit">Отправить</button>
                        </div>
                        <p>или</p>
                        <div class="wow-outer"><a class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft" href="viber://add?number=9169221551"><span class="icon text-primary mdi mdi-facebook-messenger"></span>Viber msg</a></div>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-5 align-self-end">
                    <div class="box-image-max-size"><img class="img-responsive" src="/assets/img/about-01-674x638.png" alt="" width="674" height="638"/>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Page Footer-->
            <footer class="section footer-standard bg-gray-modern">
              <div class="section-wave">
                <svg x="0px" y="0px" viewBox="0 0 1920 45" width="1920" height="45px" preserveAspectRatio="none">                  
                  <path d="M1920,0c-82.8,0-108.8,44.4-192,44.4c-78.8,0-116.5-43.7-192-43.7c-77.1,0-115.9,44.4-192,44.4c-78.2,0-114.6-44.4-192-44.4c-78.4,0-115.3,44.4-192,44.4C883.1,45,841,0.6,768,0.6C691,0.6,652.8,45,576,45C502.4,45,461.9,0.6,385,0.6C306.5,0.6,267.9,45,191,45C115.1,45,78,0.6,0,0.6V45h1920V0z"></path>
                </svg>
              </div>
              <div class="footer-standard-main">
                <div class="container">
                  <div class="row row-50">
                    <div class="col-lg-4">
                      <div class="inset-right-1">
                        <h4>О нас</h4>
                        <p>Торговый представитель Вода "Источник Старо~Мытищинский". Вода питьевая бутилированная из артезианской скважины. Оптовые цены. Доставка бесплатно по Москве и Московской области.<br>Более 20 лет на рынке!</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4">
                      <div class="box-1">
                        <h4>Обратная связь</h4>
                        <ul class="list-sm list-footer">
                          <li class="object-inline"><span class="icon icon-sm mdi mdi-map-marker text-gray-700"></span><a class="link-default" href="https://www.google.com/maps/place/%D0%98%D1%81%D1%82%D0%BE%D1%87%D0%BD%D0%B8%D0%BA+%D0%A1%D1%82%D0%B0%D1%80%D0%BE-%D0%9C%D1%8B%D1%82%D0%B8%D1%89%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9/@55.9777142,37.7466393,15z/data=!4m5!3m4!1s0x0:0xb8b5e986b99e6acf!8m2!3d55.9777142!4d37.7466393">Фабричная ул., 20,<br>г. Мытищи, мкр Поселок, Пироговский, Московская обл., 141033</a></li>
                          <li class="object-inline"><span class="icon icon-sm mdi mdi-phone text-gray-700"></span><a class="link-default" href="tel:+74957977668">+7 (495) 797-76-68</a></li>
                          <li class="object-inline"><span class="icon icon-sm mdi mdi-email text-gray-700"></span><a class="link-default" href="mailto:admin@watforall.ru">admin@watforall.ru</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7 col-lg-4">
                      <h4>Подписка</h4>
                      <p>Подпишись на рассылку новостей и узнавай первым об акциях и скидках.</p>
                      <!-- RD Mailform-->
                      <form class="rd-form rd-mailform form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                          <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required"/>
                          <label class="form-label" for="subscribe-form-2-email">E-mail</label>
                        </div>
                        <div class="form-button">
                          <button class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit"><span class="icon mdi mdi-email-outline"></span></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="footer-standard-aside justify-content-center">
                  <!-- Rights-->
                  <p class="rights"><span>&copy;&nbsp;</span> 2020 г.<span>&nbsp;</span><span>by dr.opo </span></br> <a href="#">Политика конфиденциальности</a></p>
                </div>
              </div>
            </footer>
          </div>
          <div class="preloader">
            <div class="preloader-body">
              <div class="cssload-container">
                <div class="cssload-double-torus"></div>
              </div>
            </div>
          </div>
          <div class="modal modal-custom fade" id="call-form">
            <div class="modal-dialog modal-dialog-custom" role="document">
              <div class="modal-content">
                <Main />
              </div>
              


                <!-- <div class="modal-header">
                  <h3>Заказать звонок</h3>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                  <p>Пожалуйста оставьте ваш номер телефона для того чтобы совершить заказ.</p>
                  <form class="rd-form rd-mailform form-inline form-inline-custom" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap">
                      <input class="form-input" id="header-phone" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="header-phone">Phone</label>
                    </div>
                    <div class="form-button">
                      <button class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit"><span class="icon mdi mdi-phone-in-talk"></span></button>
                    </div>
                  </form>
                </div> -->
              
            </div>
          </div>
          <!-- Global Mailform Output-->
          <div class="snackbars" id="form-output-global"></div>
    </div>
</template>

<script>
//import TopContext from './components/TopContext.vue'
  import Main from './components/MainForm.vue'  
  import {script} from './js/script.js'
  
// import './js/core.min.js'
  function loadJS(src, callback) {
    var s = document.createElement('script');
    s.src = src;
    s.async = true;
    s.onreadystatechange = s.onload = function() {
        var state = s.readyState;
        if (!callback.done && (!state || /loaded|complete/.test(state))) {
            callback.done = true;
            callback();
        }
    };
    document.getElementsByTagName('head')[0].appendChild(s);
}

export default {
  name: 'App',
  components: {
    Main
  },
  beforeMount(){    
    loadJS('/lib/core.min.js', function() { 
      script()
    });
    
    
  }
}
</script>