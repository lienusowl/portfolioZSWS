<section id="footer">
	<div class="container">
		<h2 class="title white">Отправить идею<br>на конкурс</h2>
		<form method="post" action="order.php" id="form-footer" name="feedback" enctype="multipart/form-data">
	        <input type="hidden" name="tid" value="Отправить идею на конкурс">
	        <div class="form-group for-name">
	          <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
	        </div>
	        <div class="row">
	        	<div class="col-sm-4">
	        		<div class="form-group name">
	        			<input type="text" class="form-control" id="inpt1" placeholder="Ваше имя" name="inpt1">
	        		</div>
	        	</div>
	        	<div class="col-sm-4">
					<div class="form-group phone">
				        <input type="tel" class="form-control" id="number" placeholder="Ваш телефон" name="number">
				    </div>
	        	</div>
	        	<div class="col-sm-4">
					<div class="form-group email">
						<input type="email" class="form-control" id="email" placeholder="Ваш email" name="email" required="">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group message">
						<textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Бизнес идея"></textarea>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group file">
						<input name="fileforsending" type="file" />
						<i class="fa fa-file-text-o" aria-hidden="true"></i>
					</div>
				</div>
	        </div>
	        <button type="submit" class="btn send" id="send" name="Submit1">Отправить</button>	        
	      </form>
	</div>
</section>
<div id="result"></div>
<img src="img/ajax-loader.gif" id="load-indicator" alt="loading" style="position:absolute; z-index:1000; display:none;" />