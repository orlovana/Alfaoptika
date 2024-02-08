<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AlfaOptika
 */

?>

<footer class="footer">
      <div class="footer-top-wrapper">
        <div class="container">
          <div class="footer_row">
            <div class="footer_logo">
              <div class="logo">AlfaOptika</div>
            </div>
            <div class="footer_nav">
              <nav class="nav-footer">
                <ul class="nav_footer_list">
                  <li class="nav_footer_list-item">
                    <a href="#" class="nav_footer_link">Сертификаты</a>
                  </li>
                  <li class="nav_footer_list-item">
                    <a href="#" class="nav_footer_link">Контакты</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="footer_row footer_row--copyright">
          <div class="footer_copyright">
            <div class="copyright">
              <div class="copyright_item">© 2024. AlfaOptika</div>
            </div>
          </div>
          <div class="footer_payment">
            <div class="payments">
              <div class="payments_text">Принятые платежные системы</div>
              <div class="payments_icons">
                <div class="payments_icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/payment-icons/visa icon.png" alt="VISA">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/payment-icons/master card icon.png" alt="MASTER CARD">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/payment-icons/pay pal icon.png" alt="PAY PAL">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/libs/jguery/jquery-3.3.1.min.js"></script>
    <!-- Owlcarousel -->
    <script src="<?php echo get_template_directory_uri(); ?>/libs/owl-carousel/owl.carousel.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/heder-select.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	<?php wp_footer(); ?>

  </body>
</html>   



