<?php
/*
Template Name: Шаблон "Корзина"
*/
?>
<?php get_header();?>

<!-- Cart -->

<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Корзина</div>
						<div class="cart_items">
							<ul class="cart_list">
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="<?php echo get_template_directory_uri(); ?>/img/new/product1.jpg" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Наименование</div>
											<div class="cart_item_text">Fabricio (Пластиковая оправа, 500, С1)</div>
										</div>
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Цвет</div>
											<div class="cart_item_text"><span style="background-color:#53301b;"></span>Коричневый</div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Количество</div>
											<div class="cart_item_text">1</div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Цена</div>
											<div class="cart_item_text">2500 руб.</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Сумма</div>
											<div class="cart_item_text">2500 руб.</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Общая сумма:</div>
								<div class="order_total_amount">2500 руб.</div>
							</div>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_clear">Продолжить покупки</button>
							<button type="button" class="button cart_button_checkout">Оформиить заказ</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer();?>