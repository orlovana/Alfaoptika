<?php
/*
Template Name: Шаблон "Главная страница"
*/
?>
<?php get_header();?>
<style>
  .carousel_item-1{
    background-image: url("<?php echo get_template_directory_uri(); ?>/img/carousel/slide-02.jpg");
  }
  .carousel_item-2{
    background-image: url("<?php echo get_template_directory_uri(); ?>/img/carousel/slide-01.jpg");
  }
  .carousel_item-3{
    background-image: url("<?php echo get_template_directory_uri(); ?>/img/carousel/slide-03.jpg");
  }
  .owl-carousel.owl-theme .owl-nav .owl-prev{
    background-image: url("<?php echo get_template_directory_uri(); ?>/img/carousel-icons/arrow-left.svg");
  }
  .owl-carousel.owl-theme .owl-nav .owl-next{
    background-image: url("<?php echo get_template_directory_uri(); ?>/img/carousel-icons/arrow-right.svg");
  }
  .promo-section-item--background-img-watch{
    background-image: url("<?php echo get_template_directory_uri(); ?>/img/promo/cr_blue_angelic_4.jpg");
  }
</style>
    <section class="carousel-section">
      <div class="container">
        <!-- Обертка для карусели -->
        <div class="carousel owl-theme owl-carousel" id="carousel-header">
          <div class="carousel_item-1">
                <h2 class="carousel_item-title">При заказе очковых линз от 1500,<br> оправа в подарок</h2>
                <div class="carousel_item-text">
                  <p>Старт акции</p>
                </div>
          </div>
          <div class="carousel_item-2">
              <h2 class="carousel_item-title">Вселенная глазами ребенка</h2>
              <div class="carousel_item-text">
                <p>Старт акции</p>
              </div>
          </div>
          <div class="carousel_item-3">
              <h2 class="carousel_item-title">Вселенная глазами ребенка</h2>
              <div class="carousel_item-text">
                <p>Старт акции</p>
              </div>
          </div>
        </div>
        <!-- // Обертка для карусели -->
      </div>
    </section>

    <!-- слева каталог, справа карточки товара -->
    <main class="main-content">
      <div class="container">
        <div class="main_row">
          <!-- Левая колонка  -->
          <div class="main_column-left"> 
              <!-- категории с выпающим по ним списками  -->  
              <nav class="navigation">  
                <div class=" pure-menu custom-display">
                  <ul class="pure-menu-list">
                    <li class="pure-menu-heading">
                      
                    </li>

                    <li class="pure-menu-item 
                              pure-menu-has-children 
                              pure-menu-allow-hover">
                      <a href="#"
                        class="pure-menu-link">
                        Акссесуары
                      </a>
                      <ul class="pure-menu-children">
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Наконечники
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Окклюдеры
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Отвертки
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Пружинки для очков детские
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Резинки для очков детские
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Салфетки микрофибра
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Спреи
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Стоперы
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Футляры
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Цепочки
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Чехлы
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Шнурки
                          </a>
                        </li>
                        </ul>
                        </li>
                      </ul>
                    </li>

                    <li class="pure-menu-item 
                              pure-menu-has-children 
                              pure-menu-allow-hover">
                      <a href="#"
                        class="pure-menu-link">
                        Антифары
                      </a>
                      <ul class="pure-menu-children">
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Женские 
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Безободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Металлическая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Ободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Пластиковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Полуободковая оправа
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Мужские 
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Безободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Металлическая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Ободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Пластиковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Полуободковая оправа
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>

                    <li class="pure-menu-item 
                              pure-menu-has-children 
                              pure-menu-allow-hover">
                      <a href="#"
                        class="pure-menu-link">
                        Контактные линзы
                      </a>
                      <ul class="pure-menu-children">
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Контактные линзы
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Цветные контактные линзы
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Карнавальные контактные линзы
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Склеральные контактные линзы
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Растворы
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Контейнеры
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Пинцеты
                          </a>
                        </li>
                        </ul>
                        </li>
                      </ul>
                    </li>

                    <li class="pure-menu-item 
                              pure-menu-has-children 
                              pure-menu-allow-hover">
                      <a href="#"
                        class="pure-menu-link">
                        Коррегирующие очки
                      </a>
                      <ul class="pure-menu-children">
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Женские 
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Диоптрии "+"
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Мужские 
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Диоптрии "-"
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>

                    <li class="pure-menu-item 
                              pure-menu-has-children 
                              pure-menu-allow-hover">
                      <a href="#"
                        class="pure-menu-link">
                        Оправы
                      </a>
                      <ul class="pure-menu-children">
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Детские
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Металлическая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Пластиковая оправа
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Женские 
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Безободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Металлическая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Ободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Пластиковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Полуободковая оправа
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Мужские 
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Безободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Металлическая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Ободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Пластиковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Полуободковая оправа
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>

                    <li class="pure-menu-item 
                              pure-menu-has-children 
                              pure-menu-allow-hover">
                      <a href="#"
                        class="pure-menu-link">
                        Очковые линзы
                      </a>
                      <ul class="pure-menu-children">
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Без покрытия
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Покрытие антиблик 
                          </a>
                        </li>
                        <li class="pure-menu-item">
                          <a href="#" class="pure-menu-link">
                            Для работы за коспьютером 
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="pure-menu-item 
                              pure-menu-has-children 
                              pure-menu-allow-hover">
                      <a href="#"
                        class="pure-menu-link">
                        Солнцезащитные очки
                      </a>
                      <ul class="pure-menu-children">
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Женские 
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Безободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Металлическая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Ободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Пластиковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Полуободковая оправа
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Мужские 
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Безободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Металлическая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Ободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Пластиковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Полуободковая оправа
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>

                    <li class="pure-menu-item 
                              pure-menu-has-children 
                              pure-menu-allow-hover">
                      <a href="#"
                        class="pure-menu-link">
                        Тренежеры
                      </a>
                      <ul class="pure-menu-children">
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Детские
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Металлическая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Пластиковая оправа
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Женские 
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Безободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Металлическая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Ободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Пластиковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Полуободковая оправа
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="pure-menu-item 
                                  pure-menu-has-children 
                                  pure-menu-allow-hover">
                          <a href="#" class="pure-menu-link">
                            Мужские 
                          </a>
                          <ul class="pure-menu-children">
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Безободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Металлическая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Ободковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Пластиковая оправа
                              </a>
                            </li>
                            <li class="pure-menu-item">
                              <a href="#"
                                class="pure-menu-link">
                                Полуободковая оправа
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                </ul>
              </div>
            </nav>  
              <!-- //категории с выпающим по ним списками -->

              <!-- баннер -->
              <aside class="info-block">
                <a href="#" class="info-block_img"><img src="<?php echo get_template_directory_uri(); ?>/img/Fabricio.png" alt=""></a> 
                <a href="#" class="info-block_img"><img src="<?php echo get_template_directory_uri(); ?>/img/Visconti.png" alt=""></a>
                <a href="#" class="info-block_img"><img src="<?php echo get_template_directory_uri(); ?>/img/Vito Fabius kids.png" alt=""></a> 
                <a href="#" class="info-block_img"><img src="<?php echo get_template_directory_uri(); ?>/img/Vito Fabius.png" alt=""></a>   
              </aside>
              <!-- // баннер -->
          </div>
          <!-- // Левая колонка  -->
          <!-- Правая колонка, карточки товара -->
          <div class="main_column-right">
              <!-- вкладки на карточками товара -->
              <div class="tabs">
                <button class="tabs_btn tabs_btn--active">Новинки</button>
                <button class="tabs_btn">Распродажа</button>
              </div>
              <!-- //вкладки на карточками товара -->
              <!-- карточки товара -->
              <div class="card-wrapper">
                <div class="card">
                  <!-- card header -->
                  <div class="card_header">
                    <div class="card_sale">СКИДКА 10% </div>
                    <div class="card_icon-btns">
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
                      <defs>
                      <style>
                        .cls-1 {
                          fill-rule: evenodd;
                        }
                      </style>
                    </defs>
                    <path id="list_icon" data-name="list icon" class="cls-1" d="M1313,2753h2v-2h-2v2h0Zm0,4h2v-2h-2v2h0Zm0-8h2v-2h-2v2h0Zm4,4h14v-2h-14v2h0Zm0,4h14v-2h-14v2h0Zm0-10v2h14v-2h-14Z" transform="translate(-1313 -2747)"/>
                        </svg>
                      </button>
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18.34" viewBox="0 0 20 18.34">
                          <defs>
                            <style>
                              .cls-1 {
                                fill-rule: evenodd;
                              }
                            </style>
                          </defs>
                          <path id="wishlist_icon" data-name="wishlist icon" class="cls-1" d="M1370.5,2743a5.889,5.889,0,0,1-9,0,5.447,5.447,0,0,0-5.5,5.5c0,3.78,3.4,6.86,8.55,11.54l1.45,1.31,1.45-1.32c5.15-4.67,8.55-7.75,8.55-11.53a5.447,5.447,0,0,0-5.5-5.5h0Zm-4.4,15.55-0.1.1-0.1-.1c-4.76-4.31-7.9-7.16-7.9-10.05a3.418,3.418,0,0,1,3.5-3.5,3.909,3.909,0,0,1,3.57,2.36h1.87a3.885,3.885,0,0,1,3.56-2.36,3.418,3.418,0,0,1,3.5,3.5c0,2.89-3.14,5.74-7.9,10.05h0Z" transform="translate(-1356 -2743)"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <!-- // card header -->
                  <div class="card_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/new/product1.jpg" alt="Asus ZenFone Go ZB452KG (black and white)">
                  </div>
                  <h4 class="card_title">
                    Vito Fabius (Металлическая оправа, 6025, черно-мятный)
                  </h4>
                  <div class="card_footer">
                    <div class="card_price"> 3 500 руб.</div>
                    <button class="card_cart">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <defs>
                          <style>
                            .cls-1 {
                              fill-rule: evenodd;
                            }
                          </style>
                        </defs>
                        <path id="cart_icon" data-name="cart icon" class="cls-1" d="M1297,3102a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Zm-6-16v2h2l3.6,7.59-1.35,2.45a1.933,1.933,0,0,0-.25.96,2.006,2.006,0,0,0,2,2h12v-2h-11.58a0.248,0.248,0,0,1-.25-0.25l0.03-.12,0.9-1.63h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49a0.977,0.977,0,0,0,.12-0.48,1,1,0,0,0-1-1h-14.79l-0.94-2H1291Zm16,16a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Z" transform="translate(-1291 -3086)"/>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="card">
                  <!-- card header -->
                  <div class="card_header">
                    <div class="card_sale">СКИДКА 10% </div>
                    <div class="card_icon-btns">
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
                      <defs>
                      <style>
                        .cls-1 {
                          fill-rule: evenodd;
                        }
                      </style>
                    </defs>
                    <path id="list_icon" data-name="list icon" class="cls-1" d="M1313,2753h2v-2h-2v2h0Zm0,4h2v-2h-2v2h0Zm0-8h2v-2h-2v2h0Zm4,4h14v-2h-14v2h0Zm0,4h14v-2h-14v2h0Zm0-10v2h14v-2h-14Z" transform="translate(-1313 -2747)"/>
                        </svg>
                      </button>
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18.34" viewBox="0 0 20 18.34">
                          <defs>
                            <style>
                              .cls-1 {
                                fill-rule: evenodd;
                              }
                            </style>
                          </defs>
                          <path id="wishlist_icon" data-name="wishlist icon" class="cls-1" d="M1370.5,2743a5.889,5.889,0,0,1-9,0,5.447,5.447,0,0,0-5.5,5.5c0,3.78,3.4,6.86,8.55,11.54l1.45,1.31,1.45-1.32c5.15-4.67,8.55-7.75,8.55-11.53a5.447,5.447,0,0,0-5.5-5.5h0Zm-4.4,15.55-0.1.1-0.1-.1c-4.76-4.31-7.9-7.16-7.9-10.05a3.418,3.418,0,0,1,3.5-3.5,3.909,3.909,0,0,1,3.57,2.36h1.87a3.885,3.885,0,0,1,3.56-2.36,3.418,3.418,0,0,1,3.5,3.5c0,2.89-3.14,5.74-7.9,10.05h0Z" transform="translate(-1356 -2743)"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <!-- // card header -->
                  <div class="card_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/new/product1.jpg" alt="Asus ZenFone Go ZB452KG (black and white)">
                  </div>
                  <h4 class="card_title">
                    Vito Fabius (Металлическая оправа, 6025, черно-мятный)
                  </h4>
                  <div class="card_footer">
                    <div class="card_price"> 3 500 руб.</div>
                    <button class="card_cart">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <defs>
                          <style>
                            .cls-1 {
                              fill-rule: evenodd;
                            }
                          </style>
                        </defs>
                        <path id="cart_icon" data-name="cart icon" class="cls-1" d="M1297,3102a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Zm-6-16v2h2l3.6,7.59-1.35,2.45a1.933,1.933,0,0,0-.25.96,2.006,2.006,0,0,0,2,2h12v-2h-11.58a0.248,0.248,0,0,1-.25-0.25l0.03-.12,0.9-1.63h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49a0.977,0.977,0,0,0,.12-0.48,1,1,0,0,0-1-1h-14.79l-0.94-2H1291Zm16,16a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Z" transform="translate(-1291 -3086)"/>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="card">
                  <!-- card header -->
                  <div class="card_header">
                    <div class="card_sale">СКИДКА 10% </div>
                    <div class="card_icon-btns">
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
                      <defs>
                      <style>
                        .cls-1 {
                          fill-rule: evenodd;
                        }
                      </style>
                    </defs>
                    <path id="list_icon" data-name="list icon" class="cls-1" d="M1313,2753h2v-2h-2v2h0Zm0,4h2v-2h-2v2h0Zm0-8h2v-2h-2v2h0Zm4,4h14v-2h-14v2h0Zm0,4h14v-2h-14v2h0Zm0-10v2h14v-2h-14Z" transform="translate(-1313 -2747)"/>
                        </svg>
                      </button>
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18.34" viewBox="0 0 20 18.34">
                          <defs>
                            <style>
                              .cls-1 {
                                fill-rule: evenodd;
                              }
                            </style>
                          </defs>
                          <path id="wishlist_icon" data-name="wishlist icon" class="cls-1" d="M1370.5,2743a5.889,5.889,0,0,1-9,0,5.447,5.447,0,0,0-5.5,5.5c0,3.78,3.4,6.86,8.55,11.54l1.45,1.31,1.45-1.32c5.15-4.67,8.55-7.75,8.55-11.53a5.447,5.447,0,0,0-5.5-5.5h0Zm-4.4,15.55-0.1.1-0.1-.1c-4.76-4.31-7.9-7.16-7.9-10.05a3.418,3.418,0,0,1,3.5-3.5,3.909,3.909,0,0,1,3.57,2.36h1.87a3.885,3.885,0,0,1,3.56-2.36,3.418,3.418,0,0,1,3.5,3.5c0,2.89-3.14,5.74-7.9,10.05h0Z" transform="translate(-1356 -2743)"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <!-- // card header -->
                  <div class="card_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/new/product1.jpg" alt="Asus ZenFone Go ZB452KG (black and white)">
                  </div>
                  <h4 class="card_title">
                    Vito Fabius (Металлическая оправа, 6025, черно-мятный)
                  </h4>
                  <div class="card_footer">
                    <div class="card_price"> 3 500 руб.</div>
                    <button class="card_cart">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <defs>
                          <style>
                            .cls-1 {
                              fill-rule: evenodd;
                            }
                          </style>
                        </defs>
                        <path id="cart_icon" data-name="cart icon" class="cls-1" d="M1297,3102a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Zm-6-16v2h2l3.6,7.59-1.35,2.45a1.933,1.933,0,0,0-.25.96,2.006,2.006,0,0,0,2,2h12v-2h-11.58a0.248,0.248,0,0,1-.25-0.25l0.03-.12,0.9-1.63h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49a0.977,0.977,0,0,0,.12-0.48,1,1,0,0,0-1-1h-14.79l-0.94-2H1291Zm16,16a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Z" transform="translate(-1291 -3086)"/>
                      </svg>
                    </button>
                  </div>
                </div> 
                <div class="card">
                  <!-- card header -->
                  <div class="card_header">
                    <div class="card_sale">СКИДКА 10% </div>
                    <div class="card_icon-btns">
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
                      <defs>
                      <style>
                        .cls-1 {
                          fill-rule: evenodd;
                        }
                      </style>
                    </defs>
                    <path id="list_icon" data-name="list icon" class="cls-1" d="M1313,2753h2v-2h-2v2h0Zm0,4h2v-2h-2v2h0Zm0-8h2v-2h-2v2h0Zm4,4h14v-2h-14v2h0Zm0,4h14v-2h-14v2h0Zm0-10v2h14v-2h-14Z" transform="translate(-1313 -2747)"/>
                        </svg>
                      </button>
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18.34" viewBox="0 0 20 18.34">
                          <defs>
                            <style>
                              .cls-1 {
                                fill-rule: evenodd;
                              }
                            </style>
                          </defs>
                          <path id="wishlist_icon" data-name="wishlist icon" class="cls-1" d="M1370.5,2743a5.889,5.889,0,0,1-9,0,5.447,5.447,0,0,0-5.5,5.5c0,3.78,3.4,6.86,8.55,11.54l1.45,1.31,1.45-1.32c5.15-4.67,8.55-7.75,8.55-11.53a5.447,5.447,0,0,0-5.5-5.5h0Zm-4.4,15.55-0.1.1-0.1-.1c-4.76-4.31-7.9-7.16-7.9-10.05a3.418,3.418,0,0,1,3.5-3.5,3.909,3.909,0,0,1,3.57,2.36h1.87a3.885,3.885,0,0,1,3.56-2.36,3.418,3.418,0,0,1,3.5,3.5c0,2.89-3.14,5.74-7.9,10.05h0Z" transform="translate(-1356 -2743)"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <!-- // card header -->
                  <div class="card_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/new/product1.jpg" alt="Asus ZenFone Go ZB452KG (black and white)">
                  </div>
                  <h4 class="card_title">
                    Vito Fabius (Металлическая оправа, 6025, черно-мятный)
                  </h4>
                  <div class="card_footer">
                    <div class="card_price"> 3 500 руб.</div>
                    <button class="card_cart">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <defs>
                          <style>
                            .cls-1 {
                              fill-rule: evenodd;
                            }
                          </style>
                        </defs>
                        <path id="cart_icon" data-name="cart icon" class="cls-1" d="M1297,3102a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Zm-6-16v2h2l3.6,7.59-1.35,2.45a1.933,1.933,0,0,0-.25.96,2.006,2.006,0,0,0,2,2h12v-2h-11.58a0.248,0.248,0,0,1-.25-0.25l0.03-.12,0.9-1.63h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49a0.977,0.977,0,0,0,.12-0.48,1,1,0,0,0-1-1h-14.79l-0.94-2H1291Zm16,16a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Z" transform="translate(-1291 -3086)"/>
                      </svg>
                    </button>
                  </div>
                </div>  
                <div class="card">
                  <!-- card header -->
                  <div class="card_header">
                    <div class="card_sale">СКИДКА 10% </div>
                    <div class="card_icon-btns">
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
                      <defs>
                      <style>
                        .cls-1 {
                          fill-rule: evenodd;
                        }
                      </style>
                    </defs>
                    <path id="list_icon" data-name="list icon" class="cls-1" d="M1313,2753h2v-2h-2v2h0Zm0,4h2v-2h-2v2h0Zm0-8h2v-2h-2v2h0Zm4,4h14v-2h-14v2h0Zm0,4h14v-2h-14v2h0Zm0-10v2h14v-2h-14Z" transform="translate(-1313 -2747)"/>
                        </svg>
                      </button>
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18.34" viewBox="0 0 20 18.34">
                          <defs>
                            <style>
                              .cls-1 {
                                fill-rule: evenodd;
                              }
                            </style>
                          </defs>
                          <path id="wishlist_icon" data-name="wishlist icon" class="cls-1" d="M1370.5,2743a5.889,5.889,0,0,1-9,0,5.447,5.447,0,0,0-5.5,5.5c0,3.78,3.4,6.86,8.55,11.54l1.45,1.31,1.45-1.32c5.15-4.67,8.55-7.75,8.55-11.53a5.447,5.447,0,0,0-5.5-5.5h0Zm-4.4,15.55-0.1.1-0.1-.1c-4.76-4.31-7.9-7.16-7.9-10.05a3.418,3.418,0,0,1,3.5-3.5,3.909,3.909,0,0,1,3.57,2.36h1.87a3.885,3.885,0,0,1,3.56-2.36,3.418,3.418,0,0,1,3.5,3.5c0,2.89-3.14,5.74-7.9,10.05h0Z" transform="translate(-1356 -2743)"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <!-- // card header -->
                  <div class="card_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/new/product1.jpg" alt="Asus ZenFone Go ZB452KG (black and white)">
                  </div>
                  <h4 class="card_title">
                    Vito Fabius (Металлическая оправа, 6025, черно-мятный)
                  </h4>
                  <div class="card_footer">
                    <div class="card_price"> 3 500 руб.</div>
                    <button class="card_cart">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <defs>
                          <style>
                            .cls-1 {
                              fill-rule: evenodd;
                            }
                          </style>
                        </defs>
                        <path id="cart_icon" data-name="cart icon" class="cls-1" d="M1297,3102a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Zm-6-16v2h2l3.6,7.59-1.35,2.45a1.933,1.933,0,0,0-.25.96,2.006,2.006,0,0,0,2,2h12v-2h-11.58a0.248,0.248,0,0,1-.25-0.25l0.03-.12,0.9-1.63h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49a0.977,0.977,0,0,0,.12-0.48,1,1,0,0,0-1-1h-14.79l-0.94-2H1291Zm16,16a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Z" transform="translate(-1291 -3086)"/>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="card">
                  <!-- card header -->
                  <div class="card_header">
                    <div class="card_sale">СКИДКА 10% </div>
                    <div class="card_icon-btns">
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10">
                      <defs>
                      <style>
                        .cls-1 {
                          fill-rule: evenodd;
                        }
                      </style>
                    </defs>
                    <path id="list_icon" data-name="list icon" class="cls-1" d="M1313,2753h2v-2h-2v2h0Zm0,4h2v-2h-2v2h0Zm0-8h2v-2h-2v2h0Zm4,4h14v-2h-14v2h0Zm0,4h14v-2h-14v2h0Zm0-10v2h14v-2h-14Z" transform="translate(-1313 -2747)"/>
                        </svg>
                      </button>
                      <button class="card_icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18.34" viewBox="0 0 20 18.34">
                          <defs>
                            <style>
                              .cls-1 {
                                fill-rule: evenodd;
                              }
                            </style>
                          </defs>
                          <path id="wishlist_icon" data-name="wishlist icon" class="cls-1" d="M1370.5,2743a5.889,5.889,0,0,1-9,0,5.447,5.447,0,0,0-5.5,5.5c0,3.78,3.4,6.86,8.55,11.54l1.45,1.31,1.45-1.32c5.15-4.67,8.55-7.75,8.55-11.53a5.447,5.447,0,0,0-5.5-5.5h0Zm-4.4,15.55-0.1.1-0.1-.1c-4.76-4.31-7.9-7.16-7.9-10.05a3.418,3.418,0,0,1,3.5-3.5,3.909,3.909,0,0,1,3.57,2.36h1.87a3.885,3.885,0,0,1,3.56-2.36,3.418,3.418,0,0,1,3.5,3.5c0,2.89-3.14,5.74-7.9,10.05h0Z" transform="translate(-1356 -2743)"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <!-- // card header -->
                  <div class="card_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/new/product1.jpg" alt="Asus ZenFone Go ZB452KG (black and white)">
                  </div>
                  <h4 class="card_title">
                    Vito Fabius (Металлическая оправа, 6025, черно-мятный)
                  </h4>
                  <div class="card_footer">
                    <div class="card_price"> 3 500 руб.</div>
                    <button class="card_cart">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <defs>
                          <style>
                            .cls-1 {
                              fill-rule: evenodd;
                            }
                          </style>
                        </defs>
                        <path id="cart_icon" data-name="cart icon" class="cls-1" d="M1297,3102a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Zm-6-16v2h2l3.6,7.59-1.35,2.45a1.933,1.933,0,0,0-.25.96,2.006,2.006,0,0,0,2,2h12v-2h-11.58a0.248,0.248,0,0,1-.25-0.25l0.03-.12,0.9-1.63h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49a0.977,0.977,0,0,0,.12-0.48,1,1,0,0,0-1-1h-14.79l-0.94-2H1291Zm16,16a2,2,0,1,0,2,2,2,2,0,0,0-2-2h0Z" transform="translate(-1291 -3086)"/>
                      </svg>
                    </button>
                  </div>
                </div>   
              </div>
              <!-- // карточки товара -->
          </div>
          <!-- // Правая колонка, карточки товара -->
        </div>
      </div>
    </main>
    <!-- // слева каталог, справа карточки товара -->

    <!-- Промо секция -->
    <section class="promo-section">
      <div class="container">
          <div class="promo-section__row">
              <div class="promo-section__col">
                  <!-- Item -->
                  <a href="#" class="promo-section-item-link-wrapper">
                      <div class="promo-section-item">
                          <h4 class="promo-section-item__title">Изготовление очков</h4>
                          <div class="promo-section-item__subtitle">не выходя из дома</div>
                          <img class="promo-section-item__img" src="<?php echo get_template_directory_uri(); ?>/img/promo/ochki.jpg" alt="Headphones">
                      </div>
                  </a>
                  <!-- // Item -->
              </div>
              <div class="promo-section__col">
                  <!-- Item -->
                  <a href="#" class="promo-section-item-link-wrapper">
                      <div class="promo-section-item promo-section-item--background-img promo-section-item--background-img-watch">
                          <h4 class="promo-section-item__title"></h4>
                          <div class="promo-section-item__subtitle"></div>
                      </div>
                  </a>
                  <!-- // Item -->
              </div>
              <div class="promo-section__col">
                  <!-- Item -->
                  <a href="#" class="promo-section-item-link-wrapper promo-section-item-link-wrapper--column">
                      <div class="promo-section-item promo-section-item--small">
                          <div class="promo-section-item__img-cell">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/promo/crazy1.jpeg" alt="">
                          </div>
                          <div class="promo-section-item__title-cell">
                              <h4 class="promo-section-item__title">Линзы в оригинальных упаковках</h4>
                          </div>
                      </div>
                  </a>
                  <!-- // Item -->
                  <!-- Item -->
                  <a href="#" class="promo-section-item-link-wrapper promo-section-item-link-wrapper--column">
                      <div class="promo-section-item promo-section-item--small">
                          <div class="promo-section-item__img-cell">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/promo/ochki1.jpg" alt="">
                          </div>
                          <div class="promo-section-item__title-cell">
                              <h4 class="promo-section-item__title">Широкий ассортимент оправ</h4>
                          </div>
                      </div>
                  </a>
                  <!-- // Item -->
              </div>
          </div>
      </div>
    </section>
    <!-- //Промо секция -->



<?php get_footer();?>

