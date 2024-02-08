<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AlfaOptika
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>AlfaOptika</title> 
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"> 
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pure-min.css"> 
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl-carousel/assets/owl.carousel.min.css"> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<body>
<style>
  .header-select_title::after{
	background-image: url("<?php echo get_template_directory_uri(); ?>/img/arrow icon.svg");
  }
</style>
    <header class="header"> 
        <div class="header__container">
            <!-- Логотип -->
            <div class="header_logo">
              <div class="logo">AlfaOptika</div>
            </div>
            <!-- Поисковая строка с ыпадающим меню по категориям -->
            <form class="header_search">
                <div class="header_search-input-wrapper">
                    <input class="header_search-input" type="text" placeholder="Поиск товаров">
                </div>
                <div class="header_search-dropdown">
                    <div data-select class="header-select">
                        <div data-select-title class="header-select_title">Категория</div>
                        <div class="header-select_dropdown hidden">
                            <div data-select-item="все" 
                            class="header-select_dropdown-item">Все</div>
                            <div data-select-item="акссесуары" 
                            class="header-select_dropdown-item">Акссесуары</div>
                            <div data-select-item="антифары" 
                            class="header-select_dropdown-item">Антифары</div>
                            <div data-select-item="готовые очки" 
                            class="header-select_dropdown-item">Готовые очки</div>
                            <div data-select-item="компьютерные" 
                            class="header-select_dropdown-item">Компьютерные</div>
                            <div data-select-item="контактные линзы, растворы" 
                            class="header-select_dropdown-item">Контактные линзы, растворы</div>
                            <div data-select-item="оправы" 
                            class="header-select_dropdown-item">Оправы</div>
                            <div data-select-item="с/з очки" 
                            class="header-select_dropdown-item">С/з очки</div>
                            <div data-select-item="тренажеры" 
                            class="header-select_dropdown-item">Тренажеры</div>
                        </div>
                    </div>
                    <select class="hidden" name="" id="selectReal" value="none">
                        <option value="none">Категории</option>
                        <option value="все">Все</option>
                        <option value="акссесуары">Акссесуары</option>
                        <option value="антифары">Антифары</option>
                        <option value="готовые очки">Готовые очки</option>
                        <option value="компьютерные">Компьютерные</option>
                        <option value="контактные линзы, растворы">Контактные линзы, растворы</option>
                        <option value="оправы">Оправы</option>
                        <option value="с/з очки">С/з очки</option>
                        <option value="тренажеры">Тренажеры</option>
                    </select>
                </div>
                <div class="header_search-button-wrapper">
                    <button class="header_search-button"  type="submit">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/search-icon.svg" alt="">
                    </button>
                </div>
            </form>
            <!-- Козина, Избранное, Войти в систему -->
            <div class="header_links">
                <!-- Корзина -->
                <a href="#" class="header-link header-link--notify">
                    <span class="header-link_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.16" height="20" viewBox="0 0 20.16 20">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill-rule: evenodd;
                                }
                              </style>
                            </defs>
                            <path id="icon" class="cls-1" d="M1606,1769a2,2,0,1,0,2,2A2,2,0,0,0,1606,1769Zm-11.99,2a2,2,0,1,0,1.99-2A2,2,0,0,0,1594.01,1771Zm13.3-14h-12.15l2.24,4.73,0.13,0.27h7.02Zm-13.1-2H1610l0.16,0.96-3.86,7.01a1.991,1.991,0,0,1-1.75,1.03h-7.45l-0.9,1.63-0.03.12a0.254,0.254,0,0,0,.25.25H1608v2h-12a2.006,2.006,0,0,1-2-2,1.933,1.933,0,0,1,.25-0.96l1.35-2.45L1592,1755h-2v-2h3.27Z" transform="translate(-1590 -1753)"/>
                          </svg>
                    </span>
                    <span class="header-link_text">2 Товара</span>
                </a>
                <!-- // Корзина -->
                <!-- Избранное -->
                <a href="#" class="header-link">
                    <span class="header-link_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18.34" viewBox="0 0 20 18.34">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill-rule: evenodd;
                                }
                              </style>
                            </defs>
                            <path id="wishlist_icon" data-name="wishlist icon" class="cls-1" d="M1721.1,1769.55l-0.1.1-0.1-.1c-4.76-4.31-7.9-7.16-7.9-10.05a3.418,3.418,0,0,1,3.5-3.5,3.909,3.909,0,0,1,3.57,2.36h1.87a3.885,3.885,0,0,1,3.56-2.36,3.418,3.418,0,0,1,3.5,3.5C1729,1762.39,1725.86,1765.24,1721.1,1769.55Zm4.4-15.55a5.889,5.889,0,0,1-9,0,5.447,5.447,0,0,0-5.5,5.5c0,3.78,3.4,6.86,8.55,11.54l1.45,1.31,1.45-1.32c5.15-4.67,8.55-7.75,8.55-11.53A5.447,5.447,0,0,0,1725.5,1754Z" transform="translate(-1711 -1754)"/>
                          </svg>
                    </span>
                    <span class="header-link_text">Избранное</span>
                </a>
                <!-- // Избранное -->
                <!-- Войти в систему -->
                <a href="#" class="header-link">
                    <span class="header-link_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill-rule: evenodd;
                                }
                              </style>
                            </defs>
                            <path id="user_icon" data-name="user icon" class="cls-1" d="M1856,1764c-2.67,0-8,1.34-8,4v3h16v-3C1864,1765.34,1858.67,1764,1856,1764Zm0-9a4,4,0,1,0,4,4A4,4,0,0,0,1856,1755Zm0,10.9c2.97,0,6.1,1.46,6.1,2.1v1.1h-12.2V1768C1849.9,1767.36,1853.03,1765.9,1856,1765.9Zm0-9a2.1,2.1,0,1,1-2.1,2.1A2.1,2.1,0,0,1,1856,1756.9Z" transform="translate(-1848 -1755)"/>
                          </svg>
                    </span>
                    <span class="header-link_text">Войти в систему</span>
                </a>
                 <!-- // Войти в систему -->
            </div>
        </div>
        <div class="header_nav">
            <nav class="header-nav">
                <!-- Каталог -->
                <div class="header-nav_categories">
                    <a href="#" class="header-mega-menu-link">
                        <span class="header-mega-menu-link_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12">
                                <defs>
                                  <style>
                                    .cls-1 {
                                      fill-rule: evenodd;
                                    }
                                  </style>
                                </defs>
                                <path id="menu_icon" data-name="menu icon" class="cls-1" d="M888,1851v2h18v-2H888Zm0,7h18v-2H888v2Zm0,5h18v-2H888v2Z" transform="translate(-888 -1851)"/>
                              </svg>
                        </span>
                        <span class="header-mega-menu-link_text">Каталог</span>
                    </a> 
                </div>
                <!-- Ссылки Акции, Бренды, Коллекции, Популярные -->
                <div class="header-nav_deals">
                        <a href="#" class="header-nav_link">Главная</a>
                        <a href="#" class="header-nav_link">Новинки</a>
                        <a href="#" class="header-nav_link">Распродажа</a>
                        <a href="#" class="header-nav_link">О нас</a>
                        <a href="#" class="header-nav_link">Контакты</a>
                </div>
                <!-- Помощь -->
                <div class="header-nav_select-item">
                  <!--dropdown nav-->
                  <div class="nav-dropdown">
                    <a href="#" class="nav-dropdown_title">Помощь
                      <div class="nav-dropdown_title-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5">
                          <defs>
                            <style>
                              .cls-1 {
                                fill-rule: evenodd;
                              }
                            </style>
                          </defs>
                          <path id="arrow_icon" data-name="arrow icon" class="cls-1" d="M1440,1766l4-2.5v-2.4l-4,2.52-4-2.62v2.5Z" transform="translate(-1436 -1761)"/>
                        </svg>
                      </div>
                    </a>
                    <div class="nav-dropdown_dropdown">
                      <a href="#" class="nav-dropdown_dropdown-item">Карта сайта</a>
                      <a href="#" class="nav-dropdown_dropdown-item">Как оформить заказ</a>
                      <a href="#" class="nav-dropdown_dropdown-item">Ответы на вопросы</a>
                      <a href="#" class="nav-dropdown_dropdown-item">Обратная связь</a>
                      <a href="#" class="nav-dropdown_dropdown-item">Доставка и оплата</a>
                      <a href="#" class="nav-dropdown_dropdown-item">Сертификаты</a>
                   </div>
                  </div>
                  <!--// dropdown nav-->
                </div> 
                <!-- //Помощь -->
                <!-- Бренды -->
                <div class="header-nav_select-item">
                  <!--dropdown nav-->
                  <div class="nav-dropdown">
                    <a href="#" class="nav-dropdown_title">Услуги
                      <div class="nav-dropdown_title-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5">
                          <defs>
                            <style>
                              .cls-1 {
                                fill-rule: evenodd;
                              }
                            </style>
                          </defs>
                          <path id="arrow_icon" data-name="arrow icon" class="cls-1" d="M1440,1766l4-2.5v-2.4l-4,2.52-4-2.62v2.5Z" transform="translate(-1436 -1761)"/>
                        </svg>
                      </div>
                    </a>
                    <div class="nav-dropdown_dropdown">
                      <a href="#" class="nav-dropdown_dropdown-item">Изготовление очков</a>
                   </div>
                  </div>
                  <!--// dropdown nav-->
                </div>
                <!-- //Бренды -->
                
            </nav>
        </div>
    </header>