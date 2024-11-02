<?php
/*
Template Name: Матрица Перс
Template Post Type: post, page, matrix_fate
*/
?>
<?php get_header(); ?>

	<!-- Основное содержимое страницы в секции-->
	<main>
	<div class="container-lg my-5">
	<section>
		<div class="row">
			<div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
				<article>
					<div class="card pe-4">
						<div class="card-body">
							<h1 class="card-title my-2">Персоналка</h1>
							<h5 class="card-subtitle p-2 ms-4">Рассчитайте персональную матрицу судьбы.</h5>
							<form class="matr-form d-xl-flex my-2" action="<? $_SERVER['REQUEST_URI'];?>" method="get">
								<input type="text" class="form-control-lg my-4 w-100" id="checkName" name="firstname" placeholder="Ваше имя">
								<input type="date" class="form-control-lg my-4 w-100" id="checkDate" name="birthday" placeholder="Дата вашего рождения">
								<button type="submit" class="btn btn-warning my-4 w-100">Расчет</button>
							</form>
						</div>
					</div>
				</article>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
				<aside>
					<div class="banners">
						<div class="banner-item">
							<img src="./assets/css/Banner_matrix.jpg">
						</div>
					</div>
				</aside>
			</div>
		</div> <!-- первая строка -->
		<div class="row">
		<div class="col-12">
			<article>
				<h1>Схема матрицы судьбы расчет</h1>
				<p class="podzagolovok firstname">Здравствуйте <span class="firstname"></span>.</p>
				<p class="podzagolovok oldest">Вам сейчас <span class="oldest">XX</span> полных лет.</p>
				<p class="podzagolovok birthday">Расчет сделан на дату: <span class="birthday">дд-мм-гггг</span></p>
			</article>
		</div>
		<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
			<article>
				<div class="scheme">
					<div class="sceme_wraper">
						<div class="schema_fon">
							<img class="schema_fon" src="/wp-content/themes/ustrb5/assets/img/SchemeMatrix01.svg" alt="">
						</div>
						<div class="sheme_r">
							<div class="A">A</div>
							<div class="B">B</div>
							<div class="C">C</div>
							<div class="D">D</div>
							<div class="E" data-toggle="tooltip" title="Зона комфорта">E</div>
							
							<div class="A1">A1</div>
							<div class="B1">B1</div>
							<div class="C1">C1</div>
							<div class="D1">D1</div>
							<div class="A2">A2</div>
							<div class="B2">B2</div>
							<div class="C2">C2</div>
							<div class="D2">D2</div>
							
							<div class="A3" data-toggle="tooltip" title="Желания сердца">A3</div>
							<div class="B3" data-toggle="tooltip" title="Желания сердца">B3</div>
							
							<div class="F">F</div>
							<div class="G">G</div>
							<div class="H">H</div>
							<div class="I">I</div>

							<div class="F1">F1</div>
							<div class="G1">G1</div>
							<div class="H1">H1</div>
							<div class="I1">I1</div>
							<div class="F2">F2</div>
							<div class="G2">G2</div>
							<div class="H2">H2</div>
							<div class="I2">I2</div>
							
							<div class="EM">Em</div>
							<div class="LOVE">Lo</div>
							<div class="DENGI">De</div>
							
							<div class="LET1 LET010">22</div>
							<div class="LET2 LET010">22</div>
							<div class="LET3 LET010">22</div>
							<div class="LET5 LET010">22</div>
							<div class="LET6 LET010">22</div>
							<div class="LET7 LET010">22</div>
							<div class="LET8 LET010">22</div>
							<div class="LET11 LET1020">22</div>
							<div class="LET12 LET1020">22</div>
							<div class="LET13 LET1020">22</div>
							<div class="LET15 LET1020">22</div>
							<div class="LET16 LET1020">22</div>
							<div class="LET17 LET1020">22</div>
							<div class="LET18 LET1020">22</div>
							<div class="LET21 LET2030">22</div>
							<div class="LET22 LET2030">22</div>
							<div class="LET23 LET2030">22</div>
							<div class="LET25 LET2030">22</div>
							<div class="LET26 LET2030">22</div>
							<div class="LET27 LET2030">22</div>
							<div class="LET28 LET2030">22</div>
							<div class="LET31 LET3040">22</div>
							<div class="LET32 LET3040">22</div>
							<div class="LET33 LET3040">22</div>
							<div class="LET35 LET3040">22</div>
							<div class="LET36 LET3040">22</div>
							<div class="LET37 LET3040">22</div>
							<div class="LET38 LET3040">22</div>
							<div class="LET41 LET4050">22</div>
							<div class="LET42 LET4050">22</div>
							<div class="LET43 LET4050">22</div>
							<div class="LET45 LET4050">22</div>
							<div class="LET46 LET4050">22</div>
							<div class="LET47 LET4050">22</div>
							<div class="LET48 LET4050">22</div>
							<div class="LET51 LET5060">22</div>
							<div class="LET52 LET5060">22</div>
							<div class="LET53 LET5060">22</div>
							<div class="LET55 LET5060">22</div>
							<div class="LET56 LET5060">22</div>
							<div class="LET57 LET5060">22</div>
							<div class="LET58 LET5060">22</div>
							<div class="LET61 LET6070">22</div>
							<div class="LET62 LET6070">22</div>
							<div class="LET63 LET6070">22</div>
							<div class="LET65 LET6070">22</div>
							<div class="LET66 LET6070">22</div>
							<div class="LET67 LET6070">22</div>
							<div class="LET68 LET6070">22</div>
							<div class="LET71 LET7080">22</div>
							<div class="LET72 LET7080">22</div>
							<div class="LET73 LET7080">22</div>
							<div class="LET75 LET7080">22</div>
							<div class="LET76 LET7080">22</div>
							<div class="LET77 LET7080">22</div>
							<div class="LET78 LET7080">22</div>
						</div>
					</div>
				</div>
			</article>
		</div>
		<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
			<aside>
				<div class="chakri">
					<table class="table">
						<thead>
						<tr>
						<th scope="col"># Чакра</th>
						<th scope="col">Физика<br />(Земля)</th>
						<th scope="col">Энергия<br />(Небо)</th>
						<th scope="col">Эмоции<br />(Потенциал)</th>
						</tr>
						</thead>
						<tbody>
							<tr class="saha">
								<th scope="row" class="saha">7 Сахасрара<br /><span class="chakr_podzagolovok">Миссия.</span></th>
								<td class="A_ch">A</td>
								<td class="B_ch">B</td>
								<td class="AB_ch">AB</td>
							</tr>
							<tr class="chakr_opisan">
								<td colspan="4">Состояние волос, мозга и верхней части черепа.</td>
							</tr>
							<tr class="ajna">
								<th scope="row" class="ajna">6 Аджна<br /><span class="chakr_podzagolovok">Судьба, эгрегоры.</span></th>
								<td class="A1_ch">A1</td>
								<td class="B1_ch">B1</td>
								<td class="A1B1_ch">Ab</td>
							</tr>
							<tr class="chakr_opisan">
								<td colspan="4">Состояние глаз, ушей, лица.</td>
							</tr>
							<tr class="vishu">
								<th scope="row" class="vishu">5 Вишудха<br /><span class="chakr_podzagolovok">Оценка прошлого.</span></th>
								<td class="A2_ch">A2</td>
								<td class="B2_ch">B2</td>
								<td class="A2B2_ch">Ab</td>
							</tr>
							<tr class="chakr_opisan">
								<td colspan="4">Состояние горла, нижней челюсти, щитовидки, плечей и рук.</td>
							</tr>
							<tr class="anah">
								<th scope="row" class="anah">4 Анахата<br /><span class="chakr_podzagolovok">Отношения, картина мира.</span></th>
								<td class="A3_ch">A3</td>
								<td class="B3_ch">B3</td>
								<td class="A3B3_ch">Ab</td>
							</tr>
							<tr class="chakr_opisan">
								<td colspan="4">Состояние сердца, легких, бронхов, ребер и груди.</td>
							</tr>
							<tr class="mani">
								<th scope="row" class="mani">3 Манипура<br /><span class="chakr_podzagolovok_b">Статус, владение.</span></th>
								<td class="E_ch">E</td>
								<td class="E_ch">E</td>
								<td class="EE_ch">EE</td>
							</tr>
							<tr class="chakr_opisan">
								<td colspan="4">Состояние середины позвоночника, ЖКТ и печени.</td>
							</tr>
							<tr class="svadhi">
								<th scope="row" class="svadhi">2 Свадхистана<br /><span class="chakr_podzagolovok">Детская любовь, радость.</span></th>
								<td class="C2_ch">C2</td>
								<td class="D2_ch">D2</td>
								<td class="C2D2_ch">CD</td>
							</tr>
							<tr class="chakr_opisan">
								<td colspan="4">Почки, толстый кишечник, надпочечники и половые органы.</td>
							</tr>
							<tr class="mula">
								<th scope="row" class="mula">1 Муладхара<br /><span class="chakr_podzagolovok">Тело, материя.</span></th>
								<td class="C_ch">C</td>
								<td class="D_ch">D</td>
								<td class="CD_ch">CD</td>
							</tr>
							<tr class="chakr_opisan">
								<td colspan="4">Состояние ног, ануса, крестца и мочеполовой системы.</td>
							</tr>
							<tr class="seven">
								<th scope="row" class="seven">Итого:<br /><span class="chakr_podzagolovok_b">Общее энергополе.</span></th>
								<td class="fizika">Fi</td>
								<td class="energy">En</td>
								<td class="emocii">Em</td>
							</tr>
							<tr class="chakr_opisan">
								<td colspan="4">Костная, лимфатическая, кровеносная система и лишний вес.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</aside>
		</div>
		
		<div class="col-12">
			<article>
				<div class="container prdnaznachenie">
					<h1>Предназначение</h1>
					<div class="row">
						<div class="col-6 w-50 g-2 p-2">
							<h5>Поиск себя:</h5>
							<p class="podzagolovok">Соединение мужского и женского. Выстраивание взаимоотношений. Способности, навыки, умения.</p>
							<div class="row">
								<div class="col-6 text-end">
									<h5>Небо: <span class="NEBO">Ne</span></h5>
									<h5>Земля: <span class="ZEML">Ze</span></h5>
								</div>
								<div class="col-2 text-center align-middle">
									<div class="fig-scob">&#125;</div>
								</div>
								<div class="col-3 text-start">
									<h5><span class="SEB">Se</span></h5>
								</div>
							</div>
						</div>
						<div class="col-6 w-50 g-2 p-2">
							<h5>Социализация:</h5>
							<p class="podzagolovok">Социальная и родовые системы. Результаты и признание в социуме.</p>
							<div class="row">
								<div class="col-6 text-end">
									<h5>Мужское: <span class="RPM">M</span></h5>
									<h5>Женское: <span class="RPZH">Zh</span></h5>
								</div>
								<div class="col-2 text-center align-middle">
									<div class="fig-scob">&#125;</div>
								</div>
								<div class="col-3 text-start">
									<h5><span class="SOC">So</span></h5>
								</div>
							</div>
						</div>
						<div class="col-6 w-50 g-2 p-2">
							<h5>Духовная гармония:</h5>
							<p class="podzagolovok">Духовный зачет. Кто я для бога? Где божественное во мне?</p>
							<h5>Результат: <span class="DUH">Du</span></h5>
						</div>
						<div class="col-6 w-50 g-2 p-2">
							<h5>Планетарное:</h5>
							<p class="podzagolovok">Планетарное предназначение человека.</p>
							<p class="podzagolovok">Миссия человека для большого количества людей.</p>
							<h5>Результат: <span class="PLANET">Pl</span></h5>
						</div>
					</div>
				</div>

			</article>
		</div>
		
		</div> <!-- вторая строка -->
	</section>
	</div>
	</main>
	<!-- Подвал сайта -->

<?php get_footer(); ?>