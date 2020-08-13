<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/doposle.css" />
<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="fancybox/jquery-1.3.2.min.js"></script>
	
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("a.gallery, a.iframe").fancybox();
		


			$("a.gallery2").fancybox(
			{						
			"padding" : 20, // РѕС‚СЃС‚СѓРї РєРѕРЅС‚РµРЅС‚Р° РѕС‚ РєСЂР°РµРІ РѕРєРЅР°
			"imageScale" : false, // РџСЂРёРЅРёРјР°РµС‚ Р·РЅР°С‡РµРЅРёРµ true - РєРѕРЅС‚РµРЅС‚(РёР·РѕР±СЂР°Р¶РµРЅРёСЏ) РјР°СЃС€С‚Р°Р±РёСЂСѓРµС‚СЃСЏ РїРѕ СЂР°Р·РјРµСЂСѓ РѕРєРЅР°, РёР»Рё false - РѕРєРЅРѕ РІС‹С‚СЏРіРёРІР°РµС‚СЃСЏ РїРѕ СЂР°Р·РјРµСЂСѓ РєРѕРЅС‚РµРЅС‚Р°. РџРѕ СѓРјРѕР»С‡Р°РЅРёСЋ - TRUE
			"zoomOpacity" : false,	// РёР·РјРµРЅРµРЅРёРµ РїСЂРѕР·СЂР°С‡РЅРѕСЃС‚Рё РєРѕРЅС‚РµРЅС‚Р° РІРѕ РІСЂРµРјСЏ Р°РЅРёРјР°С†РёРё (РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ false)
			"zoomSpeedIn" : 1000,	// СЃРєРѕСЂРѕСЃС‚СЊ Р°РЅРёРјР°С†РёРё РІ РјСЃ РїСЂРё СѓРІРµР»РёС‡РµРЅРёРё С„РѕС‚Рѕ (РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ 0)
			"zoomSpeedOut" : 1000,	// СЃРєРѕСЂРѕСЃС‚СЊ Р°РЅРёРјР°С†РёРё РІ РјСЃ РїСЂРё СѓРјРµРЅСЊС€РµРЅРёРё С„РѕС‚Рѕ (РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ 0)
			"zoomSpeedChange" : 1000, // СЃРєРѕСЂРѕСЃС‚СЊ Р°РЅРёРјР°С†РёРё РІ РјСЃ РїСЂРё СЃРјРµРЅРµ С„РѕС‚Рѕ (РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ 0)
			"frameWidth" : 600,	 // С€РёСЂРёРЅР° РѕРєРЅР°, px (425px - РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
			"frameHeight" : 4000, // РІС‹СЃРѕС‚Р° РѕРєРЅР°, px(355px - РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
			"overlayShow" : true, // РµСЃР»Рё true Р·Р°С‚РµРЅСЏСЏС‚ СЃС‚СЂР°РЅРёС†Сѓ РїРѕРґ РІСЃРїР»С‹РІР°СЋС‰РёРј РѕРєРЅРѕРј. (РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ true). Р¦РІРµС‚ Р·Р°РґР°РµС‚СЃСЏ РІ jquery.fancybox.css - div#fancy_overlay 
			"overlayOpacity" : 0.8,	 // РџСЂРѕР·СЂР°С‡РЅРѕСЃС‚СЊ Р·Р°С‚РµРЅРµРЅРёСЏ 	(0.3 РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
			"hideOnContentClick" :false, // Р•СЃР»Рё TRUE  Р·Р°РєСЂС‹РІР°РµС‚ РѕРєРЅРѕ РїРѕ РєР»РёРєСѓ РїРѕ Р»СЋР±РѕР№ РµРіРѕ С‚РѕС‡РєРµ (РєСЂРѕРјРµ СЌР»РµРјРµРЅС‚РѕРІ РЅР°РІРёРіР°С†РёРё). РџРѕСѓРјРѕР»С‡Р°РЅРёСЋ TRUE		
			"centerOnScroll" : false // Р•СЃР»Рё TRUE РѕРєРЅРѕ С†РµРЅС‚СЂРёСЂСѓРµС‚СЃСЏ РЅР° СЌРєСЂР°РЅРµ, РєРѕРіРґР° РїРѕР»СЊР·РѕРІР°С‚РµР»СЊ РїСЂРѕРєСЂСѓС‡РёРІР°РµС‚ СЃС‚СЂР°РЅРёС†Сѓ		
				
			});
		
		$("#menu a, .anim").hover( function() {
      $(this).animate({"paddingLeft" : "10px"}, 300)},
	  function() {$(this).animate({"paddingLeft" : "0"}, 300);
});

