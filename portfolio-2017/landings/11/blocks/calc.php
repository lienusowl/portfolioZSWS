<section id="calc">
	<h2 class="title">
		Оставьте заявку на расчёт стоимости
	</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-4">
				<div class="calc-left">
					
				</div>
			</div>
			<div class="col-md-6 col-sm-4">
				<div class="calc-right">
					<h3>Расчёт стоимости окна</h3>
					<form class="form-horizontal ajax-form" id="form-calc">
				        <input type="hidden" name="tid" value="Расчёт стоимости окна">
				        <div class="form-group for-name">
				          <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				        </div>
				        <div class="form-group">
					        <div class="row">
					        	<div class="col-sm-3">
					        		<label>Ширина</label>
					        		<input type="number" class="form-control" id="stage1" placeholder="3 м" name="stage1" min="1">
					        	</div>
					        	<div class="col-sm-3">
					        		<label>Высота</label>
					        		<input type="number" class="form-control" id="stage2" placeholder="3 м" name="stage2" min="1">
					        	</div>
					        	<div class="col-sm-6">
					        		<label>Количество створок</label>
					        		<select name="stage3" class="form-control">
										<option value="1 створка" selected="">1 створка</option>
										<option value="2 створки">2 створки</option>
										<option value="3 створки">3 створки</option>
									</select>
					        	</div>
					        </div>
					    </div>
				        <div class="form-group">
				        	<textarea cols="30" rows="4" name="message" id="message" class="form-control" placeholder="Пожелания"></textarea>
				        </div>
				        </div>
				        <div class="form-group">
				        	<div class="row">
				        		<div class="col-sm-8">
				        			<input type="tel" class="form-control" id="number" placeholder="Ваш номер телефона" name="number" required="">
				        		</div>
				        		<div class="col-sm-4">
				        			<button type="submit" class="btn send" id="send" name="submit">Узнать цену</button>
				        		</div>
				        	</div>
				        </div>
				        <div class="clear"></div>
				    </form>
				</div>
			</div>
		</div>
	</div>
</section>