<?php
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
	
	<link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">

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
					<div class="adress"><svg class="icon"><use href="fonts/sprite.svg#location"></use></svg>3 Клиники в Екатеринбурге</div>
					<div class="phone-block">
						<a href="tel:+73433855984" class="phone phone-rs">+7 (3433)855-984</a>
						<div class="time">Сейчас работаем</div>
					</div>
					<div class="control"><a href="#popup" class="btn btn-border sl">Перезвоните мне</a></div>
					
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

							

							<strong class="bonus">🔥 Получите эстетичную улыбку и наслаждайтесь любимой
                                едой уже завтра с помощью установки премиум имплантов  по уникальной технологии, если у вас отсутствует один или
                                больше зубов</strong>
							
							
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
																			<div class="radio__item checked" onclick="javascript:void(0);" data-js-radio="input">
																				<img src="build/ii/30ade30354fe0ce1b9702c701ef8a6e197e469a5.jpg" alt="">
																				<div class="text">Один</div>
																				<input type="radio" name="question_1" value="Один" checked>
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
																				<img src="build/ii/ecaac8b639330791acd77e157b166853cd1af4f6.jpg" alt="">
																				<div class="text">Несколько</div>
																				<input type="radio" name="question_1" value="Несколько">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
																				<img src="build/ii/819cb12d49b23bc32001e1ca96bc1366eee4d175.jpg" alt="">
																				<div class="text">Всю челюсть</div>
																				<input type="radio" name="question_1" value="Всю челюсть">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
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
																			<div class="radio__item checked" onclick="javascript:void(0);" data-js-radio="input">
																				<img src="build/ii/54291d559b11746cc6a47be9bf552bef00d6cb7e.jpg" alt="">
																				<div class="text">Нет</div>
																				<input type="radio" name="question_2" value="Нет" checked>
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
																				<img src="build/ii/819cb12d49b23bc32001e1ca96bc1366eee4d175.jpg" alt="">
																				<div class="text">Нужно удалить</div>
																				<input type="radio" name="question_2" value="Нужно удалить">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
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
																			<div class="radio__item checked" onclick="javascript:void(0);" data-js-radio="input">
																				<img src="build/ii/952be5652797aa725b0b0b1c05c9c9609dd585b1.jpg" alt="">
																				<div class="text">Передние</div>
																				<input type="radio" name="question_3" value="Передние" checked>
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
																				<img src="build/ii/7d18408769e4f702e2eb252ef0c4e20ae159d790.jpg" alt="">
																				<div class="text">Жевательные</div>
																				<input type="radio" name="question_3" value="Жевательные">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
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
																			<div class="radio__item checked" onclick="javascript:void(0);" data-js-radio="input">
																				<div class="text">Под местной анестезией</div>
																				<input type="radio" name="question_4" value="Под местной анестезией" checked>
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
																				<div class="text">Во сне</div>
																				<input type="radio" name="question_4" value="Во сне">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
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
																			<div class="radio__item checked" onclick="javascript:void(0);" data-js-radio="input">
																				<div class="text">Да</div>
																				<input type="radio" name="question_5" value="Да" checked>
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
																				<div class="text">Нет</div>
																				<input type="radio" name="question_5" value="Нет">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
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
																			<div class="radio__item checked" onclick="javascript:void(0);" data-js-radio="input">
																				<div class="text">Telegram</div>
																				<input type="radio" name="question_6" value="Telegram" checked>
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
																				<div class="text">WhatsApp</div>
																				<input type="radio" name="question_6" value="WhatsApp">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
																				<div class="text">Viber</div>
																				<input type="radio" name="question_6" value="Viber">
																			</div>
																		</div>
																		<div>
																			<div class="radio__item" onclick="javascript:void(0);" data-js-radio="input">
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
						<p>Узнать <strong>очень низкую стоимость</strong> установки имплантов в Екатеринбурге <strong>со скидкой до 50%</strong></p>
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

	        <div class="text"><a style="color: #b5d5fd;" href="#popup2">Политика конфендициальности</a></div>
	    </div>
	</div>
	
	<div class="modal" id="thanks">
		<div class="modal-title">
			<b>Спасибо за обращение</b>
			<span>Мы свяжемся с Вами в самые короткие сроки!</span>
		</div>
	</div>

        <div id="popup">
            <div class="popup">
            </div>
            <div class="container">
                <div class="close">X</div>
                <form action="postBitrixTelegram.php" method="post">
                    <input type="hidden" name="utm" value="<?= empty($utm) ? $cookie : $utm ?>">
                    <input type="hidden" name="title" value="<?= $_GET["title"] ?? ''?>">
                    <input type="hidden" name="utm_campaign" value="<?= $_GET["utm_campaign"] ?? ''?>">
                    <input type="hidden" name="utm_medium" value="<?= $_GET["utm_medium"] ?? ''?>">
                    <input type="hidden" name="utm_content" value="<?= $_GET["utm_content"] ?? ''?>">
                    <input type="hidden" name="utm_term" value="<?= $_GET["utm_term"] ?? ''?>">
                    <input type="hidden" name="city" value="<?= $_GET["city"] ?? ''?>">
                    <div class="screen screen1">
                        <h2>Оставьте заявку, мы свяжемся с Вами в ближайшее время</h2>
                        <input type="tel" name="phone" placeholder="Телефон" required>
                        <button class="submit btn">Оставить заявку</button>
                    </div>
                </form>
            </div>


        </div>

        <div id="popup2">
            <div class="popup2">
            </div>
            <div class="container">
                <div class="close">X</div>
                <div class="screen screen1">
                    ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ
                    Российская Федерация, г. Москва
                    Настоящая Политика конфиденциальности персональных данных
                    (далее - Политика конфиденциальности) действует в отношении всей
                    информации, размещенной на настоящем Сайте, расположенном в сети
                    Интернет.
                    Использование Сайта означает ваше согласие с настоящей
                    Политикой и указанными в ней условиями обработки персональной
                    информации.
                    В случае несогласия с этими условиями вы должны воздержаться от
                    использования Сайта.
                    1. ОБЩИЕ ПОЛОЖЕНИЯ
                    1.1. Для защиты ваших личных данных Компанией внедрен ряд
                    средств защиты, которые действуют при введении, передаче или
                    работе с вашими персональными данными с соблюдением требований,
                    предъявляемых Федеральным законом №152-ФЗ от 27 июля 2006 года
                    «О персональных данных».
                    1.2. В рамках настоящей Политики под вашей персональной
                    информацией понимаются:
                    1.2.1. Персональная информация, которую вы предоставили о
                    себе самостоятельно при использовании предоставляемых сайтом
                    Сервисов (отправление заявок и т.п.).
                    1.2.2. Данные, которые автоматически передаются сервисам
                    Сайта в процессе их использования с помощью установленного на
                    вашем устройстве программного обеспечения, в том числе IP-адрес,
                    данные файлов cookie, информация о браузере (или иной программе,
                    с помощью которой осуществляется доступ к сервисам), технические
                    характеристики оборудования и программного обеспечения, дата и
                    время доступа к сервисам, адреса запрашиваемых страниц и иная
                    подобная информация.
                    1.3. Вы даете Компании согласие на обработку следующих
                    персональных данных:
                    1.3.1. имя (обрабатывается как псевдоним);
                    1.3.2. номера контактных телефонов;
                    1.3.3. адреса электронной почты, иных видов электронной связи
                    (если сообщены пользователем);
                    1.3.4. сведения об интересах;
                    1.3.5. сведения о возрасте (при необходимости);
                    1.3.6. сведения, указанные в пункте 1.1 настоящего
                    Пользовательского соглашения.
                    1.4. В ходе обработки с персональными данными будут совершены
                    следующие действия: сбор, запись, систематизация, накопление,
                    хранение, уточнение (обновление, изменение), извлечение,
                    использование, передача (распространение, предоставление,
                    доступ), обезличивание, блокирование, удаление, уничтожение.
                    1.5. Обработка персональных данных производится в течении 18
                    (восемнадцати) месяцев с даты их предоставления, если согласие
                    на их обработку не будет отозвано вами ранее.
                    1.6. Согласие на обработку персональных данных Компанией может
                    быть отозвано вами путем направления вами письменного заявления
                    Компании на электронный адрес info@bazar.media.
                    1.7. В случае отзыва вами согласия на обработку персональных
                    данных Компания вправе продолжить обработку персональных данных
                    без согласия Пользователя при наличии оснований, указанных в
                    пунктах 2 – 11 части 1 статьи 6, части 2 статьи 10 и части 2
                    статьи 11 Федерального закона №152-ФЗ от 27 июля 2006 года «О
                    персональных данных».
                    2. ЦЕЛИ ОБРАБОТКИ ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ
                    2.1. Сайт собирает и хранит только ту персональную информацию,
                    которая необходима для предоставления вам сервисов Сайта, за
                    исключением случаев, когда законодательством РФ предусмотрена
                    обязательная обработка и хранение персональной информации в
                    течение определенного законом срока.
                    2.2. Персональную информацию Сайт обрабатывает в следующих
                    целях:
                    2.2.1. Предоставления вам доступа к сервисам, предоставляемым
                    Сайтом.
                    2.2.2. Предоставления вам услуг либо иного полезного
                    результата, для заказа которых вы воспользовались сервисами
                    Сайта.
                    2.2.3. Установления с вами обратной связи, включая
                    направление уведомлений, запросов, касающихся использования
                    Сайта, обработку ваших запросов и заявок.
                    2.2.4. Определения вашего места нахождения для обеспечения
                    безопасности, предотвращения мошенничества.
                    2.2.5. Подтверждения вами достоверности персональных данных с
                    помощью обратной связи.
                    2.2.6. Уведомления вас о всех изменениях, связанных с
                    порядком использования Сайта.
                    2.2.7. Предоставления вам эффективной клиентской и
                    технической поддержки.
                    2.2.8. Осуществления рекламной деятельности с вашего
                    согласия.
                    3. УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ И ЕЕ ПЕРЕДАЧИ
                    ТРЕТЬИМ ЛИЦАМ
                    3.1. В отношении вашей персональной информации сохраняется ее
                    конфиденциальность.
                    3.2. Ваши личные сведения могут быть разглашены нами только в
                    том случае, если это необходимо для:
                    3.2.1. обеспечения соответствия предписаниям законодательства
                    РФ или требованиям судебного процесса в отношении Компании;
                    3.2.2. защиты прав или собственности Компании;
                    3.2.3. принятия срочных мер по обеспечению личной
                    безопасности наших сотрудников или потребителей предоставляемых
                    им услуг, а также обеспечению общественной безопасности;
                    3.2.4. передача предусмотрена российским или иным применимым
                    законодательством в рамках установленной законодательством
                    процедуры.
                    3.2.5. вы выразили согласие на такие действия.
                    3.3. Личные сведения, полученные в распоряжение Компании при
                    регистрации, могут передаваться третьим организациям и лицам,
                    состоящим с Компанией в партнерских отношениях для улучшения
                    качества оказываемых услуг. Эти сведения не будут использоваться
                    в каких-либо иных целях, кроме перечисленных выше.
                    3.4. Адрес электронной почты, предоставленный вами при
                    регистрации может использоваться для отправки вам сообщений или
                    уведомлений об изменениях, связанных с вашей заявкой, а также
                    рассылки сообщений о происходящих в компании событиях и
                    изменениях, важной информации о новых товарах и услугах и т.д.
                    Предусмотрена возможность отказа от подписки на эти почтовые
                    сообщения.
                    3.5. Вы соглашаетесь, что в случае отчуждения Сайта к
                    приобретателю переходят все обязательства по соблюдению условий
                    настоящей Политики применительно к полученной им персональной
                    информации.
                    3.6. При утрате или разглашении персональных данных Компания
                    информирует вас об утрате или разглашении персональных данных.
                    3.7. Компания принимает необходимые организационные и
                    технические меры для защиты персональной информации от
                    неправомерного или случайного доступа, уничтожения, изменения,
                    блокирования, копирования, распространения, а также от иных
                    неправомерных действий третьих лиц.
                    3.8. Компания принимает все необходимые меры по предотвращению
                    убытков или иных отрицательных последствий, вызванных утратой
                    или разглашением персональных данных.
                    3.9. Персональные данные обрабатываются до момента ликвидации
                    Компании, либо до ликвидации Сайта (в зависимости от того, какое
                    событие наступит позднее). Персональные данные обрабатываются
                    Компанией в порядке, предусмотренном в Политике
                    конфиденциальности согласно действующему законодательству
                    Российской Федерации.
                    3.10. Компания передает персональные данные для обработки в
                    порядке, установленном законом, своему партнеру ООО «Экспо Инт».
                    4. ФАЙЛЫ «COOKIE»
                    4.1. Когда вы посещаете веб-узел, на ваш компьютер
                    записывается файл «cookie» (если вы разрешаете прием таких
                    файлов). Если же вы уже посещали данный веб-узел, файл «cookie»
                    считывается с компьютера. Сбор этих данных осуществляется в
                    обобщенном виде и никогда не соотносится с личными сведениями
                    пользователей.
                    4.2. Третьи стороны, включая компанию Google, используют
                    cookie, чтобы показывать объявления, основанные на предыдущих
                    посещениях пользователем наших вебсайтов и интересах в веббраузерах. Третьи стороны, включая компании Google, показывают
                    объявления Компании на страницах сайтов в Интернете. Вы можете
                    запретить компаниям Google использовать cookie. Для этого
                    необходимо посетить специальную страницу компании Google по
                    этому адресу: http://www.google.com/privacy/ads/.
                    5. ОБЯЗАТЕЛЬСТВА КОМПАНИИ
                    5.1. Компания обязана:
                    5.1.1. Использовать полученную информацию исключительно для
                    целей, указанных в настоящей Политике конфиденциальности.
                    5.1.2. Обеспечить хранение конфиденциальной информации в
                    тайне, не разглашать без вашего предварительного письменного
                    разрешения.
                    5.1.3. Принимать меры предосторожности для защиты
                    конфиденциальности ваших персональных данных согласно порядку,
                    обычно используемому для защиты такого рода информации в
                    существующем деловом обороте.
                    5.1.4. Осуществить блокирование персональных данных с момента
                    вашего обращения или запроса либо уполномоченного органа по
                    защите прав субъектов персональных данных на период проверки в
                    случае выявления недостоверных персональных данных или
                    неправомерных действий.
                    6. ОТВЕТСТВЕННОСТЬ СТОРОН
                    6.1. Компания несет ответственность за убытки, понесенные вами
                    по вине Компании в связи с неправомерным использованием
                    персональных данных, в соответствии с законодательством
                    Российской Федерации.
                    6.2. В случае утраты или разглашения конфиденциальной
                    информации Компания не несет ответственности, если данная
                    конфиденциальная информация:
                    6.2.1. сделана вами общедоступной до ее утраты или
                    разглашения;
                    6.2.2. была получена Компанией от третьей стороны на законных
                    основаниях.
                    6.2.3. была разглашена с вашего согласия.
                    7. РАЗРЕШЕНИЕ СПОРОВ
                    7.1. Вы можете при возникновении каких-либо вопросов
                    предъявить Компании претензию (письменное предложение о
                    добровольном урегулировании спора).
                    7.2. Компания в течение 15 (пятнадцати) календарных дней со
                    дня получения претензии письменно уведомит вас о результатах
                    рассмотрения претензии.
                    7.3. При не достижении соглашения спор будет передан на
                    рассмотрение в суд в соответствии с действующим
                    законодательством Российской Федерации.
                    7.4. К настоящей Политике конфиденциальности и отношениям в
                    связи с ней применяется законодательство Российской Федерации.
                    8. ДОПОЛНИТЕЛЬНЫЕ УСЛОВИЯ
                    8.1. Компания вправе вносить изменения в настоящую Политику
                    конфиденциальности без согласия Пользователя, не ущемляющие ваши
                    права.
                    8.2. Новая Политика конфиденциальности вступает в силу с
                    момента ее размещения на Сайте, если иное не предусмотрено новой
                    редакцией Политики конфиденциальности.
                    8.3. Политика конфиденциальности Компании является в
                    соответствии с требованиями части 2 статьи 18.1 Федерального
                    закона «О персональных данных» общедоступной и постоянно
                    расположена на Сайте.
                </div>
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