$("a.gallery1").fancybox(
			{						
			"padding" : 20, // РѕС‚СЃС‚СѓРї РєРѕРЅС‚РµРЅС‚Р° РѕС‚ РєСЂР°РµРІ РѕРєРЅР°
			
			"frameWidth" : 300,	 // С€РёСЂРёРЅР° РѕРєРЅР°, px (425px - РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
			"frameHeight" : 220, // РІС‹СЃРѕС‚Р° РѕРєРЅР°, px(355px - РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
			"overlayShow" : true, // РµСЃР»Рё true Р·Р°С‚РµРЅСЏСЏС‚ СЃС‚СЂР°РЅРёС†Сѓ РїРѕРґ РІСЃРїР»С‹РІР°СЋС‰РёРј РѕРєРЅРѕРј. (РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ true). Р¦РІРµС‚ Р·Р°РґР°РµС‚СЃСЏ РІ jquery.fancybox.css - div#fancy_overlay 
			"overlayOpacity" : 0.8,	 // РџСЂРѕР·СЂР°С‡РЅРѕСЃС‚СЊ Р·Р°С‚РµРЅРµРЅРёСЏ 	(0.3 РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
			"hideOnContentClick" :false, // Р•СЃР»Рё TRUE  Р·Р°РєСЂС‹РІР°РµС‚ РѕРєРЅРѕ РїРѕ РєР»РёРєСѓ РїРѕ Р»СЋР±РѕР№ РµРіРѕ С‚РѕС‡РєРµ (РєСЂРѕРјРµ СЌР»РµРјРµРЅС‚РѕРІ РЅР°РІРёРіР°С†РёРё). РџРѕСѓРјРѕР»С‡Р°РЅРёСЋ TRUE		
			"centerOnScroll" : false // Р•СЃР»Рё TRUE РѕРєРЅРѕ С†РµРЅС‚СЂРёСЂСѓРµС‚СЃСЏ РЅР° СЌРєСЂР°РЅРµ, РєРѕРіРґР° РїРѕР»СЊР·РѕРІР°С‚РµР»СЊ РїСЂРѕРєСЂСѓС‡РёРІР°РµС‚ СЃС‚СЂР°РЅРёС†Сѓ		
				
			});
		
		$("#menu a, .anim").hover( function() {
      $(this).animate({"paddingLeft" : "10px"}, 300)},
	  function() {$(this).animate({"paddingLeft" : "0"}, 300);
});


$("a.gallery11").fancybox(
			{						
			"padding" : 20, // РѕС‚СЃС‚СѓРї РєРѕРЅС‚РµРЅС‚Р° РѕС‚ РєСЂР°РµРІ РѕРєРЅР°
			
			"frameWidth" : 500,	 // С€РёСЂРёРЅР° РѕРєРЅР°, px (425px - РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
			"frameHeight" : 500, // РІС‹СЃРѕС‚Р° РѕРєРЅР°, px(355px - РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
			"overlayShow" : false, // РµСЃР»Рё true Р·Р°С‚РµРЅСЏСЏС‚ СЃС‚СЂР°РЅРёС†Сѓ РїРѕРґ РІСЃРїР»С‹РІР°СЋС‰РёРј РѕРєРЅРѕРј. (РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ true). Р¦РІРµС‚ Р·Р°РґР°РµС‚СЃСЏ РІ jquery.fancybox.css - div#fancy_overlay 
			"overlayOpacity" : 0.8,	 // РџСЂРѕР·СЂР°С‡РЅРѕСЃС‚СЊ Р·Р°С‚РµРЅРµРЅРёСЏ 	(0.3 РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
			"hideOnContentClick" :false, // Р•СЃР»Рё TRUE  Р·Р°РєСЂС‹РІР°РµС‚ РѕРєРЅРѕ РїРѕ РєР»РёРєСѓ РїРѕ Р»СЋР±РѕР№ РµРіРѕ С‚РѕС‡РєРµ (РєСЂРѕРјРµ СЌР»РµРјРµРЅС‚РѕРІ РЅР°РІРёРіР°С†РёРё). РџРѕСѓРјРѕР»С‡Р°РЅРёСЋ TRUE		
			"centerOnScroll" : false // Р•СЃР»Рё TRUE РѕРєРЅРѕ С†РµРЅС‚СЂРёСЂСѓРµС‚СЃСЏ РЅР° СЌРєСЂР°РЅРµ, РєРѕРіРґР° РїРѕР»СЊР·РѕРІР°С‚РµР»СЊ РїСЂРѕРєСЂСѓС‡РёРІР°РµС‚ СЃС‚СЂР°РЅРёС†Сѓ		
				
			});
		
		$("#menu a, .anim").hover( function() {
      $(this).animate({"paddingLeft" : "10px"}, 300)},
	  function() {$(this).animate({"paddingLeft" : "0"}, 300);
});

$("a.iframe").fancybox(
{								  
			"frameWidth" : 800,	 // С€РёСЂРёРЅР° РѕРєРЅР°, px (425px - РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
			"frameHeight" : 600 // РІС‹СЃРѕС‚Р° РѕРєРЅР°, px(355px - РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ)
								  
});

		
		});
	</script>
	<script type="text/javascript" src="js/cycle.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
  


