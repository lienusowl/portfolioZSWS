<section id="form">
	<div class="container">
		<h2 class="title white">Оставьте заявку на консультацию прямо сейчас</h2>
		<form class="form-horizontal" id="form-main" method="post" action="order.php">
			<input type="hidden" name="tid" value="Заявка на консультацию">
			<div class="form-group for-name">
				<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<input type="text" class="form-control inpt1" id="inpt1" name="inpt1" required>
						<b><span>Имя*</span></b>
						<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 64" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                        </svg>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<input type="tel" class="form-control phone" id="phone" name="phone" required>
						<b><span>Телефон*</span></b>
						<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 64" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                        </svg>
					</div>
				</div>
				<div class="col-sm-4">
					<button type="submit" class="btn" id="send" name="submit">Отправить</button>
				</div>
			</div>
			<div class="req">
				<label class="checkbox-btn">
					<input name="req" type="checkbox" value="req" required checked><div></div>
					<p>Я согласен(а) <a href="#">с политикой обработки персональных данных</a></p>
				</label>
			</div>
		</form>
	</div>
</section>