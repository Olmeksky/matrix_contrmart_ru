<?php
/*
Template Name: Матрица Совместимости
Template Post Type: post, page, matrix_fate
*/
?>
<?php get_header('so'); ?>

	<!-- Основное содержимое страницы в секции-->
	<main>
	<div class="container-lg">
	<section>
		<div class="row">
			<div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
				<article>
					<div class="card pe-4">
						<div class="card-body">
							<h1 class="card-title my-2">Расчет совместимости</h1>
							<h5 class="card-subtitle p-2 ms-4">Рассчитайте матрицу совместимости.</h5>
							<hr class="hr hr-blurry" />
							<form class="matr-form d-xl-flex my-2" action="/sovmestimost/" method="get">
								<div class="row">
									<div class="col-lg-6 col-12">
										<div class="form-group bg-light px-2">
											<h5 class="card-subtitle p-2 ms-4">Ваши данные</h5>
											<input type="text" class="form-control-lg my-4 w-100" name="firstname" id="checkName" placeholder="Ваше имя" aria-label="Имя 1">
											<input type="date" class="form-control-lg my-4 w-100" name="birthday" id="checkDate" placeholder="Дата вашего рождения" aria-label="Дата 1">
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group bg-light px-2">
											<h5 class="card-subtitle p-2 ms-4">Данные вашей половинки</h5>
											<input type="text" class="form-control-lg my-4 w-100" name="firstname2" id="checkName2" placeholder="Имя вашей половинки" aria-label="Имя 2">
											<input type="date" class="form-control-lg my-4 w-100" name="birthday2" id="checkDate2" placeholder="Дата рождения" aria-label="Дата 2">
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-lg btn-warning my-4 w-100">Раcчет</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</article>
			</div>
			<div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
				<aside>
					<div class="banners">
						<div class="banner-item">
							<img src="/wp-content/themes/ustrb5/assets/css/Banner_matrix.jpg">
						</div>
					</div>
				</aside>
			</div>
		</div> <!-- первая строка -->
		
		<div class="row">
			<div class="col-6">
				<p class="podzagolovok firstname">Здравуствуйте <span class="firstname"></span>.</p>
				<p class="podzagolovok oldest">Вам сейчас <span class="oldest">XX</span> полных лет.</p>
				<p class="podzagolovok birthday">Рассчет для даты: <span class="birthday">дд-мм-гггг</span></p>
				<div class="scheme polovinka">
					<div class="sceme_wraper">
						<div class="schema_fon">
							<img class="schema_fon" src="/wp-content/themes/ustrb5/assets/img/SchemeMatrix00.svg" alt="">
						</div>
						<div class="sheme_r polovinka">
							<div class="A">A</div>
							<div class="B">B</div>
							<div class="C">C</div>
							<div class="D">D</div>
							<div class="E" data-toggle="tooltip" title="Зона комфорта">E</div>
							<div class="F">F</div>
							<div class="G">G</div>
							<div class="H">H</div>
							<div class="I">I</div>
							
							<div class="A1">A1</div>
							<div class="B1">B1</div>
							<div class="C1">C1</div>
							<div class="D1">D1</div>
							<div class="F1">F1</div>
							<div class="G1">G1</div>
							<div class="H1">H1</div>
							<div class="I1">I1</div>
							
							<div class="A2">A2</div>
							<div class="B2">B2</div>
							<div class="C2">C2</div>
							<div class="D2">D2</div>
							<div class="F2">F2</div>
							<div class="G2">G2</div>
							<div class="H2">H2</div>
							<div class="I2">I2</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<p class="podzagolovok firstname2">Имя вашей половинки <span class="firstname2"></span>.</p>
				<p class="podzagolovok oldest2">Возраст <span class="oldest2">XX</span> полных лет.</p>
				<p class="podzagolovok birthday2">Схема для даты: <span class="birthday2">дд-мм-гггг</span></p>
				<div class="scheme polovinka">
					<div class="sceme_wraper">
						<div class="schema_fon">
							<img class="schema_fon" src="/wp-content/themes/ustrb5/assets/img/SchemeMatrix00.svg" alt="">
						</div>
						<div class="sheme_r polovinka">
							<div class="AA">A</div>
							<div class="BB">B</div>
							<div class="CC">C</div>
							<div class="DD">D</div>
							<div class="EE" data-toggle="tooltip" title="Зона комфорта">E</div>
							<div class="FF">F</div>
							<div class="GG">G</div>
							<div class="HH">H</div>
							<div class="II">I</div>
							
							<div class="AA1">A1</div>
							<div class="BB1">B1</div>
							<div class="CC1">C1</div>
							<div class="DD1">D1</div>
							<div class="FF1">F1</div>
							<div class="GG1">G1</div>
							<div class="HH1">H1</div>
							<div class="II1">I1</div>
							
							<div class="AA2">A2</div>
							<div class="BB2">B2</div>
							<div class="CC2">C2</div>
							<div class="DD2">D2</div>
							<div class="FF2">F2</div>
							<div class="GG2">G2</div>
							<div class="HH2">H2</div>
							<div class="II2">I2</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- вторая строка -->
		<br />
		<hr class="hr hr-blurry" />
		<h1 class="text-center">Схема матрицы - совместимость</h1>
		<div class="row">
			<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
				<article>
					<div class="scheme">
						<div class="sceme_wraper">
							<div class="schema_fon">
								<img class="schema_fon" src="/wp-content/themes/ustrb5/assets/img/SchemeMatrix01.svg" alt="">
							</div>
							<div class="sheme_r">
								<div class="AAA">A</div>
								<div class="BBB">B</div>
								<div class="CCC">C</div>
								<div class="DDD">D</div>
								<div class="EEE" data-toggle="tooltip" title="Зона комфорта">E</div>
								<div class="FFF">F</div>
								<div class="GGG">G</div>
								<div class="HHH">H</div>
								<div class="III">I</div>
								
								<div class="AAA1">A1</div>
								<div class="BBB1">B1</div>
								<div class="CCC1">C1</div>
								<div class="DDD1">D1</div>
								<div class="FFF1">F1</div>
								<div class="GGG1">G1</div>
								<div class="HHH1">H1</div>
								<div class="III1">I1</div>
								
								<div class="AAA3" data-toggle="tooltip" title="Желания сердца">A3</div>
								<div class="BBB3" data-toggle="tooltip" title="Желания сердца">B3</div>
								
								<div class="AAA2">A2</div>
								<div class="BBB2">B2</div>
								<div class="CCC2">C2</div>
								<div class="DDD2">D2</div>
								<div class="FFF2">F2</div>
								<div class="GGG2">G2</div>
								<div class="HHH2">H2</div>
								<div class="III2">I2</div>
								
								<div class="EM">Em</div>
								<div class="LOVE">Lo</div>
								<div class="DENGI">De</div>
							</div>
						</div>
					</div>
				</article>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
				<aside>
				<article>
				<div class="container prdnaznachenie">
					<h1>Предназначение пары</h1>
					<div class="row">
						<div class="col-6 w-50 g-2 p-2">
							<h5>Поиск себя плюс половинка:</h5>
							<p class="podzagolovok">Соединение мужского и женского. Выстраивание взаимоотношений. Способности, навыки, умения.</p>
							<div class="row">
								<div class="col-6 text-end">
									<h5>Небо: <span class="NEBO"></span></h5>
									<h5>Земля: <span class="ZEML"></span></h5>
								</div>
								<div class="col-2 text-center align-middle">
									<div class="fig-scob">&#125;</div>
								</div>
								<div class="col-3 text-start">
									<h5><span class="SEB"></span></h5>
								</div>
							</div>
						</div>
						<div class="col-6 w-50 g-2 p-2">
							<h5>Социализация пары:</h5>
							<p class="podzagolovok">Социальная и родовые системы. Результаты и признание в социуме.</p>
							<div class="row">
								<div class="col-6 text-end">
									<h5>Муж.: <span class="RPM"></span></h5>
									<h5>Жен.: <span class="RPZH"></span></h5>
								</div>
								<div class="col-2 text-center align-middle">
									<div class="fig-scob">&#125;</div>
								</div>
								<div class="col-3 text-start">
									<h5><span class="SOC"></span></h5>
								</div>
							</div>
						</div>
						<div class="col-6 w-50 g-2 p-2">
							<h5>Духовная гармония пары:</h5>
							<p class="podzagolovok">Духовный зачет. Кто мы для бога? Где божественное в нас?</p>
							<h5>Результат: <span class="DUH"></span></h5>
						</div>
						<div class="col-6 w-50 g-2 p-2">
							<h5>Планетарное:</h5>
							<p class="podzagolovok">Планетарное предназначение пары.</p>
							<p class="podzagolovok">Миссия пары для большого количества людей.</p>
							<h5>Результат: <span class="PLANET"></span></h5>
						</div>
					</div>
				</div>
				</article>
				</aside>
			</div>
		</div> <!-- третья строка -->
	</section>
	</div>
	</main>
	<!-- Подвал сайта -->

<?php get_footer('so'); ?>