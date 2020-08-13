<section id="form">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xl-7">
				<h2 class="title">Бесплатная консультация</h2>
				<h3 class="title2">ОСТАЛИСЬ ВОПРОСЫ?  Напишите нам и мы проконсультируем Вас абсолютно бесплатно!</h3>
			</div>
			<div class="col-lg-1 col-xl-1"></div>
			<div class="col-md-5 col-lg-5 col-xl-4">
				<form class="form-horizontal" method="POST" action="order.php">
					<input type="hidden" name="tid" value="Бесплатная консультация">
					<div class="form-group for-name" style="display: none;">
						<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Как Вас зовут" required>
					</div>
					<div class="form-group">
						<input type="tel" class="form-control" id="number" name="number" placeholder="Номер телефона" required="">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Сообщение" required></textarea>
					</div>
					<div class="row conf-row">
						<div class="col-md-auto">
							<button type="submit" class="btn" id="send" name="submit">Отправить</button>
						</div>
						<div class="col">
							<p class="politics">Нажимая на кнопку Отправить, вы даете согласие на обработку своих <a href="politics.php" target="_blank">персональных данных</a></p>
						</div>
					</div>	
				</form>
			</div>
		</div>
		
	</div>
</section>