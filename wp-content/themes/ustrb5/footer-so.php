<footer class="footer">
	<div class="container">
	<div class="row justify-content-between">
		<div class="col-md-3 col-12">
			<div class="copy">
				<p>Калькулятор судьбы ОНЛАЙН</p>
				<p>© 2024 Матрица судьбы.</p>
				<small>Все права защищены.</small>
			</div>
		</div>
		<div class="col-md-5 col-12">
			<?php wp_nav_menu( array(
			'menu'	=> 4,
			'container' => 'ul',
			'container_class' => 'footer_menu',
			'menu_class' => 'footer_menu',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth' => 0,
			) ); ?>
		</div>
		<div class="col-md-4 col-12">
			<div class="footer-button"><button type="button" class="h_zz btn btn-lg btn-warning w-100">Заказать звонок</button></div>
			<div class="footer-contacts">
				<p class="footer-contacts_phone"><a href="tel:+79258790977">+7(995) 155-03-47</a></p>
				<p class="footer-contacts_email"><a href="mailto:ShuSashi@ya.ru">ShuSashi@ya.ru</a></p>
			</div>
			<div class="footer-social">
				<a class="footer-policy" href="/policy/">Полит конф.</a>
				<a class="footer-policy" href="/map/">Карта сайта</a>
			</div>
		</div>
	</div>
	</div> <!-- Container Футера -->
</footer>

	<!-- Подключение JS скрипта для обработки схемы и таблицы -->
	<script src="/wp-content/themes/ustrb5/assets/js/sovmest_new.js"></script>

	<?php wp_footer(); ?>
</body>
</html>