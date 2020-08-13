<section id="questions">
	<!--<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-6 col-ms-6 left"></div>
			<div class="col-md-6 col-ms-6 right"></div>
		</div>
	</div>-->
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 left">
				<h2 class="title">Остались вопросы?</h2>
				<form class="form-horizontal ajax-form" id="form-question">
			         <input type="hidden" name="tid" value="Задать вопрос">
			        <div class="form-group for-name">
			          <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
			        </div>
			        <div class="row">
			        	<div class="form-group col-sm-6">
				          <input type="text" class="form-control name" id="inpt1" placeholder="Имя" name="inpt1">
				        </div>
				        <div class="form-group col-sm-6">
				          <input type="tel" class="form-control number" id="number" placeholder="Телефон" name="number" required="">
				        </div>
			        </div>
			        <div class="clear"></div>
			        <center><button type="submit" class="btn send" id="send" name="submit">Позвонить</button></center>
			        <div class="clear"></div>
			    </form>
			</div>
			<div class="col-md-6 col-sm-6 right">
				<h2 class="title">Хотите получать наши новости?</h2>
				<form class="form-horizontal ajax-form" id="form-subscribe">
			         <input type="hidden" name="tid" value="Подписка на новости">
			        <div class="form-group for-name">
			          <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
			        </div>
		        	<div class="form-group">
			          <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required="">
			        </div>
			        <div class="clear"></div>
			        <center><button type="submit" class="btn send" id="send" name="submit">Подписаться</button></center>
			        <div class="clear"></div>
			    </form>
			</div>
		</div>
	</div>
</section>