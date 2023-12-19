﻿<?php
    $utm = $_GET["utm_source"] ?? "";
    $cookie = $_COOKIE["utm_source"] ?? "";
    if(!array_key_exists("utm_source", $_COOKIE)) {
        setcookie("utm_source", $utm, time()+3600);
    }
    if(array_key_exists("utm_source", $_COOKIE) && $_COOKIE["utm_source"] !== $utm && !empty($utm)) {
        setcookie("utm_source", $utm, time()+3600);
    }
?>

<!DOCTYPE html><html lang="ru"><head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
	
	<title>Имплантация со скидкой 50% от стоматологической клиники Ультра-Дент в Екатеринбурге.</title>
	
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="npm/%40fancyapps/ui%404.0/dist/fancybox.css">

	<link rel="stylesheet" type="text/css" href="slick/slick.css">
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="container">
				<div class="header-block">
					<div class="logo"><img src="images/logo.png" width="250" alt="логотип"></div>
					<div class="adress"><svg class="icon"><use href="fonts/sprite.svg#location"></use></svg>Клиника в Екатеринбурге</div>
					<div class="phone-block">
						<a href="tel:+73433855984" class="phone phone-rs">+7 (3433)855-984</a>
						<div class="time">Сейчас работаем</div>
					</div>
					<div class="control"><a href="#quiz-section" class="btn btn-border sl">Перезвоните мне</a></div>
					
				</div>
			</div>
		</header>

		<div class="main">
			<div class="container">
				<div class="main-block">
					<div class="info">
						<p class="text2">Не хватает нескольких или всех зубов?</p>
						<div class="title">
							<span>НОВЫЕ ЗУБЫ</span><br>
							ЗА 1 ДЕНЬ ПО ОЧЕНЬ <br>
