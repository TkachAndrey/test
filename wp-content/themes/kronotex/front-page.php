<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */
	get_header(); ?>
	
	<!-- <section class="slider">
		<div class="slider__slogan">
			<h1 class="slider__slogan_h1">
				<span class="slider__slogan_bold"><?php bloginfo('name'); ?></span>
				<br><?php bloginfo('description'); ?>
			</h1>
		</div>
		<div class="slider__image">
			<div class="slider__image_1"></div>
			<div class="slider__image_2"></div>
			<div class="slider__image_3"></div>
		</div>
		<div class="wrapper relative">
			<div class="slider__arrows">
				<div class="slider__arrow slider__arrow_left">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/left-arrow.png" alt="">
				</div>
				<div class="slider__arrow slider__arrow_right">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/right-arrow.png" alt="">
				</div>
			</div>
		</div>
	</section> --><!-- /slider -->

	<section class="advantages">
		<div class="wrapper">
			<div class="advantages__slogan">
				<h2 class="advantages__slogan_h2">Ламинат от Kronotex</h2>
				<p class="advantages__slogan_p">При огромном разнообразии декоров высококачественного ламината <span class="uppCase">kronotex</span> вы можете произвести яркое впечатление индивидуальным стилем своего жилища</p>
			</div>
			<div class="advantages__block">
				<div class="advantages__items">
					<div class="advantages__items_img1 advantages__items_img">
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/adv1.svg" alt="">
					</div>
					<h3 class="advantages__items_h3" >Экологическая чистота для жилищного комфорта</h3>
					<p class="advantages__items_p">Ламинат состоит приблизительно на 90 процентов из древесины, природного материала, поэтому по своей сути ламинат экологичный и, следовательно, безопасный для здоровья человека и окружающей среды</p>
				</div><!-- /.advantages__items -->
				<div class="advantages__items">
					<div class="advantages__items_img2 advantages__items_img">
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/adv2.svg" alt="">
					</div>
					<h3 class="advantages__items_h3">Лёгкость укладки, прочность и минимум ухода</h3>
					<p class="advantages__items_p">Ламинат отвечает всем требованиям к современному, индивидуальному проживанию. Это включает в себя не только многообразие дизайна, но и хорошие эксплуатационные характеристики</p>
				</div><!-- /.advantages__items -->
				<div class="advantages__items">
					<div class="advantages__items_img3 advantages__items_img">
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/adv3.svg" alt="">
					</div>
					<h3 class="advantages__items_h3 advantages__items_madeIn">Сделано в Германии</h3>
					<p class="advantages__items_p">Основным видом деятельности основанной в 1993 году компании <span class="uppCase">kronotex</span> является производство высококачественного ламината. Компания <span class="uppCase">kronotex</span> является одним из ведущих производителей ламината в Европе</p>
				</div><!-- /.advantages__items --></div>
		</div>
	</section><!-- /.advantages -->

	<section class="categories">

		<div class="categories__grid">
			<div class="categories__grid_item categories__grid_laminat">
				<h2 class="categories__grid_h2 categories__grid_h2-laminat">Ламинат</h2>
			</div>

			<div class="categories__grid_item categories__grid_podlojki">
				<h2 class="categories__grid_h2 categories__grid_h2-podlojki">Изоляционные подложки</h2>
			</div>

			<div class="categories__grid_item categories__grid_plintus">
				<h2 class="categories__grid_h2 categories__grid_h2-plintus">Плинтус, уголки, аксессуары</h2>
			</div>

			<div class="categories__grid_item categories__grid_shop">
				<h2 class="categories__grid_shop-h2">мы открыли интернет-магазин</h2>
				<p class="categories__grid_shop-p">Теперь вы можете приобрести продукцию Kronotex<br>напрямую у нас</p>
				<button class="categories__grid_shop-btn">Перейти в интернет–магазин</button>
			</div>
		</div>	
	</section><!-- /.categories -->

	<section class="plan">
		<div class="wrapper">
			<div class="plan__content">
				<div class="plan__text">
					<h2 class="plan__text_h2">Чтобы Вам было удобно <span class="redColor">рассчитать и распечатать</span></h2>
					<p class="plan__text_p">Специально для Вас мы разработали простой и удобный онлайн-сервис по расчету необходимого количества напольного покрытия для помещений разных конфигураций. Всего в несколько кликов Вы можете рассчитать площадь, а после распечатать получившийся план с размерами. Это быстро, удобно и бесплатно.</p>
					<button class="plan__text_btn">Создать технический план</button>
				</div>
				<div class="plan__content_img">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/plan.svg" alt="">
				</div>
				<div class="plan__content_rightTopBox"></div>
				<div class="plan__content_leftBottomBox"></div>
			</div>
		</div>
	</section><!-- /.plan -->

	<section class="lastBlock">
		<div class="lastBlock__trippleBlock">
			<div class="lastBlock__trippleBlock_1">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/trippleBlock1.jpg" alt="">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/arrow-left.png" alt="" class="lastBlock__trippleBlock_1-img">
			</div>
			<div class="lastBlock__trippleBlock_2">
				<p class="lastBlock__trippleBlock_2-p lastBlock__trippleBlock_2-p1">
					Полы, полностью повторяющие структуру древесины или натурального камня
				</p>
				<p class="lastBlock__trippleBlock_2-p lastBlock__trippleBlock_2-p2">
					<span class="uppCase">kronotex</span> предлагает идеальные решения высочайшего качества для любых помещений.
				</p>
			</div>
			<div class="lastBlock__trippleBlock_3">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/trippleBlock3.jpg" alt="">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/arrow-right.png" alt="" class="lastBlock__trippleBlock_3-img">
			</div>
		</div><!-- /.lastBlock__trippleBlock -->
	</section><!-- /.lastBlock -->


	<!-- popup -->
	<div class="overlay_popup"></div>

	<div class="popup" id="popup">
		<!-- checkIn -->
		<div class="checkIn">
			<h3 class="checkIn__h3">Вход</h3>
			<div class="checkIn__btn_x popup-close">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/x.svg" alt="">
			</div>
			<form class="checkIn__form">
				<p class="checkIn__form_logIn"><input type="text" class="checkIn__form_logIn-input" placeholder="Логин или e-mail"  required autocomplete="on" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"></p>
				<p class="checkIn__form_password">
					<input type="password" class="checkIn__form_password-input" placeholder="Пароль" required autocomplete="off" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
					<span class="checkIn__form_password-svg" id="eyeCheck">
					</span>
				</p>
				<p class="checkIn__form_checkbox">
					<input type="checkbox" class="checkIn__form_checkbox-input" id="checkbox"  name="checkbox">
					<label class="checkIn__form_checkbox-label" for="checkbox">чужой компьютер</label>
					<a href="#" class="checkIn__form_checkbox-link">Забыли пароль?</a>
				</p>
				<p>
					<input type="submit" class="checkIn__form_submit-enter" value="Войти">
				</p>
			</form>
			<div class="checkIn__form_registr">
				<a href="#" class="checkIn__form_link">Регистрация</a>
			</div>
			<div class="checkIn__social">
				<a href="#" class="checkIn__social_item checkIn__social_fb">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/facebook.svg" alt="">
				</a>
				<a href="#" class="checkIn__social_item checkIn__social_google">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/google-plus.svg" alt="">
				</a>
				<a href="#" class="checkIn__social_item checkIn__social_ok">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/ok.svg" alt="">
				</a>
				<a href="#" class="checkIn__social_item checkIn__social_vk">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/vk.svg" alt="">
				</a>
			</div>
		</div>

		<!-- --- registration --- -->
		<div class="registration">
			<h3 class="registration__h3">Регистрация</h3>
			<div class="registration__btn_x popup-close">
				<img src="assets/img/x.svg" alt="">
			</div>
			<form class="registration__form">
				<p class="registration__form_logIn">
					<input type="email" class="registration__form_logIn-input" placeholder="E-mail" required autocomplete="on" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
				</p>
				<p class="registration__form_password">
					<input type="password" class="registration__form_password-input" placeholder="Пароль" required autocomplete="off" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
					<span class="registration__form_password-svg" id="eyeReg" >
					</span>
				</p>
				<p class="registration__form_politic">
					Нажимая на кнопку «Зарегистрироваться», я подтверждаю, что ознакомлен и согласен с <a href="#" class="registration__form_politic-link">условиями политики конфиденциальности</a>
				</p>
				<p>
					<input type="submit" class="registration__form_submit-enter" value="Зарегистрироваться">
				</p>
			</form>
			<div class="registration__form_enter">
				<a href="#" class="registration__form_link">Войти</a>
			</div>
			<div class="registration__social">
				<a href="#" class="registration__social_item registration__social_fb">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/facebook.svg" alt="">
				</a>
				<a href="#" class="registration__social_item registration__social_google">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/google-plus.svg" alt="">
				</a>
				<a href="#" class="registration__social_item registration__social_ok">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/x.svg" alt="">
				</a>
				<a href="#" class="registration__social_item registration__social_vk">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/vk.svg" alt="">
				</a>
			</div>
		</div>
	</div>=

	<?php get_footer(); ?>