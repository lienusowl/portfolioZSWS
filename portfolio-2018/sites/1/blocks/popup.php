<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<div class="row">
				<div class="col-sm-4 modal-left"></div>
				<div class="col-sm-8 modal-right">
					<h3 id="modal_title"></h3>
					<form class="form-horizontal" id="form-call" method="post" action="order.php">
						<input type="hidden" name="tid" id="tid" value="">
						<div class="form-group for-name">
							<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
						</div>
						<div class="form-group">
							<input type="text" class="form-control inpt1" id="inpt1" name="inpt1" required>
							<b class="label"><span>Имя*</span></b>
							<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 64" preserveAspectRatio="none">
	                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
	                        </svg>
						</div>
						<div class="form-group">
							<input type="tel" class="form-control phone" id="phone" name="phone" required>
							<b class="label"><span>Телефон*</span></b>
							<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 64" preserveAspectRatio="none">
	                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
	                        </svg>
						</div>
						<button type="submit" class="btn phone-btn" id="send" name="submit"> Заказать звонок</button>
						<div class="req">
							<label class="checkbox-btn">
								<input name="req" type="checkbox" value="req" required checked><div></div>
								<p>Я согласен(а) <a href="#">с политикой обработки персональных данных</a></p>
							</label>
						</div>
					</form>
					<div class="text">
						Или позвоните нам по номеру:<br>
						<a href="tel:+78363161341" class="phone-modal">+7 (83631) 6-13-41</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="city-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<p class="text-center">Выберите Ваш город:</p>
			<p><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Волжск</a></p>
			<p><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Зеленодольск</a></p>
			<p><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Казань</a></p>
		</div>
	</div>
</div>
<img src="assets/template/img/close-red.png" alt="" style="display: none;">