НИЗКОЙ ЦЕНЕ В ЕКАТЕРИНБУРГЕ<br>

							

							<strong class="bonus">🔥 Получите эстетичную улыбку и наслаждайтесь любимой едой уже завтра с помощью установки имплантов Biotem по уникальной технологии, если у вас отсутствует один или больше зубов</strong>
							
							
						</div>
						<!-- <div class="price">Всего за <b>29&nbsp;900 руб.</b> <del>59&nbsp;800 руб.</del></div>
						<mark>Только в этом месяце! Успейте!</mark>	
						<div class="text"><b>Все включено</b>, никаких скрытых платежей! Имплантат <b>+</b> абатмент <b>+</b> металлокерамическая коронка с винтовой фиксацией <b>+</b> работа врача <b>+</b> швы <b>+</b> последующие осмотры. Бесплатная консультация с планом лечения <b>+</b> снимок.</div> -->
						<div class="controls">
							<a href="#quiz-section" class="btn btn_big sl">
								<b>Рассчитайте стоимость</b>
								<span><svg class="icon"><use href="fonts/sprite.svg#present"></use></svg>и получите подарок на выбор</span>
							</a>
						</div>
						<div class="presents">
							<div class="title">После установки имплантов</div>
							<div class="items">
								<div class="item">
									<!-- <div class="image"><img src="images/present-1.jpg" alt="Панорамный 3D-снимок"></div> -->
									<div class="text"><strong>Зубы как свои.</strong> По ощущениям и для окружающих</div>
								</div>

								<div class="item">
									<!-- <div class="image"><img src="images/present-2.jpg" alt="Бесплатная консультация"></div> -->
									<div class="text"><strong>Решение на всю жизнь</strong> - сделал и забыл</div>
								</div>
								<div class="item">
									<!-- <div class="image"><img src="images/present-1.jpg" alt="Панорамный 3D-снимок"></div> -->
									<div class="text"><strong>Питание без ограничений. </strong> Жевать можно почти всё и сразу без боли и дискомфорта</div>
								</div>

								<div class="item">
									<!-- <div class="image"><img src="images/present-2.jpg" alt="Бесплатная консультация"></div> -->
									<div class="text"><strong>Улучшается дикция, разглаживаются морщины </strong> и вы выглядите на 10 лет моложе.</div>
								</div>
								<div class="item">
									<!-- <div class="image"><img src="images/present-1.jpg" alt="Панорамный 3D-снимок"></div> -->
									<div class="text"><strong>Безболезненная установка за 1 день. </strong> Пожизненная гарантия.</div>
								</div>


								
								<!--div class="item blue">
									<div class="image"><img src="img/present-2.jpg" alt="Установка 2-х пломб"></div>
									<div class="text">Установка 2-х пломб</div>
								</div-->
							</div>
						</div>
					</div>
					<div class="image"><img src="images/header_gen.png" alt=""></div>
					<!-- <div class="experience">
						<b>15 лет</b>
						<span>Специализируемся на имплантации зубов</span>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	
	<div class="quiz-section">
		<div class="container">
			<div class="section-title">
				<div class="title">
					Ответьте на 5 простых вопросов и <b>получите
					скидку 50% и панорамный 3D-снимок в подарок</b>
				</div>
			</div>
			<div class="quiz" data-js-scroll-target="quiz" id="quiz">
				<div class="quiz__main">
					<div class="row">
						<form class="quiz__form" data-js-quiz="wrapper" action="postBitrixTelegram.php" method="POST">
                            <input type="hidden" name="tags" value="Заявка с квиза" class="input">
                            <input type="hidden" name="subject" value="Пройден тест (квиз)">
                            <input type="hidden" name="form_type" value="quiz">
                            <input type="hidden" name="utm" value="<?= empty($utm) ? $cookie : $utm ?>">
                            <input type="hidden" name="title" value="<?= $_GET["title"] ?? ''?>">
                            <input type="hidden" name="utm_campaign" value="<?= $_GET["utm_campaign"] ?? ''?>">
                            <input type="hidden" name="utm_medium" value="<?= $_GET["utm_medium"] ?? ''?>">
                            <input type="hidden" name="utm_content" value="<?= $_GET["utm_content"] ?? ''?>">
                            <input type="hidden" name="utm_term" value="<?= $_GET["utm_term"] ?? ''?>">
                            <input type="hidden" name="city" value="<?= $_GET["city"] ?? ''?>">
							<div class="quiz__grid">
								<div>
									<div class="quiz__employee">
										<div class="quiz__employee__photo-wrapper">
											<div class="quiz__employee__photo"> <img src="images/kristine.png" alt=""> </div>
										</div>
										<div class="quiz__employee__fio">
											<strong style="text-decoration: underline">Гудкова кристине</strong>
											<span>
                                    Врач стоматолог
                                 </span>
										</div>
										<div class="quiz__employee__note">
											<i><img src="build/ii/338d550cce5c07a5faa59c0debeaa725c9476375.png" alt=""></i>
											<div> Посчитаем <b>3 варианта</b> стоимости под разный бюджет: <b><span style="color: #ffa600;">эконом, стандарт и премиум</span></b> </div>
										</div>
									</div>
								</div>
								<div>
									<div class="quiz__form-wrapper">
										<div class="quiz__form__inner" data-js="quiz-inner">
											<div class="quiz__pages-wrapper-outer">
												<div class="quiz__form__progress quiz__form__progress_1" data-js="quiz-progress"> <span class="quiz__form__progress__step"><b>Шаг&nbsp;</b> <span class="current">1</span>/<span class="total"></span></span> </div>
												<div class="quiz__pages-wrapper">
													<div class="quiz__pages" data-js="quiz-pages" data-js-slider="">
														<div class="quiz__page quiz__page_1">
															<div class="quiz__page__title">Сколько зубов нужно восстановить?</div>
															<div class="quiz__page__content">
																<div class="quiz__radio-wrapper" data-js="radio">
																	<div class="quiz__radio quiz__radio_images" data-js-radio="inputs">
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<img src="build/ii/30ade30354fe0ce1b9702c701ef8a6e197e469a5.jpg" alt="">
																				<div class="text">Один</div>
																				<input type="radio" name="question_1" value="Один">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<img src="build/ii/ecaac8b639330791acd77e157b166853cd1af4f6.jpg" alt="">
																				<div class="text">Несколько</div>
																				<input type="radio" name="question_1" value="Несколько">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<img src="build/ii/819cb12d49b23bc32001e1ca96bc1366eee4d175.jpg" alt="">
																				<div class="text">Всю челюсть</div>
																				<input type="radio" name="question_1" value="Всю челюсть">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<img src="build/ii/54291d559b11746cc6a47be9bf552bef00d6cb7e.jpg" alt="">
																				<div class="text">Обе челюсти</div>
																				<input type="radio" name="question_1" value="Обе челюсти">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="quiz__page quiz__page_2">
															<div class="quiz__page__title">Зубов нет или нужно удалить?</div>
															<div class="quiz__page__content">
																<div class="quiz__radio-wrapper" data-js="radio">
																	<div class="quiz__radio quiz__radio_images quiz__radio_images_short" data-js-radio="inputs">
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<img src="build/ii/54291d559b11746cc6a47be9bf552bef00d6cb7e.jpg" alt="">
																				<div class="text">Нет</div>
																				<input type="radio" name="question_2" value="Нет">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<img src="build/ii/819cb12d49b23bc32001e1ca96bc1366eee4d175.jpg" alt="">
																				<div class="text">Нужно удалить</div>
																				<input type="radio" name="question_2" value="Нужно удалить">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<img src="build/ii/30ade30354fe0ce1b9702c701ef8a6e197e469a5.jpg" alt="">
																				<div class="text">Затрудняюсь ответить</div>
																				<input type="radio" name="question_2" value="Затрудняюсь ответить">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="quiz__page quiz__page_3">
															<div class="quiz__page__title">Какие зубы нужно удалить?</div>
															<div class="quiz__page__content">
																<div class="quiz__radio-wrapper" data-js="radio">
																	<div class="quiz__radio quiz__radio_images quiz__radio_images_short" data-js-radio="inputs">
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<img src="build/ii/952be5652797aa725b0b0b1c05c9c9609dd585b1.jpg" alt="">
																				<div class="text">Передние</div>
																				<input type="radio" name="question_3" value="Передние">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<img src="build/ii/7d18408769e4f702e2eb252ef0c4e20ae159d790.jpg" alt="">
																				<div class="text">Жевательные</div>
																				<input type="radio" name="question_3" value="Жевательные">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<img src="build/ii/819cb12d49b23bc32001e1ca96bc1366eee4d175.jpg" alt="">
																				<div class="text">И те, и другие</div>
																				<input type="radio" name="question_3" value="И те, и другие">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="quiz__page quiz__page_4">
															<div class="quiz__page__title">Как вы хотите провести операцию?</div>
															<div class="quiz__page__content">
																<div class="quiz__radio-wrapper" data-js="radio">
																	<div class="quiz__radio quiz__radio_text" data-js-radio="inputs">
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<div class="text">Под местной анестезией</div>
																				<input type="radio" name="question_4" value="Под местной анестезией">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<div class="text">Во сне</div>
																				<input type="radio" name="question_4" value="Во сне">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<div class="text">Затрудняюсь ответить</div>
																				<input type="radio" name="question_4" value="Затрудняюсь ответить">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="quiz__page quiz__page_5">
															<div class="quiz__page__title">Оформим налоговый вычет 13%?</div>
															<div class="quiz__page__content">
																<div class="quiz__radio-wrapper" data-js="radio">
																	<div class="quiz__radio quiz__radio_text" data-js-radio="inputs">
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<div class="text">Да</div>
																				<input type="radio" name="question_5" value="Да">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<div class="text">Нет</div>
																				<input type="radio" name="question_5" value="Нет">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<div class="text">Затрудняюсь ответить</div>
																				<input type="radio" name="question_5" value="Затрудняюсь ответить">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="quiz__page quiz__page_6">
															<div class="quiz__page__title">Куда Вам отправить расчёт стоимости по имплантации зубов?</div>
															<div class="quiz__page__content">
																<div class="quiz__radio-wrapper" data-js="radio">
																	<div class="quiz__radio quiz__radio_text" data-js-radio="inputs">
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<div class="text">Telegram</div>
																				<input type="radio" name="question_6" value="Telegram">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<div class="text">WhatsApp</div>
																				<input type="radio" name="question_6" value="WhatsApp">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<div class="text">Viber</div>
																				<input type="radio" name="question_6" value="Viber">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-quiz-navigation="forward" data-js-radio="input">
																				<div class="text">По телефону</div>
																				<input type="radio" name="question_6" value="По телефону">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="quiz__pages__navigation" data-js="quiz-navigation">
														<div class="quiz__pages__gift">
															<i> <img src="index.php" data-src="build/ii/1e25ef409292c773bac7533d330e8b588fc7be92.png" alt="" data-js="lazy"> </i>
															<div>
																Пройдите тест до конца и&nbsp;<b>получите подарок</b> стоимостью
																<div class="quiz__pages__gift__price">3 500&nbsp;₽</div>
															</div>
														</div>
														<a href="javascript:void(0);" class="btn btn2 btn_orange btn_arrow btn_forward" data-js-quiz-navigation="forward"> <span class="blink"></span> <span class="text">Далее</span> </a>
													</div>
												</div>
											</div>
											<div class="quiz__results">
												<div class="quiz__results__form">
													<div class="quiz__results__header">Введите номер, на который отправить расчёт</div>
													<div class="quiz__results__sub-header"> Введите свой номер телефона и получите расчёт в трёх вариантах в течение дня </div>
													<div class="quiz__results__form-inner">
														<div class="form__group form__group_phone required"> <input type="text" class="input input_phone" name="phone" required="" placeholder="Ваш номер"> </div>
														<div class="form__group form__group_button"> <button type="submit" class="btn btn2 btn_correct_size_results btn_orange"> <span class="blink"></span> <span class="text">Отправить</span> </button> </div>
														<div class="form__policy"> Нажимая на кнопку, вы соглашаетесь на обработку <a href="personal.pdf"><span>персональных данных</span></a> </div>
													</div>
												</div>
												<div class="quiz__pages__gift quiz__results__gift">
													<i> <img src="index.php" data-src="build/ii/1e25ef409292c773bac7533d330e8b588fc7be92.png" alt="" data-js="lazy"> </i>
													<div>
														За этим номером забронируем ваш подарок — <b>3D снимок полости рта бесплатно</b>
														<div class="quiz__results__gift__price"> <span class="old">3 500</span> <span class="new">0 ₽</span> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
		</div>
	</div>


	<div class="slide">
		<div class="container">
			<div class="section-title">
				<div class="title">Примеры наших работ</div>
				<div class="subtitle">За 12 лет установили уже 23 305 имплантов</div>


				<div id="slider">
					<div>
					<img src="images/slider/1.jpg" alt=""></div>
					<div><img src="images/slider/2.jpg" alt=""></div>
					<div><img src="images/slider/3.jpg" alt=""></div>
				</div>


				<h2>ОТВЕТЬТЕ НА 3 ВОПРОСА, ЧТОБЫ</h2>

				<ul class="pluss">
					<li>
						<img src="images/check.png" alt="">
						<p>Узнать <strong>очень низкую стоимость</strong> установки имплантов в Самаре <strong>со скидкой до 50%</strong></p>
					</li>
					<li>
						<img src="images/check.png" alt="">
						<p>Получить снимок компьютерной томографии <strong>в подарок</strong> при первом посещении клиники</p>
					</li>
				</ul>

				<div class="controls">
					<a href="#quiz-section" class="btn btn_big sl">
						<b>Рассчитайте стоимость</b>
						<span><svg class="icon"><use href="fonts/sprite.svg#present"></use></svg>и получите подарок на выбор</span>
					</a>
				</div>


			</div>
		</div>
	</div>
	
	<div class="copyright">
	    <div class="container">
	       <!--  <div class="link">
	            <a href="images/lic.jpg" data-fancybox="lic">Наши лицензии</a>
	            <a href="images/lic2.jpg" data-fancybox="lic"></a>
	        </div> -->
	        <div class="text" style="color: #ffffff;">ООО «Ультра-Мед» <br>
				ОГРН 1187232005740; ИНН 7203444156<br>
				Лицензия № ЛО-41-01021-66/00358238<br>
				Центр эффективной имплантации в Екатеринбурге<br>
				Имеются противопоказания, необходима консультация врача<br>
				Обращаем ваше внимание на то, что данный Интернет-сайт носит исключительно информационный характер и ни при каких
				условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ.<br>
