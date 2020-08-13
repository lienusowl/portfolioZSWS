$(document).ready(function(){
	window.scrollBy(0, 1);
	$(".inputPhone").mask(" +7 (999) 999 99 99");
	
			$(".popup-btn").click(function(){
				$(".popup").show("fast");
				$(".hover").show();
			})
			$(".popup-btn2").click(function(){
				$(".popup2").show("fast");
				$(".hover").show();
				var btn = $(this).attr("value");
				var id = document.getElementById(btn);
				var hid = document.getElementById("hid");
				var hide = document.getElementById("hide");
				hid.innerText = id.innerText;
				hide.value = id.innerText;
			})
			$(".popup-btn4").click(function(){
				$(".popup3").show("fast");
				$(".hover").show();
			})
			$(".hover").click(function(){
				$(".popup").hide("fast");
				$(".popup2").hide("fast");
				$(".popup3").hide("fast");
				$(".hover").hide();
			})
	});