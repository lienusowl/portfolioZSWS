
<script type="text/javascript">

		var i = 0;
		

		var answers = [
			"Вперед!",
			"Не сейчас",
			"Не делай этого",
			"Ты шутишь?",
			"Да, но позднее",
			"Думаю, не стоит",
			"Не надейся на это",
			"Ни в коем случае",
			"Это неплохо",
			"Кто знает?",
			"Туманный ответ, попробуй еще",
			"Я не уверен",
			"Я думаю, хорошо",
			"Забудь об этом",
			"Это возможно",
			"Определенно - да",
			"Быть может",
			"Слишком рано",
			"Да",
			"Конечно, да",
			"Даже не думай",
			"Злобный хакер",
			"Лучше Вам пока этого не знать"
		];

		$(function () {

			$('.panel-text').click(function () {
				//i = (i + 1) % answers.length;
				i = Math.floor(Math.random() * answers.length)
				showText(this, answers[i]);
			}); ;

			function showText(panel, text) {

				var panel = $(panel);
				var msg = $('.message', panel);
				panel.fadeOut(500, function () {
					msg.html(text);
					panel.fadeIn(500);
				});
			}
		});
	
	</script>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-18125737-1']);
		_gaq.push(['_trackPageview']);

		(function () {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

		<div class="panel-ball" style="font-size:8pt;" align="center">
			<div class="panel-text" style="display: table; #position: relative; overflow: hidden;">
				
					<div class="message" style="#position: relative; #top: -50%; #left: -50%;">
						Кликните,чтобы узнать ответ
					</div>
				
			</div>
		</div>