</div>

	        <div class="text"><a style="color: #b5d5fd;" href="policy.pdf" target="_blank">Политика конфендициальности</a></div>
	    </div>
	</div>
	
	<div class="modal" id="thanks">
		<div class="modal-title">
			<b>Спасибо за обращение</b>
			<span>Мы свяжемся с Вами в самые короткие сроки!</span>
		</div>
	</div>







  <script type="text/javascript" src="jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#slider').slick({
		centerMode: true,
  infinite: true,
		dots: true,
  speed: 300,
  slidesToShow: 1,
  responsive: [
    {
      breakpoint: 600,
      settings: {
		centerMode: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
        dots: true,
		arrows:false
      }
    }]

      });
    });
  </script>




	<!-- <script src="js/jquery.fancybox.min.js"></script> -->
	<!-- <script src="js/jquery.mask.min.js"></script> -->
	<script src="js/scripts.js"></script>



<script src="thanks/thanks.js"></script>
<script src="ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="npm/%40fancyapps/ui%404.0/dist/fancybox.umd.js"></script>
    <script>

//     	var gallery = [
//   {
//     src: "img/lic/1.jpg",
//     thumb: "img/lic/1.jpg",
//   },
//   {
//     src: "img/lic/2.jpg",
//     thumb: "img/lic/2.jpg",
//    },
//   {
//     src: "img/lic/3.jpg",
//     thumb: "img/lic/3.jpg",
//    },
// ];
// $('.lic_slide').click(function(){
// 	Fancybox.show(gallery, {
//   // Your options go here
// });

// });



</script>
<script type="text/javascript">
    jQuery(function ($) {
        $.mask.definitions['~'] = '[9]';
        $("input[name='phone']").mask("+7 (999) 999 99 99");

        $('form:not(.ajax-form)').on('submit', function () {
            $(this).find('[type=submit]').attr('disabled', true);
        });
    });
</script>
		<script src="js/96b6a4bf4e8672da7ea7.js"></script>

<!--<script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=6755342139802685"></script>-->
</body></html>